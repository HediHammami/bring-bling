<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class CatBanners extends Module
{
    public function __construct()
    {
        $this->name = 'catbanners';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Hedi@dev';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('My Module');
        $this->description = $this->l('A module that adds a custom hook.');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayCustomCategoryHook');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookDisplayCustomCategoryHook($params)
    {
        $this->context->controller->addCSS($this->_path . 'css/cat_banners.css');
        return $this->display(__FILE__, 'catbanners.tpl');

    }
}
