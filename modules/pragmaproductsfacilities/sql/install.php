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
$sql = array();


$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'product_facilities` (
    `id_product_facilities` int(11) NOT NULL AUTO_INCREMENT, 
    `slices` int(11) unsigned NOT NULL unique,
    `id_shop` int(1) NOT NULL,
    `price` FLOAT NOT NULL,
    `ratio` FLOAT NOT NULL,
    `active` int(1) NOT NULL,
    `date_upd` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY  (`id_product_facilities`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

$sql[] = 'ALTER TABLE `' . _DB_PREFIX_ . 'order_detail` ADD `number_payment` tinyint(11) DEFAULT NULL;';
$sql[] = 'ALTER TABLE `' . _DB_PREFIX_ . 'cart_product` ADD `number_payment` tinyint(11) DEFAULT NULL;';

foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}
