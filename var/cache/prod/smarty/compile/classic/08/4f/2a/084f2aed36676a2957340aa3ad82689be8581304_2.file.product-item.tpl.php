<?php
/* Smarty version 4.3.4, created on 2024-05-30 16:35:58
  from '/opt/lampp/htdocs/prestashop/modules/easycarousels/views/templates/hook/product-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66589cdee1c6b0_60144524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '084f2aed36676a2957340aa3ad82689be8581304' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/modules/easycarousels/views/templates/hook/product-item.tpl',
      1 => 1708794876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66589cdee1c6b0_60144524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168158117966589cdedf3fe7_96002587', 'product_item');
?>

<?php }
/* {block 'product_image'} */
class Block_79723163666589cdedf4ca6_98411424 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['settings']->value['image_type'] != '--') {?>
        <?php $_smarty_tpl->_assignInScope('img_type', $_smarty_tpl->tpl_vars['settings']->value['image_type']);?>
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
                <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['img_type']->value]['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!empty($_smarty_tpl->tpl_vars['image_sizes']->value[$_smarty_tpl->tpl_vars['img_type']->value])) {?> width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_sizes']->value[$_smarty_tpl->tpl_vars['img_type']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_sizes']->value[$_smarty_tpl->tpl_vars['img_type']->value]['height'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if (!empty($_smarty_tpl->tpl_vars['product']->value['second_img_src'])) {?> data-toggle-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['second_img_src'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> loading="lazy">
            <?php } elseif ((isset($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']))) {?>
                <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize'][$_smarty_tpl->tpl_vars['img_type']->value]['url'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!empty($_smarty_tpl->tpl_vars['image_sizes']->value[$_smarty_tpl->tpl_vars['img_type']->value])) {?> width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_sizes']->value[$_smarty_tpl->tpl_vars['img_type']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_sizes']->value[$_smarty_tpl->tpl_vars['img_type']->value]['height'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> loading="lazy">
            <?php }?>
        </a>
    <?php }?>
    <?php
}
}
/* {/block 'product_image'} */
/* {block 'product_quick_view'} */
class Block_47176641466589cdedfafa7_27202316 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['settings']->value['quick_view']) {?>
        <div class="highlighted-informations">
            <a href="#" class="quick-view" data-link-action="quickview"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','mod'=>'easycarousels'),$_smarty_tpl ) );?>
</a>
        </div>
    <?php }?>
    <?php
}
}
/* {/block 'product_quick_view'} */
/* {block 'product_variants'} */
class Block_165030116366589cdedfbf45_13957008 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_variants'} */
/* {block 'product_title'} */
class Block_137898121466589cdedfc756_37074270 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['title'])) {?>
            <h5 class="product-title">
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['title_one_line'])) {?> class="nowrap"<?php }?>>
                    <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],$_smarty_tpl->tpl_vars['settings']->value['title'],'...' )), ENT_QUOTES, 'UTF-8');?>

                </a>
            </h5>
        <?php }?>
        <?php
}
}
/* {/block 'product_title'} */
/* {block 'product_other_fields'} */
class Block_482254766589cdedfeaa8_21577015 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['reference'])) {?>
            <div class="prop-line product-reference"><span class="nowrap"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</span></div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['product_cat']) && !empty($_smarty_tpl->tpl_vars['product']->value['cat_url'])) {?>
            <div class="prop-line product-category">
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cat_url'], ENT_QUOTES, 'UTF-8');?>
" class="cat-name nowrap"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cat_name'],45,'...' )), ENT_QUOTES, 'UTF-8');?>
</a>
            </div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['product_man']) && $_smarty_tpl->tpl_vars['product']->value['id_manufacturer'] && $_smarty_tpl->tpl_vars['product']->value['man_name'] && !empty($_smarty_tpl->tpl_vars['product']->value['man_url'])) {?>
            <div class="prop-line product-manufacturer">
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['man_url'], ENT_QUOTES, 'UTF-8');?>
" class="man-name nowrap">
                <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['man_img_src'])) {?>
                    <?php $_smarty_tpl->_assignInScope('m_img_type', $_smarty_tpl->tpl_vars['settings']->value['product_man']);?>
                    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['man_img_src'], ENT_QUOTES, 'UTF-8');?>
" class="product-manufacturer-img"<?php if (!empty($_smarty_tpl->tpl_vars['image_sizes']->value[$_smarty_tpl->tpl_vars['m_img_type']->value])) {?> width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_sizes']->value[$_smarty_tpl->tpl_vars['m_img_type']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_sizes']->value[$_smarty_tpl->tpl_vars['m_img_type']->value]['height'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> loading="lazy">
                <?php } else { ?>
                    <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['man_name'],45,'...' )), ENT_QUOTES, 'UTF-8');?>

                <?php }?>
                </a>
            </div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['description'])) {?>
            <div class="prop-line product-description-short">
                <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['product']->value['description_short']),$_smarty_tpl->tpl_vars['settings']->value['description'],'...' )), ENT_QUOTES, 'UTF-8');?>

            </div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['stock']) && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
            <div class="prop-line product-availability <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['availability'], ENT_QUOTES, 'UTF-8');?>
