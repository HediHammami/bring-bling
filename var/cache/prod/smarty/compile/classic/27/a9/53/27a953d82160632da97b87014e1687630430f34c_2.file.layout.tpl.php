<?php
/* Smarty version 4.3.4, created on 2024-05-30 16:35:58
  from '/opt/lampp/htdocs/prestashop/modules/easycarousels/views/templates/hook/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66589cdedd3f28_77052623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27a953d82160632da97b87014e1687630430f34c' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/modules/easycarousels/views/templates/hook/layout.tpl',
      1 => 1708284878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66589cdedd3f28_77052623 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="easycarousels <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['display_settings']->value['custom_class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carousels_in_hook']->value, 'carousels', false, 'id_wrapper');
$_smarty_tpl->tpl_vars['carousels']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_wrapper']->value => $_smarty_tpl->tpl_vars['carousels']->value) {
$_smarty_tpl->tpl_vars['carousels']->do_else = false;
?>
		<?php $_smarty_tpl->_assignInScope('w_settings', array());
if (!empty($_smarty_tpl->tpl_vars['wrappers_settings']->value[$_smarty_tpl->tpl_vars['id_wrapper']->value])) {
$_smarty_tpl->_assignInScope('w_settings', $_smarty_tpl->tpl_vars['wrappers_settings']->value[$_smarty_tpl->tpl_vars['id_wrapper']->value]);
}?>
		<div class="c-wrapper w-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_wrapper']->value )), ENT_QUOTES, 'UTF-8');
if (!empty($_smarty_tpl->tpl_vars['w_settings']->value['custom_class'])) {?> <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['w_settings']->value['custom_class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
		<?php if (!empty($_smarty_tpl->tpl_vars['carousels']->value['in_tabs'])) {?>
			<div class="in_tabs clearfix<?php if ($_smarty_tpl->tpl_vars['display_settings']->value['compact_tabs']) {?> compact_on<?php }?>">
				<ul id="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hook_name']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_wrapper']->value )), ENT_QUOTES, 'UTF-8');?>
_easycarousel_tabs" class="ec-tabs closed">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['carousels']->value['in_tabs']), 'carousel', false, 'k');
$_smarty_tpl->tpl_vars['carousel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['carousel']->value) {
$_smarty_tpl->tpl_vars['carousel']->do_else = false;
?>
						<?php if (!$_smarty_tpl->tpl_vars['k']->value) {?>
							<li class="responsive_tabs_selection title_block">
								<a href="#" onclick="event.preventDefault();"><span class="selection"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carousel']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></a>
							</li>
						<?php }?>
						<li class="<?php if (!$_smarty_tpl->tpl_vars['k']->value) {?>first active<?php }?> carousel_title">
							<a href="#<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carousel']->value['identifier'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="ec-tab-link"><?php if ((isset($_smarty_tpl->tpl_vars['carousel']->value['name']))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carousel']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></a>
						</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
				<div class="ec-tabs-content">
				<?php $_smarty_tpl->_assignInScope('custom_class', 'active');?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carousels']->value['in_tabs'], 'carousel');
$_smarty_tpl->tpl_vars['carousel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carousel']->value) {
$_smarty_tpl->tpl_vars['carousel']->do_else = false;
?>
					<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['carousel_tpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('carousel'=>$_smarty_tpl->tpl_vars['carousel']->value,'in_tabs'=>true,'custom_class'=>$_smarty_tpl->tpl_vars['custom_class']->value), 0, true);
?>
					<?php $_smarty_tpl->_assignInScope('custom_class', '');?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['carousels']->value['one_by_one'])) {?>
			<div class="one_by_one clearfix">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carousels']->value['one_by_one'], 'carousel');
$_smarty_tpl->tpl_vars['carousel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carousel']->value) {
$_smarty_tpl->tpl_vars['carousel']->do_else = false;
?>
					<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['carousel_tpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('carousel'=>$_smarty_tpl->tpl_vars['carousel']->value,'in_tabs'=>false), 0, true);
?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php }?>
		</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php if (Tools::getValue('ajax')) {
echo '<script'; ?>
 type="text/javascript">try{ec.activateTabs();ec.prepareVisibleCarousels();}catch(e){}<?php echo '</script'; ?>
><?php }
}
}
