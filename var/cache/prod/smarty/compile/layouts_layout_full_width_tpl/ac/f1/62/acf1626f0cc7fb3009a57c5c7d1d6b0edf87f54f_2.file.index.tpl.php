<?php
/* Smarty version 3.1.33, created on 2021-04-19 23:32:50
  from '/home/robertor/public_html/portaldoc/themes/auto-store_home2/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_607e4b6218e2a2_67105238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acf1626f0cc7fb3009a57c5c7d1d6b0edf87f54f' => 
    array (
      0 => '/home/robertor/public_html/portaldoc/themes/auto-store_home2/templates/index.tpl',
      1 => 1618414341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607e4b6218e2a2_67105238 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1342777579607e4b62180fd0_24121604', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_337586737607e4b62181960_62373886 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'content'} */
class Block_1342777579607e4b62180fd0_24121604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1342777579607e4b62180fd0_24121604',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_337586737607e4b62181960_62373886',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section id="content" class="page-home">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_337586737607e4b62181960_62373886', 'page_content_top', $this->tplIndex);
?>


                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"blockPosition1"),$_smarty_tpl ) );?>
 

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"newproductslider"),$_smarty_tpl ) );?>
 

                 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"blockPosition2"),$_smarty_tpl ) );?>


                <div class="row">

                     <div class="col-xs-12 col-sm-4">

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"featuredproductslider"),$_smarty_tpl ) );?>
 

                     </div>

                     <div class="col-xs-12 col-sm-4">

                         <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"onecateproductslider"),$_smarty_tpl ) );?>
 

                     </div>

                     <div class="col-xs-12 col-sm-4">

                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"bestsellers"),$_smarty_tpl ) );?>
 

                     </div>

                 </div>

                  <div class="row banner_1">

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"blockPosition3"),$_smarty_tpl ) );?>


                    <div class="col-xs-12 col-sm-12 col-md-3">

                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"testimonials"),$_smarty_tpl ) );?>


                     </div>

                  </div>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"tabcateslider"),$_smarty_tpl ) );?>
 



</section>

<?php
}
}
/* {/block 'content'} */
}
