<?php
/* Smarty version 4.3.4, created on 2024-05-30 16:06:18
  from 'module:ps_searchbarps_searchbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665895ea6dcae9_53749945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbarps_searchbar.tpl',
      1 => 1716371789,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665895ea6dcae9_53749945 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<div id="search_widget" class="search-widgets" data-search-controller-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
  <i id="search_icon" class="material-icons search" aria-hidden="true">search</i>
  <div id="search_overlay" class="search-overlay">
    <form method="get" action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
      <input type="hidden" name="controller" value="search">
      <i class="material-icons search" aria-hidden="true">search</i>
      <input type="text" name="s" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search our catalog','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
      <i class="material-icons clear" aria-hidden="true">clear</i>
    </form>
  </div>
</div>

<?php }
}
