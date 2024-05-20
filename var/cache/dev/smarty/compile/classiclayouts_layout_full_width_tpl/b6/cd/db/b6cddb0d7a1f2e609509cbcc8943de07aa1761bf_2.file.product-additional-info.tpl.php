<?php
/* Smarty version 4.3.4, created on 2024-05-17 15:45:59
  from '/opt/lampp/htdocs/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66476da79e04b9_76571319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6cddb0d7a1f2e609509cbcc8943de07aa1761bf' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66476da79e04b9_76571319 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
