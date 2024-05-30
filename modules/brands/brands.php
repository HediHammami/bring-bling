<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Brands extends Module
{
    public function __construct()
    {
        $this->name = 'brands';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Hedi@dev';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Brands');
        $this->description = $this->l('Displays Brands');
    }

    public function install()
    {
        if (
            parent::install() &&
            $this->registerHook('displayHome')&&
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
        $this->context->controller->addCSS($this->_path . 'views/css/brands.css');

        $images = array(
            array('url' => $this->_path . 'images/brand1.png', 'alt' => 'Image 1', 'text' => 'ray ban'),
            array('url' => $this->_path . 'images/brand2.png', 'alt' => 'Image 2', 'text' => 'Manolo Blahnik'),
            array('url' => $this->_path . 'images/brand3.png', 'alt' => 'Image 3', 'text' => 'MOCLER')
        );

        $this->context->smarty->assign('images', $images);
        return $this->display(__FILE__, 'brands.tpl');
    }


    public function hookDisplayHome($params)
    {
        $this->context->controller->addCSS($this->_path . 'views/css/brands.css');

        $images = array(
            array('url' => $this->_path . 'images/brand1.png', 'alt' => 'Image 1', 'text' => 'ray ban'),
            array('url' => $this->_path . 'images/brand2.png', 'alt' => 'Image 2', 'text' => 'Manolo Blahnik'),
            array('url' => $this->_path . 'images/brand3.png', 'alt' => 'Image 3', 'text' => 'MOCLER')
        );

        $this->context->smarty->assign('images', $images);
        return $this->display(__FILE__, 'brands.tpl');
    }
}
