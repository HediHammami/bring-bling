<?php

/**
 * 2007-2021 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    PrestaShop SA <contact@prestashop.com>
 *  @copyright 2007-2021 PrestaShop SA
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once('classes/Productsfacilities.php');

class Pragmaproductsfacilities extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'pragmaproductsfacilities';
        $this->tab = 'administration';
        $this->version = '2.0.0';
        $this->author = 'LaModeTeam';
        $this->need_instance = 1;

        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Products Facilities');
        $this->description = $this->l('Display bloc of facilities payement to products');
        $this->templateFile = 'module:' . $this->name . '/views/templates/hook/productsfacilities.tpl';

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall my module?');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        include(dirname(__FILE__) . '/sql/install.php');

        return parent::install() &&
            $this->registerHook('displayProductsFacilities') &&
            $this->registerHook('actionFrontControllerSetMedia');
    }

    public function uninstall()
    {
        include(dirname(__FILE__) . '/sql/uninstall.php');

        return parent::uninstall();
    }

    public function hookActionFrontControllerSetMedia()
    {
        $this->context->controller->registerStylesheet(
            'pragmaproductsfacilities-style',
            $this->_path . 'views/css/front.css',
            [
                'media' => 'all',
                'priority' => 1000,
            ]
        );

        $this->context->controller->registerJavascript(
            'pragmaproductsfacilities-javascript',
            $this->_path . 'views/js/front.js',
            [
                'position' => 'bottom',
                'priority' => 1000,
            ]
        );
    }

    protected function initList()
    {
        $this->fields_list = array(
            'id_product_facilities' => array(
                'title' => $this->trans('ID', array(), 'Admin.Global'),
                'type' => 'text',
                'search' => false,
                'orderby' => false
            ),
            'slices' => array(
                'title' => $this->trans('Tranche(s)', array(), 'Admin.Global'),
                'type' => 'text',
                'search' => false,
                'orderby' => true
            ),
            'price' => array(
                'title' => $this->trans('Prix', array(), 'Admin.Global'),
                'type' => 'text',
                'search' => false,
                'orderby' => true
            ),
            'ratio' => array(
                'title' => $this->trans('Ratio', array(), 'Admin.Global'),
                'type' => 'text',
                'search' => false,
                'orderby' => true
            ),
            'active' => array(
                'title' => $this->trans('Active', array(), 'Admin.Global'),
                'type' => 'bool',
                'active' => 'status', 'class' => 'fixed-width-xs',
                'align' => 'center',
                'ajax' => true,
                'width' => 100,
            )
        );

        $helper = new HelperList();
        $helper->shopLinkType = '';
        $helper->simple_header = false;
        $helper->actions = array('edit', 'delete');
        $helper->show_toolbar = true;
        $helper->title = $this->displayName;
        $helper->table = 'productsfacilities';
        $helper->identifier = 'id_product_facilities';
        $helper->position_identifier = 'id_product_facilities_to_move';
        $helper->orderBy = 'id_product_facilities';
        $helper->orderWay = 'ASC';
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;
        $helper->toolbar_btn['new'] = array(
            'href' => AdminController::$currentIndex . '&configure=' . $this->name . '&add' . $this->name . '&token=' . Tools::getAdminTokenLite('AdminModules'),
            'desc' => $this->trans('Add new', array(), 'Admin.Actions')
        );

        return $helper;
    }

    protected function getListActiveSlices()
    {
        return ProductsFacilities::getListActiveSlices();
    }

    public function getContent()
    {
        if (Tools::isSubmit('deleteproductsfacilities') && !empty(Tools::getValue('id_product_facilities'))) {
            $this->deleteItem();
        } elseif (Tools::getValue('action') == 'statusproductsfacilities') {
            $this->changeStatus();
        } elseif (Tools::isSubmit('updateproductsfacilities') || Tools::isSubmit('addpragmaproductsfacilities')) {
            return $this->renderForm();
        } elseif (Tools::isSubmit('saveproductsfacilities')) {
            return $this->saveContent();
        } else {
            $content = $this->getListContent();
            $helper = $this->initList();
            $helper->listTotal = count($content);
            return $helper->generateList($content, $this->fields_list);
        }
    }

    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = true;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'saveproductsfacilities';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    public function deleteItem()
    {
        $productsfacilitie = new ProductsFacilities(Tools::getValue('id_product_facilities'));
        $productsfacilitie->delete();
        $token = Tools::getAdminTokenLite('AdminModules');

        $link = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name . '&token=' . $token;

        $this->_clearCache($this->templateFile);

        Tools::redirectAdmin($link);
    }

    protected function changeStatus()
    {
        if (!$id_product_facilities = (int)Tools::getValue('id_product_facilities')) {
            die(Tools::jsonEncode(
                array(
                    'success' => false,
                    'error' => true,
                    'text' => $this->trans('Failed to update the status', array(), 'Admin.Global')
                )
            ));
        } else {
            $productsfacility = new ProductsFacilities($id_product_facilities);
            if (Validate::isLoadedObject($productsfacility)) {
                $productsfacility->active = $productsfacility->active == 1 ? 0 : 1;

                $this->_clearCache($this->templateFile);

                $productsfacility->save() ?
                    die(Tools::jsonEncode(array('success' => true, 'text' => $this->trans('The status has been updated successfully', array(), 'Admin.Global')))) :
                    die(Tools::jsonEncode(array('success' => false, 'error' => true, 'text' => $this->trans('Failed to update the status', array(), 'Admin.Global'))));
            }
        }
    }

    protected function getConfigFormValues()
    {
        $fields_value = array();
        $productsfacility = new ProductsFacilities((int)Tools::getValue('id_product_facilities'));

        $fields_value['FACILITY_ID_FACILITIES']  = $productsfacility->id_product_facilities;
        $fields_value['FACILITY_SLICES']        = $productsfacility->slices;
        $fields_value['FACILITY_PRICE']         = $productsfacility->price;
        $fields_value['FACILITY_RATIO']         = $productsfacility->ratio;
        $fields_value['FACILITY_ACTIVE']        = $productsfacility->active;

        return $fields_value;
    }

    protected function getListContent()
    {
        return ProductsFacilities::getListSlices(Context::getContext()->shop->id);
    }

    protected function getConfigForm()
    {
        $token = Tools::getAdminTokenLite('AdminModules');
        $link = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name . '&token=' . $token;

        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'hidden',
                        'name' => 'FACILITY_ID_FACILITIES',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Tranche(s)'),
                        'name' => 'FACILITY_SLICES',
                        'required' => true,
                        'col' => 3,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Prix'),
                        'name' => 'FACILITY_PRICE',
                        'required' => true,
                        'col' => 3,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Ratio'),
                        'name' => 'FACILITY_RATIO',
                        'required' => true,
                        'col' => 3,
                    ),

                    array(
                        'type' => 'switch',
                        'name' => 'FACILITY_ACTIVE',
                        'label' => $this->l('Active'),
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            ),
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
                'buttons' => array(
                    array(
                        'href' => $link,
                        'title' => $this->l('Back to list', null, null, false),
                        'icon' => 'process-icon-back'
                    )
                )
            ),
        );
    }

    public function saveContent()
    {
        if ((int)Tools::getValue('FACILITY_ID_FACILITIES')) {
            $productsfacility = new ProductsFacilities((int)Tools::getValue('FACILITY_ID_FACILITIES'));
        } else {
            $productsfacility = new ProductsFacilities();
        }

        $productsfacility->id_shop  = Context::getContext()->shop->id;
        $productsfacility->slices   = Tools::getValue('FACILITY_SLICES');
        $productsfacility->price    = Tools::getValue('FACILITY_PRICE');
        $productsfacility->ratio    = Tools::getValue('FACILITY_RATIO');
        $productsfacility->active   = Tools::getValue('FACILITY_ACTIVE');
        $productsfacility->date_upd = date("Y-m-s H:i:s");

        if (!$productsfacility->validateFields(false) || !$productsfacility->save()) {
            $this->context->controller->errors[] = $this->trans('Error occured while saving', array(), 'Admin.Global');
            return $this->renderForm();
        }

        $token = Tools::getAdminTokenLite('AdminModules');
        $link = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name . '&token=' . $token;

        $this->_clearCache($this->templateFile);

        Tools::redirectAdmin($link);
    }

    public function hookDisplayProductsFacilities(array $params)
    {
        $key = $this->name . '::' . Context::getContext()->shop->id . '::' . Tools::getValue('id_product');
        
        if (!$this->isCached($this->templateFile, $this->getCacheId($key)) || true) {
            $productfacilities = ProductsFacilities::getAllSliceRatio($params['price'], Context::getContext()->shop->id);
            
            $this->context->smarty->assign(
                array(
                    'price_amount' => $params['price'],
                    'productfacilities' => $productfacilities
                )
            );
        }
        return $this->fetch($this->templateFile);
    }
}
