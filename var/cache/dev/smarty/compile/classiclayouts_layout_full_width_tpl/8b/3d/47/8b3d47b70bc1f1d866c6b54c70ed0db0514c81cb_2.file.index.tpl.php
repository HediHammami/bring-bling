<?php
/* Smarty version 4.3.4, created on 2024-05-17 14:31:59
  from '/opt/lampp/htdocs/prestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66475c4fa28906_85990432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b3d47b70bc1f1d866c6b54c70ed0db0514c81cb' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/themes/classic/templates/index.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66475c4fa28906_85990432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4241924566475c4fa26ca5_84123915', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_38606417666475c4fa270c6_85346301 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_207985654366475c4fa27a52_41371654 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_32285279466475c4fa27741_97790043 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207985654366475c4fa27a52_41371654', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4241924566475c4fa26ca5_84123915 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_4241924566475c4fa26ca5_84123915',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_38606417666475c4fa270c6_85346301',
  ),
  'page_content' => 
  array (
    0 => 'Block_32285279466475c4fa27741_97790043',
  ),
  'hook_home' => 
  array (
    0 => 'Block_207985654366475c4fa27a52_41371654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38606417666475c4fa270c6_85346301', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32285279466475c4fa27741_97790043', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
