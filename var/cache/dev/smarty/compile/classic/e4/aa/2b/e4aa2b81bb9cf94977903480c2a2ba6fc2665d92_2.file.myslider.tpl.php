<?php
/* Smarty version 4.3.4, created on 2024-05-30 15:39:41
  from '/opt/lampp/htdocs/prestashop/modules/partners/views/templates/hook/myslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66588fad60a437_08912819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4aa2b81bb9cf94977903480c2a2ba6fc2665d92' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/modules/partners/views/templates/hook/myslider.tpl',
      1 => 1716283298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66588fad60a437_08912819 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="partner-logos-container">
  <h2> OUR PARTNERS </h2>
    <div id="partner-logos" class="owl-carousel owl-theme">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['partners']->value, 'partner');
$_smarty_tpl->tpl_vars['partner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['partner']->value) {
$_smarty_tpl->tpl_vars['partner']->do_else = false;
?>
            <div class="logo-item">
                <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['partner']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['partner']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php }
}
