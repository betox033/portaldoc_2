<?php
/* Smarty version 3.1.33, created on 2021-04-22 11:00:06
  from '/home/robertor/public_html/portaldoc/themes/auto-store_home2/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60818f768f4194_33667383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31274dd8e62b35ad611f4848d508b7d516af4cd8' => 
    array (
      0 => '/home/robertor/public_html/portaldoc/themes/auto-store_home2/templates/catalog/listing/category.tpl',
      1 => 1618411765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60818f768f4194_33667383 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185467644060818f768f1ed4_60381868', 'banner_categories');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154684773860818f768f32a4_44643783', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'banner_categories'} */
class Block_185467644060818f768f1ed4_60381868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner_categories' => 
  array (
    0 => 'Block_185467644060818f768f1ed4_60381868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 
<?php
}
}
/* {/block 'banner_categories'} */
/* {block 'product_list_header'} */
class Block_154684773860818f768f32a4_44643783 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_154684773860818f768f32a4_44643783',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                       
                 
<?php
}
}
/* {/block 'product_list_header'} */
}
