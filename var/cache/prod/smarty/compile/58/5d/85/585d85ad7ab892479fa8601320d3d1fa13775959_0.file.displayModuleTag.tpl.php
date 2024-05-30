<?php
/* Smarty version 4.3.4, created on 2024-05-30 16:10:18
  from '/opt/lampp/htdocs/prestashop/modules/psxdesign/views/templates/hook/displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665896da9c3082_83241347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '585d85ad7ab892479fa8601320d3d1fa13775959' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/modules/psxdesign/views/templates/hook/displayModuleTag.tpl',
      1 => 1711707465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665896da9c3082_83241347 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
