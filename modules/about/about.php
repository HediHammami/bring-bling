<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class About extends Module
{
    public function __construct()
    {
        $this->name = 'about';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Hedi@dev';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('About us section');
        $this->description = $this->l('Displays a paragraph in the homepage');
    }

    public function install()
    {
        if (
            parent::install() &&
            $this->registerHook('displayHome') &&
            $this->registerHook('displayCustomCategoryHook')
        ) {
            return false;
        }
        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall()) {
            return false;
        }
        return true;
    } 

    public function hookDisplayCustomCategoryHook($params)
    {
        $this->context->controller->addCSS($this->_path . 'views/css/about.css');
        return $this->display(__FILE__, 'views/templates/hook/about.tpl');
    }

    public function hookDisplayHome($params)
    {
        $this->context->controller->addCSS($this->_path . 'views/css/about.css'); 
        return $this->display(__FILE__, 'views/templates/hook/about.tpl');
    }
}
