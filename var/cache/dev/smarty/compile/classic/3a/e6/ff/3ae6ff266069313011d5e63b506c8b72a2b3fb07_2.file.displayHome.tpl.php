<?php
/* Smarty version 4.3.4, created on 2024-05-17 14:31:59
  from '/opt/lampp/htdocs/prestashop/modules/mymodule/displayHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66475c4f4954e7_52019064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ae6ff266069313011d5e63b506c8b72a2b3fb07' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/modules/mymodule/displayHome.tpl',
      1 => 1715872101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66475c4f4954e7_52019064 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
css/mymodule.css" type="text/css" />

<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
    <ul class="category-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <li>
                <?php $_smarty_tpl->_assignInScope('categoryLink', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['link_rewrite'],'htmlall','UTF-8' )));?>
                <div class="category-wrapper">
                    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['categoryLink']->value), ENT_QUOTES, 'UTF-8');?>
">
                        <div class="category-image">
                            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['category']->value['name'],$_smarty_tpl->tpl_vars['category']->value['id_category'],null), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                            <div class="category-name">
                             <h2>shop <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php } else { ?>
    <p>No categories found.</p>
<?php }?>


<?php }
}
