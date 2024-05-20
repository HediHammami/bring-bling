<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class HeroSection extends Module
{
    public function __construct()
    {
        $this->name = 'herosection';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Hedi@dev';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Hero Section');
        $this->description = $this->l('Displays a hero section with image, text, and button.');
    }

    public function install()
    {
        if (
            !parent::install() ||
            !$this->registerHook('displayHome')
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

    public function hookHeader($params)
{
    $this->context->controller->registerStylesheet(
        'module-herosection', 
        'modules/herosection/css/herosection.css', 
        ['media' => 'all', 'priority' => 0]
    );
}


    public function hookDisplayHome($params)
    {
        return $this->display(__FILE__, 'herosection.tpl');
    }
}
