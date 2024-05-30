<?php
/* Smarty version 4.3.4, created on 2024-05-30 15:39:41
  from '/opt/lampp/htdocs/prestashop/modules/brands/views/templates/hook/brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66588fad5c0ac9_82164343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e6f83e9fb2491ed98ef3c126e675057005dba40' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/modules/brands/views/templates/hook/brands.tpl',
      1 => 1716220231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66588fad5c0ac9_82164343 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="cont">
<div class="brands-section">
<h2 class="brands-title"> PREMIUM <br> BRANDS</h2>
<h4><a class="view-all-brands" href="#"> VIEW ALL brands </a></h4>
</div>
<div class="image-container">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
        <div class="image-item">
            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['alt'], ENT_QUOTES, 'UTF-8');?>
" />
            <div class="image-overlay">
                <div class="image-text"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['text'], ENT_QUOTES, 'UTF-8');?>
</div>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
</div><?php }
}
