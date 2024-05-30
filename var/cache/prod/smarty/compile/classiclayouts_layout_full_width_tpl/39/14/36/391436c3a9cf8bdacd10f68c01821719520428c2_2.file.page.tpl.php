<?php
/* Smarty version 4.3.4, created on 2024-05-30 16:06:19
  from '/opt/lampp/htdocs/prestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665895eb0ea375_95169007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '391436c3a9cf8bdacd10f68c01821719520428c2' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/themes/classic/templates/page.tpl',
      1 => 1716219904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665895eb0ea375_95169007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1044322714665895eb0e5241_32989822', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1871129701665895eb0e5cd6_31729198 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_140762817665895eb0e56f8_17147523 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1871129701665895eb0e5cd6_31729198', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1430258946665895eb0e7ad8_15110472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_747820420665895eb0e8076_86660967 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_926748340665895eb0e76a4_61030823 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    
      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1430258946665895eb0e7ad8_15110472', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_747820420665895eb0e8076_86660967', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_48533585665895eb0e9536_24689432 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_79429509665895eb0e90d0_04528596 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48533585665895eb0e9536_24689432', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1044322714665895eb0e5241_32989822 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1044322714665895eb0e5241_32989822',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_140762817665895eb0e56f8_17147523',
  ),
  'page_title' => 
  array (
    0 => 'Block_1871129701665895eb0e5cd6_31729198',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_926748340665895eb0e76a4_61030823',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1430258946665895eb0e7ad8_15110472',
  ),
  'page_content' => 
  array (
    0 => 'Block_747820420665895eb0e8076_86660967',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_79429509665895eb0e90d0_04528596',
  ),
  'page_footer' => 
  array (
    0 => 'Block_48533585665895eb0e9536_24689432',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140762817665895eb0e56f8_17147523', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_926748340665895eb0e76a4_61030823', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79429509665895eb0e90d0_04528596', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
