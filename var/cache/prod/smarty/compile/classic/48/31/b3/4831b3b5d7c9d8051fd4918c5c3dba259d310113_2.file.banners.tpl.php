<?php
/* Smarty version 4.3.4, created on 2024-05-30 16:14:57
  from '/opt/lampp/htdocs/prestashop/modules/banners/banners.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665897f1530b63_81520395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4831b3b5d7c9d8051fd4918c5c3dba259d310113' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/modules/banners/banners.tpl',
      1 => 1715960110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665897f1530b63_81520395 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="banner-container">
  <div class="banner" style="background-image: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
images/banner2.png');">
    <div class="banner-content">
     <p>THE EXCLUSIVE PRE-LAUNCH</p>
      <h3>Saint Laurent x BringBling</h3>
      <a href="#" class="banner-button">shop now</a>
    </div>
  </div>
  <div class="banner" style="background-image: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
images/banner1.png');">
    <div class="banner-content">
    <p>SUMMER PRE-LAUNCH</p>
      <h3>Dolce&Gabbana Kids x BringBling</h3>
      <a href="#" class="banner-button">Shop Now</a>
    </div>
  </div>
</div>
<?php }
}
