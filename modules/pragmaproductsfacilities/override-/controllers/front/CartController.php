<?php

use PrestaShop\PrestaShop\Adapter\Presenter\Cart\CartPresenter;

class CartController extends CartControllerCore
{
    public function displayAjaxUpdate()
    {
        if (Configuration::isCatalogMode()) {
            return;
        }

        $productsInCart = $this->context->cart->getProducts();
        $updatedProducts = array_filter($productsInCart, [$this, 'productInCartMatchesCriteria']);
        $updatedProduct = reset($updatedProducts);
        $productQuantity = $updatedProduct['quantity'];

        if (!$this->errors) {
            $cartPresenter = new CartPresenter();
            $presentedCart = $cartPresenter->present($this->context->cart);

            /** FBR */
            if (Tools::getIsset('number_payment')) {
                $number_payment = Tools::getValue('number_payment');
                Cart::updateNumberPayment($this->context->cart->id, $this->id_product, $this->customization_id, $this->id_product_attribute, $number_payment);
            }

            // filter product output
            $presentedCart['products'] = $this->get('prestashop.core.filter.front_end_object.product_collection')
                ->filter($presentedCart['products']);

            $this->ajaxRender(Tools::jsonEncode([
                'success' => true,
                'id_product' => $this->id_product,
                'id_product_attribute' => $this->id_product_attribute,
                'id_customization' => $this->customization_id,
                'quantity' => $productQuantity,
                'cart' => $presentedCart,
                'errors' => empty($this->updateOperationError) ? '' : reset($this->updateOperationError),
            ]));

            return;
        } else {
            $this->ajaxRender(Tools::jsonEncode([
                'hasError' => true,
                'errors' => $this->errors,
                'quantity' => $productQuantity,
            ]));

            return;
        }
    }
}
