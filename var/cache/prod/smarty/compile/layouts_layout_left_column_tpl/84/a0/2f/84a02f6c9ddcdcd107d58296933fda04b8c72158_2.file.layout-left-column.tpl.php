<?php
/* Smarty version 3.1.33, created on 2021-04-22 11:00:06
  from '/home/robertor/public_html/portaldoc/themes/auto-store_home2/templates/layouts/layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60818f76a27651_55422943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84a02f6c9ddcdcd107d58296933fda04b8c72158' => 
    array (
      0 => '/home/robertor/public_html/portaldoc/themes/auto-store_home2/templates/layouts/layout-left-column.tpl',
      1 => 1618411765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/breadcrumb.tpl' => 3,
  ),
),false)) {
function content_60818f76a27651_55422943 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200176441860818f76a10c14_93441790', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57370061160818f76a11e89_72153818', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_200176441860818f76a10c14_93441790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_200176441860818f76a10c14_93441790',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'breadcrumb'} */
class Block_128549803860818f76a17cb7_98987044 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'breadcrumb'} */
class Block_102623652960818f76a1ec76_71766845 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'breadcrumb'} */
class Block_136145087160818f76a23d98_08761132 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'content'} */
class Block_23508754660818f76a26271_94352097 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_57370061160818f76a11e89_72153818 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_57370061160818f76a11e89_72153818',
  ),
  'breadcrumb' => 
  array (
    0 => 'Block_128549803860818f76a17cb7_98987044',
    1 => 'Block_102623652960818f76a1ec76_71766845',
    2 => 'Block_136145087160818f76a23d98_08761132',
  ),
  'content' => 
  array (
    0 => 'Block_23508754660818f76a26271_94352097',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">
      <?php if (($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'category') && ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index')) {?>
                <div class="bn-top ">
                    <div class="container_img_bread no-img ">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"blockPosition8"),$_smarty_tpl ) );?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128549803860818f76a17cb7_98987044', 'breadcrumb', $this->tplIndex);
?>

                    </div>
                </div>
            <?php }?>
            <?php if (($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category')) {?>
                <?php if (isset($_smarty_tpl->tpl_vars['category']->value) && $_smarty_tpl->tpl_vars['category']->value['image']['large']['url']) {?>
                    <div class="bn-top ">
                        <div class="container_img_bread has-img ">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102623652960818f76a1ec76_71766845', 'breadcrumb', $this->tplIndex);
?>
          
                            <div class="category-cover">
                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
">
                            </div>
                        </div>
                    </div>   
                <?php } else { ?>
                    <div class="bn-top ">
                        <div class="container_img_bread no-img ">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"blockPosition8"),$_smarty_tpl ) );?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136145087160818f76a23d98_08761132', 'breadcrumb', $this->tplIndex);
?>

                        </div>

                    </div>                        
                <?php }?>
            <?php }?>  
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23508754660818f76a26271_94352097', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
