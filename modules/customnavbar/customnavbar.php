<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class CustomNavbar extends Module
{
    public function __construct()
    {
        $this->name = 'customnavbar';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Your Name';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Custom Navbar');
        $this->description = $this->l('Displays a custom navbar with logo, categories, and icons.');
    }

    public function install()
    {
        return parent::install();
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function getContent()
    {
        return 'Custom Navbar module configuration';
    }

    public function hookDisplayNavFullWidth()
    {    
        $rootCategoryId = Category::getRootCategory()->id;

         $categories = Category::getChildren($rootCategoryId, $this->context->language->id);
         $this->context->controller->registerStylesheet('customnavbar', 'modules/customnavbar/views/css/customnavbar.css', ['media' => 'all', 'priority' => 150]);
         $this->context->smarty->assign('categories', $categories);
        return $this->display(__FILE__, 'views/templates/hook/customnavbar.tpl');
    }
}