">
                <span class="inline-block nowrap"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span>
            </div>
        <?php }?>
        <?php
}
}
/* {/block 'product_other_fields'} */
/* {block 'product_price'} */
class Block_171257499666589cdee07902_81396774 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['price'] && $_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
            <div class="product-price-and-shipping">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['displayProductPriceBlock']) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                    <?php }?>
                    <span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['displayProductPriceBlock']) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                <?php }?>
                <span class="price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['displayProductPriceBlock']) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                <?php }?>
            </div>
        <?php }?>
        <?php
}
}
/* {/block 'product_price'} */
/* {block 'product_buttons'} */
class Block_95395622466589cdee0b754_61865117 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['add_to_cart'] || $_smarty_tpl->tpl_vars['settings']->value['view_more'] || $_smarty_tpl->tpl_vars['settings']->value['displayProductListFunctionalButtons']) {?>
            <form type="post" action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" class="product-item-buttons">
                <?php $_smarty_tpl->_assignInScope('customization_required', $_smarty_tpl->tpl_vars['product']->value['customizable'] == 2);?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['add_to_cart']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['customization_required']->value && !$_smarty_tpl->tpl_vars['settings']->value['view_more']) {?>
                        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary btn-customize"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personalize','mod'=>'easycarousels'),$_smarty_tpl ) );?>
</a>
                    <?php } else { ?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['available_atts'])) {?>
                            <div class="ec-atts">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['available_atts'], 'atts', false, 'group_name');
$_smarty_tpl->tpl_vars['atts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_name']->value => $_smarty_tpl->tpl_vars['atts']->value) {
$_smarty_tpl->tpl_vars['atts']->do_else = false;
?>
                                    <div class="ec-att-group">
                                        <span class="ec-att-group-name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_name']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                                        <select name="att_ids[]" class="att-group">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['atts']->value, 'att_name', false, 'id_att');
$_smarty_tpl->tpl_vars['att_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_att']->value => $_smarty_tpl->tpl_vars['att_name']->value) {
$_smarty_tpl->tpl_vars['att_name']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['id_att']->value) {?>
                                                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_att']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['id_att']->value == $_smarty_tpl->tpl_vars['atts']->value[0]) {?> selected<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['att_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        <?php }?>
                        <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
">
                        <input type="hidden" name="id_product_attribute" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
                        <input type="hidden" name="qty" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
">
                        <button data-button-action="add-to-cart" class="btn btn-primary"<?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?> disabled<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','mod'=>'easycarousels'),$_smarty_tpl ) );?>
</button>
                    <?php }?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['view_more']) {?>
                    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-tertiary-outline btn-viewmore">
                        <?php if ($_smarty_tpl->tpl_vars['customization_required']->value && $_smarty_tpl->tpl_vars['settings']->value['add_to_cart']) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personalize','mod'=>'easycarousels'),$_smarty_tpl ) );?>

                        <?php } else { ?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'easycarousels'),$_smarty_tpl ) );?>

                        <?php }?>
                    </a>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['displayProductListFunctionalButtons'])) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                <?php }?>
            </form>
        <?php }?>
        <?php
}
}
/* {/block 'product_buttons'} */
/* {block 'product_informations'} */
class Block_197837767866589cdedfc455_37013262 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="product-description">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137898121466589cdedfc756_37074270', 'product_title', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_482254766589cdedfeaa8_21577015', 'product_other_fields', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171257499666589cdee07902_81396774', 'product_price', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95395622466589cdee0b754_61865117', 'product_buttons', $this->tplIndex);
?>

    </div>
    <?php
}
}
/* {/block 'product_informations'} */
/* {block 'hook_reviews'} */
class Block_210569893566589cdee15ee7_05055134 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['displayProductListReviews'])) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value,'hide_thumbnails'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( empty($_smarty_tpl->tpl_vars['settings']->value['thumbnails']) ))),$_smarty_tpl ) );?>

    <?php }?>
    <?php
}
}
/* {/block 'hook_reviews'} */
/* {block 'product_stickers'} */
class Block_46052206866589cdee17b89_44103706 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['settings']->value['stickers']) {?>
        <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['flag']->value['type'] == 'out_of_stock' && !empty($_smarty_tpl->tpl_vars['settings']->value['stock'])) {
continue 1;
}?>
            <li class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>
    <?php
}
}
/* {/block 'product_stickers'} */
/* {block 'product_item'} */
class Block_168158117966589cdedf3fe7_96002587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_item' => 
  array (
    0 => 'Block_168158117966589cdedf3fe7_96002587',
  ),
  'product_image' => 
  array (
    0 => 'Block_79723163666589cdedf4ca6_98411424',
  ),
  'product_quick_view' => 
  array (
    0 => 'Block_47176641466589cdedfafa7_27202316',
  ),
  'product_variants' => 
  array (
    0 => 'Block_165030116366589cdedfbf45_13957008',
  ),
  'product_informations' => 
  array (
    0 => 'Block_197837767866589cdedfc455_37013262',
  ),
  'product_title' => 
  array (
    0 => 'Block_137898121466589cdedfc756_37074270',
  ),
  'product_other_fields' => 
  array (
    0 => 'Block_482254766589cdedfeaa8_21577015',
  ),
  'product_price' => 
  array (
    0 => 'Block_171257499666589cdee07902_81396774',
  ),
  'product_buttons' => 
  array (
    0 => 'Block_95395622466589cdee0b754_61865117',
  ),
  'hook_reviews' => 
  array (
    0 => 'Block_210569893566589cdee15ee7_05055134',
  ),
  'product_stickers' => 
  array (
    0 => 'Block_46052206866589cdee17b89_44103706',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
<div class="thumbnail-container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79723163666589cdedf4ca6_98411424', 'product_image', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47176641466589cdedfafa7_27202316', 'product_quick_view', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165030116366589cdedfbf45_13957008', 'product_variants', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197837767866589cdedfc455_37013262', 'product_informations', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210569893566589cdee15ee7_05055134', 'hook_reviews', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46052206866589cdee17b89_44103706', 'product_stickers', $this->tplIndex);
?>

</div>
</article>
<?php
}
}
/* {/block 'product_item'} */
}
