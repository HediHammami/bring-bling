{*
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
*}

{if $productfacilities|@count gt 0}
    <div class="product-facilities-info">
    <form>
        <h5>{l s='Sélectionner le nombre des tranches' d='Modules.Pragmaproductsfacilities.Productsfacilities'} :</h5>
        <input id="number_payment_1" class="number_payment" type="radio" checked name="number_payment" checked value="1">
        <label for="number_payment_1">
            {l s='COMPTANT' d='Modules.Pragmaproductsfacilities.Productsfacilities'}
	    <span>
                {assign var="price" value=($price_amount)|floatval}
                {Tools::displayPrice($price)}
            </span>
            
        </label>
        <input id="price_number_payment_1" type="hidden" name="price_number_payment_1"
            value="{Tools::displayPrice($price)}">
        {foreach from=$productfacilities item=productfacility key=$key}
            <input id="number_payment_{$key|intval}" class="number_payment" type="radio" name="number_payment"
                value="{$key|intval}">
            <label for="number_payment_{$key|intval}">
		              
		<span>

                    {assign var="price" value=($price_amount/$productfacility)|floatval}
                    {Tools::displayPrice($price)}
                </span>
               X {$key|intval} {l s='MOIS' d='Modules.Pragmaproductsfacilities.Productsfacilities'}  
            </label>
            {assign var="product_price_facilities" value=($price)|floatval}
            <input id="price_number_payment_{$key|intval}" type="hidden" name="number_payment_{$key|floatval}"
                value="{Tools::displayPrice($product_price_facilities)|floatval}">
        {/foreach}
    </form>
    </div>
    <div class="clearfix"></div>
{/if}