<?php


if (!defined('_PS_VERSION_')) {
    exit;
}

class MyModule extends Module
{
    public function __construct()
    {
        $this->name = 'mymodule';
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

        $this->displayName = $this->trans('My module', [], 'Modules.Mymodule.Admin');
        $this->description = $this->trans('Description of my module.', [], 'Modules.Mymodule.Admin');

        $this->confirmUninstall = $this->trans('Are you sure you want to uninstall?', [], 'Modules.Mymodule.Admin');

        if (!Configuration::get('MYMODULE_NAME')) {
            $this->warning = $this->trans('No name provided', [], 'Modules.Mymodule.Admin');
        }
    }



    public function hookDisplayHome()
    {

        
        $this->context->controller->addCSS($this->_path . 'views/css/mymodule.css');
    
        $this->context->controller->addJS($this->_path . 'views/js/mymodule.js');

        $rootCategoryId = Category::getRootCategory()->id;

        $categories = Category::getChildren($rootCategoryId, $this->context->language->id);



        $this->context->smarty->assign('categories', $categories);


        return $this->display(__FILE__, 'views/templates/hook/displayHome.tpl');
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
        return parent::uninstall();
    }
}
