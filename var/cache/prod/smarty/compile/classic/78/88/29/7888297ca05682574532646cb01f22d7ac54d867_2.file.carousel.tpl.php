<?php
/* Smarty version 4.3.4, created on 2024-05-30 16:35:58
  from '/opt/lampp/htdocs/prestashop/modules/easycarousels/views/templates/hook/carousel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66589cdedf07d8_78331813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7888297ca05682574532646cb01f22d7ac54d867' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/modules/easycarousels/views/templates/hook/carousel.tpl',
      1 => 1708541012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66589cdedf07d8_78331813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('c_settings', $_smarty_tpl->tpl_vars['carousel']->value['settings']['carousel']);
$_smarty_tpl->_assignInScope('tpl_settings', $_smarty_tpl->tpl_vars['carousel']->value['settings']['tpl']);?>
<div id="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carousel']->value['identifier'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="easycarousel <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tpl_settings']->value['custom_class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['in_tabs']->value) {?> ec-tab-pane<?php } else { ?> carousel_block<?php }
if (!empty($_smarty_tpl->tpl_vars['custom_class']->value)) {?> <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['custom_class']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}
if (empty($_smarty_tpl->tpl_vars['carousel']->value['name']) && $_smarty_tpl->tpl_vars['c_settings']->value['n']) {?> nav_without_name<?php }
if (!$_smarty_tpl->tpl_vars['ec_is_mobile']->value) {
if ($_smarty_tpl->tpl_vars['c_settings']->value['n'] == 2) {?> n-hover<?php }
if ($_smarty_tpl->tpl_vars['c_settings']->value['p'] == 2) {?> p-hover<?php }
}?>">
	<?php if (!$_smarty_tpl->tpl_vars['in_tabs']->value && !empty($_smarty_tpl->tpl_vars['carousel']->value['name'])) {?>
		<h3 class="title_block carousel_title">
			<?php if ($_smarty_tpl->tpl_vars['tpl_settings']->value['view_all'] == 2 && !empty($_smarty_tpl->tpl_vars['carousel']->value['view_all_link'])) {?><a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carousel']->value['view_all_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
			<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carousel']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

			<?php if ($_smarty_tpl->tpl_vars['tpl_settings']->value['view_all'] == 2 && !empty($_smarty_tpl->tpl_vars['carousel']->value['view_all_link'])) {?></a><?php }?>
		</h3>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['carousel']->value['description'])) {?><div class="carousel-description"><?php echo $_smarty_tpl->tpl_vars['carousel']->value['description'];?>
</div><?php }?>
	<div class="block_content">
		<div class="c_container <?php if ($_smarty_tpl->tpl_vars['c_settings']->value['type'] == 1) {?>ecarousel<?php if ($_smarty_tpl->tpl_vars['carousel']->value['is_swiper']) {?> swiper<?php }
} elseif ($_smarty_tpl->tpl_vars['c_settings']->value['type'] == 2) {?>scroll-x<?php } else { ?>ec-grid<?php }?> xl-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['c_settings']->value['i'] )), ENT_QUOTES, 'UTF-8');?>
 lg-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['c_settings']->value['i_1200'] )), ENT_QUOTES, 'UTF-8');?>
 md-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['c_settings']->value['i_992'] )), ENT_QUOTES, 'UTF-8');?>
 sm-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['c_settings']->value['i_768'] )), ENT_QUOTES, 'UTF-8');?>
 xs-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['c_settings']->value['i_480'] )), ENT_QUOTES, 'UTF-8');?>
" data-settings="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['c_settings']->value )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php if (!empty($_smarty_tpl->tpl_vars['tpl_settings']->value['second_image'])) {?> data-second-img="1"<?php }?>>
			<?php if ($_smarty_tpl->tpl_vars['carousel']->value['is_swiper']) {?><div class="swiper-wrapper"><?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carousel']->value['items'], 'column_items');
$_smarty_tpl->tpl_vars['column_items']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column_items']->value) {
$_smarty_tpl->tpl_vars['column_items']->do_else = false;
?>
				<div class="c_col<?php if ($_smarty_tpl->tpl_vars['carousel']->value['is_swiper']) {?> swiper-slide<?php }?>">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column_items']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
						<div class="c_item">
							<?php if ($_smarty_tpl->tpl_vars['carousel']->value['item_type'] == 'product') {
$_smarty_tpl->_assignInScope('product', $_smarty_tpl->tpl_vars['i']->value);
} else {
$_smarty_tpl->_assignInScope('item', $_smarty_tpl->tpl_vars['i']->value);
}?>
							<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['carousel']->value['item_tpl'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->tpl_vars['carousel']->value['type'],'settings'=>$_smarty_tpl->tpl_vars['tpl_settings']->value), 0, true);
?>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php if ($_smarty_tpl->tpl_vars['carousel']->value['is_swiper']) {?></div><?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['c_settings']->value['type'] == 1 && !empty($_smarty_tpl->tpl_vars['c_settings']->value['p'])) {?><div class="sw-pgn"></div><?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['tpl_settings']->value['view_all'] == 1 && !empty($_smarty_tpl->tpl_vars['carousel']->value['view_all_link'])) {?>
		<div class="view-all">
			<a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carousel']->value['view_all_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all','mod'=>'easycarousels'),$_smarty_tpl ) );?>
</a>
		</div>
	<?php }?>
</div>
<?php }
}
