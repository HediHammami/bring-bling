<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
class OrderDetail extends OrderDetailCore
{
    public $number_payment;

    public static $definition = [
        'table' => 'order_detail',
        'primary' => 'id_order_detail',
        'fields' => [
            'id_order' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true],
            'id_order_invoice' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'],
            'id_warehouse' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true],
            'id_shop' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true],
            'product_id' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'],
            'product_attribute_id' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'],
            'id_customization' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'],
            'product_name' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true],
            'product_quantity' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => true],
            'product_quantity_in_stock' => ['type' => self::TYPE_INT, 'validate' => 'isInt'],
            'product_quantity_return' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
            'product_quantity_refunded' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
            'product_quantity_reinjected' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
            'product_price' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true],
            'reduction_percent' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'],
            'reduction_amount' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'],
            'reduction_amount_tax_incl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'],
            'reduction_amount_tax_excl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'],
            'group_reduction' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'],
            'product_quantity_discount' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'],
            'product_ean13' => ['type' => self::TYPE_STRING, 'validate' => 'isEan13'],
            'product_isbn' => ['type' => self::TYPE_STRING, 'validate' => 'isIsbn'],
            'product_upc' => ['type' => self::TYPE_STRING, 'validate' => 'isUpc'],
            'product_mpn' => ['type' => self::TYPE_STRING, 'validate' => 'isMpn'],
            'product_reference' => ['type' => self::TYPE_STRING, 'validate' => 'isReference'],
            'product_supplier_reference' => ['type' => self::TYPE_STRING, 'validate' => 'isReference'],
            'product_weight' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'],
            'tax_name' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName'],
            'tax_rate' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'],
            'tax_computation_method' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'],
            'id_tax_rules_group' => ['type' => self::TYPE_INT, 'validate' => 'isInt'],
            'ecotax' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'],
            'ecotax_tax_rate' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'],
            'discount_quantity_applied' => ['type' => self::TYPE_INT, 'validate' => 'isInt'],
            'download_hash' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName'],
            'download_nb' => ['type' => self::TYPE_INT, 'validate' => 'isInt'],
            'download_deadline' => ['type' => self::TYPE_DATE, 'validate' => 'isDateFormat'],
            'unit_price_tax_incl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'],
            'unit_price_tax_excl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'],
            'total_price_tax_incl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'],
            'total_price_tax_excl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'],
            'total_shipping_price_tax_excl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'],
            'total_shipping_price_tax_incl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'],
            'purchase_supplier_price' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'],
            'original_product_price' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'],
            'original_wholesale_price' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'],
            'total_refunded_tax_excl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'],
            'total_refunded_tax_incl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice'],
            'number_payment' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'], /** FBR */
        ],
    ];

    protected function create(Order $order, Cart $cart, $product, $id_order_state, $id_order_invoice, $use_taxes = true, $id_warehouse = 0)
    {
        if ($use_taxes) {
            $this->tax_calculator = new TaxCalculator();
        }

        $this->id = null;

        $this->product_id = (int) $product['id_product'];
        $this->product_attribute_id = $product['id_product_attribute'] ? (int) $product['id_product_attribute'] : 0;
        $this->id_customization = $product['id_customization'] ? (int) $product['id_customization'] : 0;
        $this->product_name = $product['name'] .
            ((isset($product['attributes']) && $product['attributes'] != null) ?
                ' - ' . $product['attributes'] : '');

        $this->product_quantity = (int) $product['cart_quantity'];
        $this->product_ean13 = empty($product['ean13']) ? null : pSQL($product['ean13']);
        $this->product_isbn = empty($product['isbn']) ? null : pSQL($product['isbn']);
        $this->product_upc = empty($product['upc']) ? null : pSQL($product['upc']);
        $this->product_mpn = empty($product['mpn']) ? null : pSQL($product['mpn']);
        $this->product_reference = empty($product['reference']) ? null : pSQL($product['reference']);
        $this->product_supplier_reference = empty($product['supplier_reference']) ? null : pSQL($product['supplier_reference']);
        $this->product_weight = $product['id_product_attribute'] ? (float) $product['weight_attribute'] : (float) $product['weight'];
        $this->id_warehouse = $id_warehouse;

        /** FBR */
        $this->number_payment = $product['number_payment'] ? (int) $product['number_payment'] : 1;

        $product_quantity = (int) Product::getQuantity($this->product_id, $this->product_attribute_id, null, $cart);
        $this->product_quantity_in_stock = ($product_quantity - (int) $product['cart_quantity'] < 0) ?
            $product_quantity : (int) $product['cart_quantity'];

        $this->setVirtualProductInformation($product);
        $this->checkProductStock($product, $id_order_state);

        if ($use_taxes) {
            $this->setProductTax($order, $product);
        }
        $this->setShippingCost($order, $product);
        $this->setDetailProductPrice($order, $cart, $product);

        // Set order invoice id
        $this->id_order_invoice = (int) $id_order_invoice;

        // Set shop id
        $this->id_shop = (int) $product['id_shop'];

        // Add new entry to the table
        $this->save();

        if ($use_taxes) {
            $this->saveTaxCalculator($order);
        }
        unset($this->tax_calculator);
    }
}
