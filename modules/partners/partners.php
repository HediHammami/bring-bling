<?php


if (!defined('_PS_VERSION_')) {
    exit;
}

class Partners extends Module
{
    public function __construct()
    {
        $this->name = 'partners';
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

        $this->displayName = $this->l('Slider for our partners');
        $this->description = $this->l('Displays a slider for our partners.');

        $this->confirmUninstall = $this->trans('Are you sure you want to uninstall?', [], 'Modules.Mymodule.Admin');

        if (!Configuration::get('MYMODULE_NAME')) {
            $this->warning = $this->trans('No name provided', [], 'Modules.Mymodule.Admin');
        }
    }

    public function install()
    {
        return parent::install() && $this->registerHook('displayHome') && $this->registerHook('displayCustomCategoryHook');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    private function loadPartnerSliderAssets()
    {
        $this->context->controller->addCSS($this->_path . 'views/css/partners_slider.css');
        $this->context->controller->addJS($this->_path . 'views/js/partners_slider.js');

    }

    public function hookDisplayCustomCategoryHook($params)
    {

        $this->loadPartnerSliderAssets();


        $partners = array(
            array('name' => 'Partner 1', 'logo' => $this->_path . 'views/img/partner1.svg'),
            array('name' => 'Partner 2', 'logo' => $this->_path . 'views/img/partner2.svg'),
            array('name' => 'Partner 3', 'logo' => $this->_path . 'views/img/partner3.svg'),
            array('name' => 'Partner 4', 'logo' => $this->_path . 'views/img/partner4.svg'),
            array('name' => 'Partner 5', 'logo' => $this->_path . 'views/img/partner5.svg'),
        );

        $this->context->smarty->assign(
            array(
                'partners' => $partners,
            )
        );

        return $this->display(__FILE__, 'views/templates/hook/myslider.tpl');


    }


    public function hookDisplayHome($params)
    {

        $this->loadPartnerSliderAssets();


        $partners = array(
            array('name' => 'Partner 1', 'logo' => $this->_path . 'views/img/partner1.svg'),
            array('name' => 'Partner 2', 'logo' => $this->_path . 'views/img/partner2.svg'),
            array('name' => 'Partner 3', 'logo' => $this->_path . 'views/img/partner3.svg'),
            array('name' => 'Partner 4', 'logo' => $this->_path . 'views/img/partner4.svg'),
            array('name' => 'Partner 5', 'logo' => $this->_path . 'views/img/partner5.svg'),
        );

        $this->context->smarty->assign(
            array(
                'partners' => $partners,
            )
        );

        return $this->display(__FILE__, 'views/templates/hook/myslider.tpl');


    }
}
