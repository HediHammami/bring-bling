<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Banners extends Module
{
    public function __construct()
    {
        $this->name = 'banners';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Hedi@dev';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Banners');
        $this->description = $this->l('Displays banners on the homepage.');
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayHome') &&
            $this->registerHook('displayFooterProduct');
    }

    public function uninstall()
    {
        if (!parent::uninstall()) {
            return false;
        }
        return true;
    }


    public function hookDisplayHome($params)
    {
        $this->context->controller->addCSS($this->_path . 'css/banners.css');
        return $this->display(__FILE__, 'banners.tpl');
    }

    public function hookDisplayFooterProduct($params)
    {
        $this->context->controller->addCSS($this->_path . 'css/banners.css');
        return $this->display(__FILE__, 'banners.tpl');
    }
}
