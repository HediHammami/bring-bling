<?php
/* Smarty version 4.3.4, created on 2024-05-17 17:25:37
  from '/opt/lampp/htdocs/prestashop/modules/womenproducts/views/templates/hook/slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_664785016ed484_85210785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3327283c5ae15cfb9a2bbb86f6294720842acc50' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/modules/womenproducts/views/templates/hook/slider.tpl',
      1 => 1715963114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664785016ed484_85210785 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?> 
<div> 
<div class="w-section">
<h2 class="section-title"> New in <br> for women </h2>
<h4><a class="view-all" href="#"> view all </a></h4>
</div>
    <div class="owl-carousel owl-theme">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <div class="item">
                <a class="holder" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                    <div class="image-container">
                    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                    </div>
                    <p class="brand"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['manufacturer_name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
                    <h4 class="prod-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h4>
                    <p class="prod-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</p>
                </a>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    </div>
<?php } else { ?>
    <p>No products found.</p>
<?php }
}
}
