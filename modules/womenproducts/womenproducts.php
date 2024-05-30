<?php


if (!defined('_PS_VERSION_')) {
    exit;
}

class WomenProducts extends Module
{
    public function __construct()
    {
        $this->name = 'womenproducts';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'MedHedi@dev';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7.0.0',
            'max' => '8.99.99',
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Product Slider for women');
        $this->description = $this->l('Displays a products slider.');

        $this->confirmUninstall = $this->trans('Are you sure you want to uninstall?', [], 'Modules.Mymodule.Admin');

        if (!Configuration::get('MYMODULE_NAME')) {
            $this->warning = $this->trans('No name provided', [], 'Modules.Mymodule.Admin');
        }
    }

    public function install()
    {
        return parent::install() &&
            // $this->registerHook('actionFrontControllerSetMedia') &&
            $this->registerHook('displayHome');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    // public function hookActionFrontControllerSetMedia()
    // {
    //     $this->context->controller->registerStylesheet(
    //         'modules-prodSlider-owl-carousel-min',
    //         $this->_path . 'views/css/owl.carousel.min.css',
    //         [
    //             'media' => 'all',
    //             'priority' => 1000,
    //         ]
    //     );
    //     $this->context->controller->registerStylesheet(
    //         'modules-prodSlider-owl-theme',
    //         $this->_path . 'views/css/owl.theme.default.min.css',
    //         [
    //             'media' => 'all',
    //             'priority' => 1000,
    //         ]
    //     );
    //     $this->context->controller->registerStylesheet(
    //         'modules-prodSlider-slider',
    //         $this->_path . 'views/css/slider.css',
    //         [
    //             'media' => 'all',
    //             'priority' => 1000,
    //         ]
    //     );

    //     $this->context->controller->registerJavascript(
    //         'modules-prodSlider-owl-carousel',
    //         $this->_path . 'views/js/owl.carousel.min.js',
    //         [
    //             'position' => 'bottom',
    //             'priority' => 1000,
    //         ]
    //     );
    //     $this->context->controller->registerJavascript(
    //         'modules-prodSlider-custom',
    //         $this->_path . 'views/js/slider.js',
    //         [
    //             'position' => 'bottom',
    //             'priority' => 1000,
    //         ]
    //     );
    // }



    public function hookDisplayHome($params)
    {

        $this->context->controller->addCSS($this->_path . 'views/css/owl.carousel.min.css');
        $this->context->controller->addCSS($this->_path . 'views/css/owl.theme.default.min.css');
        $this->context->controller->addCSS($this->_path . 'views/css/slider.css');
        $this->context->controller->addJS($this->_path . 'views/js/owl.carousel.min.js');
        $this->context->controller->addJS($this->_path . 'views/js/slider.js');

        $categoryId = 3; // Category ID for 'Women'
        $products = Product::getProducts($this->context->language->id, 0, 10, 'id_product', 'DESC', $categoryId, true, null);

        $productData = array();
        foreach ($products as $product) {
            $product_obj = new Product((int) $product['id_product'], false, Context::getContext()->language->id);
            $image_type = 'medium_default';
            $img = $product_obj->getCover($product_obj->id);
            $img_url = $this->context->link->getImageLink(isset($product_obj->link_rewrite) ? $product_obj->link_rewrite : $product_obj->name, (int) $img['id_image'], $image_type);

            $manufacturer = new Manufacturer($product_obj->id_manufacturer, Context::getContext()->language->id);

            $discountedPrice = $product_obj->getPriceStatic(
                (int) $product['id_product'],
                false,
                null,
                6, // Set the number of decimals
                null,
                false,
                true // Use the tax calculation
            );







            // Calculate the discount percentage
            $discount_percentage = 0;
            $specific_prices = SpecificPrice::getByProductId((int) $product['id_product']);
            if ($specific_prices) {
                foreach ($specific_prices as $specific_price) {
                    if ($specific_price['reduction_type'] == 'percentage') {
                        $discount_percentage = round($specific_price['reduction'] * 100);
                    } elseif ($specific_price['reduction_type'] == 'amount') {
                        $original_price = $product_obj->getPriceStatic(
                            (int) $product['id_product'],
                            false,
                            null,
                            6, // Set the number of decimals
                            null,
                            false,
                            true // Use the tax calculation
                        );
                        $discounted_price = $original_price - $specific_price['reduction'];
                        if ($original_price > $discounted_price) {
                            $discount_percentage = round((($original_price - $discounted_price) / $original_price) * 100);
                        }
                    }
                }
            }

            $price_formatted = Tools::displayPrice($product_obj->price, $this->context->currency);
            $discounted_price_formatted = Tools::displayPrice($discountedPrice, $this->context->currency);
        
            // Concatenate currency symbol after the price
            $price_formatted_with_currency = $price_formatted;
            $discounted_price_formatted_with_currency = $discounted_price_formatted;

            $productData[] = array(
                'name' => $product_obj->name,
                'price' => $price_formatted_with_currency,
                'image_url' => $img_url,
                'link' => $this->context->link->getProductLink($product_obj),
                'manufacturer_name' => $manufacturer->name,
                'discount_percentage' => $discount_percentage,
                'has_discount' => $discount_percentage > 0,
                'discountedPrice' => $discounted_price_formatted_with_currency,

            );
        }

        $this->context->smarty->assign('products', $productData);
        return $this->display(__FILE__, 'views/templates/hook/slider.tpl');
    }
}
