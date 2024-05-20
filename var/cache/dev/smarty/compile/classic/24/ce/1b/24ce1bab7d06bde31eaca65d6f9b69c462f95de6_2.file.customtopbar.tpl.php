<?php
/* Smarty version 4.3.4, created on 2024-05-17 14:31:44
  from '/opt/lampp/htdocs/prestashop/modules/customtopbar/customtopbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66475c40a99bd5_12441814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24ce1bab7d06bde31eaca65d6f9b69c462f95de6' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/modules/customtopbar/customtopbar.tpl',
      1 => 1715857663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66475c40a99bd5_12441814 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
      
    <a class="cat-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
   
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
