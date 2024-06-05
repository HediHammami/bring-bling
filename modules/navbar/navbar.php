<?php


if (!defined('_PS_VERSION_')) {
    exit;
}

class Navbar extends Module
{
    public function __construct()
    {
        $this->name = 'navbar';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Hedi@dev';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7.0.0',
            'max' => '8.99.99',
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->trans('Navbar custom hook', [], 'Modules.Mymodule.Admin');
        $this->description = $this->trans('Description of my module.', [], 'Modules.Mymodule.Admin');

        $this->confirmUninstall = $this->trans('Are you sure you want to uninstall?', [], 'Modules.Mymodule.Admin');

        if (!Configuration::get('MYMODULE_NAME')) {
            $this->warning = $this->trans('No name provided', [], 'Modules.Mymodule.Admin');
        }
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayTop') &&
            $this->registerHook('displayCustomIcons');
    }



    public function hookDisplayCustomIcons($params)
    {
        $this->context->controller->addCSS($this->_path . 'views/css/navbar.css');
        $this->context->smarty->assign([
            'search_url' => $this->context->link->getPageLink('search'),
            'user_url' => $this->context->link->getPageLink('my-account'),
            'cart_url' => $this->context->link->getPageLink('cart'),
            'cart_products_count' => $this->context->cart->nbProducts(),
            'wishlist_url' => $this->context->link->getModuleLink('blockwishlist', 'mywishlist'),
        ]);
        return $this->display(__FILE__, 'views/templates/hook/navbar.tpl');
    }






}
