<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class CustomTopBar extends Module
{
    public function __construct()
    {
        $this->name = 'customtopbar';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Hedi@dev';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Custom TopBar');
        $this->description = $this->l('Displays a custom topbar.');
    }

    public function install()
    {
        if (
            !parent::install() ||
            !$this->registerHook('displayCustomHook')
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

    public function hookDisplayCustomHook($params)
    {
        $links = array(
            array('title' => 'Men', 'url' => 'http://example.com/link1'),
            array('title' => 'Women', 'url' => 'http://example.com/link2'),
            array('title' => 'Kid', 'url' => 'http://example.com/link3'),
        );
        $this->context->smarty->assign('links', $links);
        return $this->display(__FILE__, 'customtopbar.tpl');
    }
}
