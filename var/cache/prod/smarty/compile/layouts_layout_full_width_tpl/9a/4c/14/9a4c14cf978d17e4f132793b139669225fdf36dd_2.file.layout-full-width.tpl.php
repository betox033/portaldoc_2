<?php
/* Smarty version 3.1.33, created on 2021-04-19 23:32:50
  from '/home/robertor/public_html/portaldoc/themes/auto-store_home2/templates/layouts/layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_607e4b6223e4d5_34367464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a4c14cf978d17e4f132793b139669225fdf36dd' => 
    array (
      0 => '/home/robertor/public_html/portaldoc/themes/auto-store_home2/templates/layouts/layout-full-width.tpl',
      1 => 1618411765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/breadcrumb.tpl' => 3,
  ),
),false)) {
function content_607e4b6223e4d5_34367464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1714980470607e4b6222b4f1_60489890', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1075087298607e4b6222c011_20093051', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1067889458607e4b6222cba0_55911312', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_1714980470607e4b6222b4f1_60489890 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_1714980470607e4b6222b4f1_60489890',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_1075087298607e4b6222c011_20093051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_1075087298607e4b6222c011_20093051',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'breadcrumb'} */
class Block_764179459607e4b6222f4f9_19389961 extends Smarty_Internal_Block
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
class Block_1327060049607e4b62238d17_49347001 extends Smarty_Internal_Block
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
class Block_1546447954607e4b6223bfb8_97774208 extends Smarty_Internal_Block
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
class Block_388489068607e4b6223d6e8_59629924 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p>Hello world! This is HTML5 Boilerplate.</p>
        <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_1067889458607e4b6222cba0_55911312 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_1067889458607e4b6222cba0_55911312',
  ),
  'breadcrumb' => 
  array (
    0 => 'Block_764179459607e4b6222f4f9_19389961',
    1 => 'Block_1327060049607e4b62238d17_49347001',
    2 => 'Block_1546447954607e4b6223bfb8_97774208',
  ),
  'content' => 
  array (
    0 => 'Block_388489068607e4b6223d6e8_59629924',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper">
        <?php if (($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'category') && ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index')) {?>
            <div class="bn-top ">
                <div class="container_img_bread no-img ">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"blockPosition8"),$_smarty_tpl ) );?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_764179459607e4b6222f4f9_19389961', 'breadcrumb', $this->tplIndex);
?>

                </div>
            </div>
        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category')) {?>
            <?php if (isset($_smarty_tpl->tpl_vars['category']->value) && $_smarty_tpl->tpl_vars['category']->value['image']['large']['url']) {?>
                <div class="bn-top ">
                    <div class="container_img_bread has-img ">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1327060049607e4b62238d17_49347001', 'breadcrumb', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1546447954607e4b6223bfb8_97774208', 'breadcrumb', $this->tplIndex);
?>

                    </div>

                </div>                        
            <?php }?>
        <?php }?>  
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_388489068607e4b6223d6e8_59629924', 'content', $this->tplIndex);
?>

    </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
