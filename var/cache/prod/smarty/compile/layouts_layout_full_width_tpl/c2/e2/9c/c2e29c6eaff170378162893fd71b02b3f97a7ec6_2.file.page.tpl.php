<?php
/* Smarty version 3.1.33, created on 2021-04-19 23:32:55
  from '/home/robertor/public_html/portaldoc/themes/auto-store_home2/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_607e4b67c354a8_72858495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2e29c6eaff170378162893fd71b02b3f97a7ec6' => 
    array (
      0 => '/home/robertor/public_html/portaldoc/themes/auto-store_home2/templates/page.tpl',
      1 => 1618411765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607e4b67c354a8_72858495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164202005607e4b67c2d558_45118627', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1548166333607e4b67c2e5d6_43334243 extends Smarty_Internal_Block
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
class Block_1230902795607e4b67c2dc79_39659745 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1548166333607e4b67c2e5d6_43334243', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_528770607607e4b67c324f9_08032661 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1867933299607e4b67c32e69_36206834 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1570594686607e4b67c31e40_23647797 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_528770607607e4b67c324f9_08032661', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1867933299607e4b67c32e69_36206834', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_533425281607e4b67c34519_09284463 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_2054885253607e4b67c33ef3_68518758 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_533425281607e4b67c34519_09284463', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_164202005607e4b67c2d558_45118627 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_164202005607e4b67c2d558_45118627',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1230902795607e4b67c2dc79_39659745',
  ),
  'page_title' => 
  array (
    0 => 'Block_1548166333607e4b67c2e5d6_43334243',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1570594686607e4b67c31e40_23647797',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_528770607607e4b67c324f9_08032661',
  ),
  'page_content' => 
  array (
    0 => 'Block_1867933299607e4b67c32e69_36206834',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_2054885253607e4b67c33ef3_68518758',
  ),
  'page_footer' => 
  array (
    0 => 'Block_533425281607e4b67c34519_09284463',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1230902795607e4b67c2dc79_39659745', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1570594686607e4b67c31e40_23647797', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2054885253607e4b67c33ef3_68518758', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
