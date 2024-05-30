<?php
/* Smarty version 4.3.4, created on 2024-05-30 16:13:22
  from '/opt/lampp/htdocs/prestashop/themes/classic/templates/catalog/_partials/subcategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66589792c774e2_98250453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f3bb2d30efed76f598c09b2cd0d1db3746ec7f8' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/themes/classic/templates/catalog/_partials/subcategories.tpl',
      1 => 1716463444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66589792c774e2_98250453 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<?php if (!empty($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
  <?php if (((isset($_smarty_tpl->tpl_vars['display_subcategories']->value)) && $_smarty_tpl->tpl_vars['display_subcategories']->value == 1) || !(isset($_smarty_tpl->tpl_vars['display_subcategories']->value))) {?>
    <div id="subcategories">
      <div id="subcategories-carousel" class="owl-carousel custom-carousel-theme">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcategories']->value, 'subcategory');
$_smarty_tpl->tpl_vars['subcategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->do_else = false;
?>
    <div class="custom-carousel-item">
      <div class="custom-subcategory-image">
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img">
          <?php if (!empty($_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['url'])) {?>
            <picture>
              <?php if (!empty($_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
              <?php if (!empty($_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
              <img
                class="custom-subcategory-img"
                src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['subcategory']->value['name'],$_smarty_tpl->tpl_vars['subcategory']->value['id_category'],null), ENT_QUOTES, 'UTF-8');?>
"
                alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                loading="lazy"
               
            </picture>
          <?php }?>
        </a>
        <h5 class="custom-subcategory-title">
          <a class="custom-subcategory-name" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],25,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

          </a>
        </h5>
      </div>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>


    </div>
  <?php }
}?>


<?php }
}
