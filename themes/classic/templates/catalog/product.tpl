{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{extends file=$layout}

{block name='head' append}
  <meta property="og:type" content="product">
  {if $product.cover}
    <meta property="og:image" content="{$product.cover.large.url}">
  {/if}

  {if $product.show_price}
    <meta property="product:pretax_price:amount" content="{$product.price_tax_exc}">
    <meta property="product:pretax_price:currency" content="{$currency.iso_code}">
    <meta property="product:price:amount" content="{$product.price_amount}">
    <meta property="product:price:currency" content="{$currency.iso_code}">
  {/if}
  {if isset($product.weight) && ($product.weight != 0)}
  <meta property="product:weight:value" content="{$product.weight}">
  <meta property="product:weight:units" content="{$product.weight_unit}">
  {/if}
{/block}

{block name='head_microdata_special'}
  {include file='_partials/microdata/product-jsonld.tpl'}
{/block}

{block name='content'}

  <section id="main" class="prod-section">
    <meta content="{$product.url}">

    <div class="row product-container js-product-container">
      <div class="col-md-6">
        {block name='page_content_container'}
          <section class="page-content" id="content">
            {block name='page_content'}
              {include file='catalog/_partials/product-flags.tpl'}

              {block name='product_cover_thumbnails'}
                {include file='catalog/_partials/product-cover-thumbnails.tpl'}
              {/block}
              <div class="scroll-box-arrows">
                <i class="material-icons left">&#xE314;</i>
                <i class="material-icons right">&#xE315;</i>
              </div>

            {/block}
          </section>
        {/block}
        </div>
        <div class="col-md-6">
          {block name='page_header_container'} 
          {block name='product_brand'}
        {if Manufacturer::getNameById($product.id_manufacturer) !== ''}
            <div class="product-brand text-muted"><h3>{Manufacturer::getNameById($product.id_manufacturer)}</h3>
             <a href="#" id="new-collection"> new collection </a>
            </div>{/if}
    {/block}
            {block name='page_header'}
              <h1 class="product-name">{block name='page_title'}{$product.name}{/block}</h1>
            {/block}
          {/block}
          {block name='product_prices'}
            {include file='catalog/_partials/product-prices.tpl'}
          {/block}

          <div class="product-information">
            {block name='product_description_short'}
              {*<div id="product-description-short-{$product.id}" class="product-description">{$product.description_short nofilter}</div>*}
            {/block}

            {if $product.is_customizable && count($product.customizations.fields)}
              {block name='product_customization'}
                {include file="catalog/_partials/product-customization.tpl" customizations=$product.customizations}
              {/block}
            {/if}

            <div class="product-actions js-product-actions">
              {block name='product_buy'}
                <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
                  <input type="hidden" name="token" value="{$static_token}">
                  <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
                  <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id" class="js-product-customization-id">

                  {block name='product_variants'}
                    {include file='catalog/_partials/product-variants.tpl'}
                  {/block}

                  {block name='product_pack'}
                    {if $packItems}
                      <section class="product-pack">
                        <p class="h4">{l s='This pack contains' d='Shop.Theme.Catalog'}</p>
                        {foreach from=$packItems item="product_pack"}
                          {block name='product_miniature'}
                            {include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack showPackProductsPrice=$product.show_price}
                          {/block}
                        {/foreach}
                    </section>
                    {/if}
                  {/block}

                  {block name='product_discounts'}
                    {include file='catalog/_partials/product-discounts.tpl'}
                  {/block}

                  {block name='product_add_to_cart'}
                    {include file='catalog/_partials/product-add-to-cart.tpl'}
                  {/block}

                  {block name='product_additional_info'}
                    {include file='catalog/_partials/product-additional-info.tpl'}
                  {/block}

                  {* Input to refresh product HTML removed, block kept for compatibility with themes *}
                  {block name='product_refresh'}{/block}
                </form>
              {/block}

            </div>

            {block name='hook_display_reassurance'}
              {hook h='displayReassurance'}
            {/block}

          {block name='product_tabs'}
  <div class="accordions">
    <!-- Description Section -->
    <hr>
    {if $product.description}
      <button class="accordion">{l s='Description' d='Shop.Theme.Catalog'}</button>
      <div class="panel">
        {block name='product_description'}
          <div class="product-description">{$product.description nofilter}</div>
        {/block}
      </div>
    {/if}

   <!-- Product Details Section -->
   <hr>
    <button class="accordion">{l s='Product Details' d='Shop.Theme.Catalog'}</button>
    <div class="panel">
      {block name='product_details'}
        {include file='catalog/_partials/product-details.tpl'}
      {/block}
    </div>
    <hr>
    <!-- Attachments Section -->
    {if $product.attachments}
      <button class="accordion">{l s='Attachments' d='Shop.Theme.Catalog'}</button>
      <div class="panel">
        {block name='product_attachments'}
          <section class="product-attachments">
            <p class="h5 text-uppercase">{l s='Download' d='Shop.Theme.Actions'}</p>
            {foreach from=$product.attachments item=attachment}
              <div class="attachment">
                <h4><a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">{$attachment.name}</a></h4>
                <p>{$attachment.description}</p>
                <a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">
                  {l s='Download' d='Shop.Theme.Actions'} ({$attachment.file_size_formatted})
                </a>
              </div>
            {/foreach}
          </section>
        {/block}
      </div>
    {/if}

    <!-- Extra Content Section -->
    {foreach from=$product.extraContent item=extra key=extraKey}
      <button class="accordion">{$extra.title}</button>
      <div class="panel">
        <div class="extra-content">
          {$extra.content nofilter}
        </div>
      </div>
    {/foreach}

    <!-- Custom Tab Section -->
    <button class="accordion">{l s='Custom Tab' d='Shop.Theme.Catalog'}</button>
    <div class="panel">
      {block name='custom_tab'}
        <div class="custom-content">
          <h2>Custom Tab Content</h2>
          <p>This is the content of the custom tab that will be displayed for every product.</p>
        </div>
      {/block}
    </div>
  </div>
{/block}

        </div>
      </div>
    </div>
 <hr style="margin-bottom:80px">
    {block name='product_accessories'}
      {if $accessories}
        <section class="product-accessories clearfix">
          <p class="h5 text-uppercase">{l s='You might also like' d='Shop.Theme.Catalog'}</p>
          <div class="products row">
            {foreach from=$accessories item="product_accessory" key="position"}
              {block name='product_miniature'}
                {include file='catalog/_partials/miniatures/product.tpl' product=$product_accessory position=$position productClasses="col-6 col-sm-6 col-lg-4 col-xl-3"}
              {/block}
            {/foreach}
          </div>
        </section>
      {/if}
    {/block}

    {block name='product_footer'}
      {hook h='displayFooterProduct' product=$product category=$category}
    {/block}

    {block name='product_images_modal'}
      {include file='catalog/_partials/product-images-modal.tpl'}
    {/block}

    {block name='page_footer_container'}
      <footer class="page-footer">
        {block name='page_footer'}
          <!-- Footer content -->
        {/block}
      </footer>
    {/block}
  </section>
 
{/block}
