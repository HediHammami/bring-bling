<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Benefits extends Module
{
    public function __construct()
    {
        $this->name = 'benefits';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Hedi@dev';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Benefits Section');
        $this->description = $this->l('Displays a Benefits section.');
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayHome') &&
            $this->registerHook('displayFooterProduct')&&
            $this->registerHook('displayCustomCategoryHook');
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
        $this->context->controller->addCSS($this->_path . 'views/css/benefits.css');
        return $this->display(__FILE__, 'views/templates/hook/benefits.tpl');
    }
    public function hookDisplayFooterProduct($params)
    {
        $this->context->controller->addCSS($this->_path . 'views/css/benefits.css');
        return $this->display(__FILE__, 'views/templates/hook/benefits.tpl');
    }

    public function hookDisplayHome($params)
    {
        $this->context->controller->addCSS($this->_path . 'views/css/benefits.css');
        return $this->display(__FILE__, 'views/templates/hook/benefits.tpl');
    }
}
