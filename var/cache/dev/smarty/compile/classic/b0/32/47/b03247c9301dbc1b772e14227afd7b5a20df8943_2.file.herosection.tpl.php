<?php
/* Smarty version 4.3.4, created on 2024-05-17 14:31:59
  from '/opt/lampp/htdocs/prestashop/modules/herosection/herosection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66475c4f4780d5_03673703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b03247c9301dbc1b772e14227afd7b5a20df8943' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/modules/herosection/herosection.tpl',
      1 => 1715869762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66475c4f4780d5_03673703 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
css/herosection.css" type="text/css" />

<section class="hero">
    <div class="hero-image">
        <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
images/hero-section.png" alt="Hero Image" />
    </div>
    <div class="hero-content top-left">
        <h1 class="til til1">New <br> collection</h1>
        <button class="hero-btn">SHOP NOW</button>
    </div>
    <div class="hero-content bottom-right">
        <h3 class="til">23/24</h3>
        <p class="desc">Latest Arrivals <br> Jacques Marie Mage</p>
    </div>
</section>
<?php }
}
