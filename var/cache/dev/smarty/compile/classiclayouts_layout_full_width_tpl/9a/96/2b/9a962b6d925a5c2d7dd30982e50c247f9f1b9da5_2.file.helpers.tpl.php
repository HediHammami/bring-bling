<?php
/* Smarty version 4.3.4, created on 2024-05-17 14:31:44
  from '/opt/lampp/htdocs/prestashop/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66475c40a0d0e1_12152825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a962b6d925a5c2d7dd30982e50c247f9f1b9da5' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/themes/classic/templates/_partials/helpers.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66475c40a0d0e1_12152825 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/opt/lampp/htdocs/prestashop/var/cache/dev/smarty/compile/classiclayouts_layout_full_width_tpl/9a/96/2b/9a962b6d925a5c2d7dd30982e50c247f9f1b9da5_2.file.helpers.tpl.php',
    'uid' => '9a962b6d925a5c2d7dd30982e50c247f9f1b9da5',
    'call_name' => 'smarty_template_function_renderLogo_69646513366475c40a06f35_04690141',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_69646513366475c40a06f35_04690141 */
if (!function_exists('smarty_template_function_renderLogo_69646513366475c40a06f35_04690141')) {
function smarty_template_function_renderLogo_69646513366475c40a06f35_04690141(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_69646513366475c40a06f35_04690141 */
}