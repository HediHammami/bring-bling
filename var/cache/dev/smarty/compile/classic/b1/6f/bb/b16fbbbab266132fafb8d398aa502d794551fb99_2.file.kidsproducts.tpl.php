<?php
/* Smarty version 4.3.4, created on 2024-05-30 15:39:41
  from '/opt/lampp/htdocs/prestashop/modules/kidsproducts/views/templates/hook/kidsproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66588fad5fd0b0_51312336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b16fbbbab266132fafb8d398aa502d794551fb99' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/modules/kidsproducts/views/templates/hook/kidsproducts.tpl',
      1 => 1716893024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66588fad5fd0b0_51312336 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?> 
<div class="womencarousel"> 
<div class="w-section">
<h2 class="section-title"> New in <br> for KIDS </h2>
<h4><a class="view-all" href="#"> view all </a></h4>
</div>
    <div id="kids-products-carousel" class="owl-carousel owl-theme">
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
                                
      <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                            <div class="discount-badge">-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
%</div>
                        <?php }?>
                    
                    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                    <button class="view-product-button">View Product</button>
                    </div>
                    <p class="brand"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['manufacturer_name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
                    <h4 class="prod-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h4>
                     <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                            <div class="product-price">
                            <span class="discounted-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discountedPrice'], ENT_QUOTES, 'UTF-8');?>
</span>
                                <span class="original-price strikethrough"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                        <?php } else { ?>
                            <div class="product-price">
                                <span class="prod-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                        <?php }?>
                </a>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
     <div class="mobile-cat-btn"> <button class="cat-btn">view all</button> </div>
    </div>
<?php } else { ?>
    <p>No products found.</p>
<?php }
}
}
