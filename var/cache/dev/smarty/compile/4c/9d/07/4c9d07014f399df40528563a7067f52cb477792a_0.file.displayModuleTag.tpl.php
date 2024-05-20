<?php
/* Smarty version 4.3.4, created on 2024-05-17 14:31:43
  from '/opt/lampp/htdocs/prestashop/modules/psxdesign/views/templates/hook/displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66475c3f114785_67850212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c9d07014f399df40528563a7067f52cb477792a' => 
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
function content_66475c3f114785_67850212 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
