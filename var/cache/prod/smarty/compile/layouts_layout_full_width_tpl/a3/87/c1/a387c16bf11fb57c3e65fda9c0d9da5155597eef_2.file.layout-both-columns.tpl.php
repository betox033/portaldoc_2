<?php
/* Smarty version 3.1.33, created on 2021-04-20 10:27:09
  from '/home/robertor/public_html/portaldoc/themes/auto-store_home2/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_607ee4bd07e4e9_66914998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a387c16bf11fb57c3e65fda9c0d9da5155597eef' => 
    array (
      0 => '/home/robertor/public_html/portaldoc/themes/auto-store_home2/templates/layouts/layout-both-columns.tpl',
      1 => 1618928823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:modules/fieldthemecustomizer/views/templates/front/colortool.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_607ee4bd07e4e9_66914998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!doctype html>

<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">



    <head>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1229776224607ee4bce4cda7_94204453', 'head');
?>


        <?php if (isset($_smarty_tpl->tpl_vars['FIELD_customCSS']->value) && $_smarty_tpl->tpl_vars['FIELD_customCSS']->value) {?>

            <!-- Start Custom CSS -->

            <style><?php echo $_smarty_tpl->tpl_vars['FIELD_customCSS']->value;?>
</style>

            <!-- End Custom CSS -->

        <?php }?>

        <?php echo '<script'; ?>
 >

            var LANG_RTL =<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['is_rtl'], ENT_QUOTES, 'UTF-8');?>
;

            var langIso = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['language_code'], ENT_QUOTES, 'UTF-8');?>
';

            var baseUri = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
';

            <?php if ((isset($_smarty_tpl->tpl_vars['FIELD_enableCountdownTimer']->value) && $_smarty_tpl->tpl_vars['FIELD_enableCountdownTimer']->value)) {?>

            var FIELD_enableCountdownTimer = true;

            <?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['FIELD_stickyMenu']->value) && $_smarty_tpl->tpl_vars['FIELD_stickyMenu']->value)) {?>

            var FIELD_stickyMenu = true;

            <?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['FIELD_stickySearch']->value) && $_smarty_tpl->tpl_vars['FIELD_stickySearch']->value)) {?>

            var FIELD_stickySearch = true;

            <?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['FIELD_stickyCart']->value) && $_smarty_tpl->tpl_vars['FIELD_stickyCart']->value)) {?>

            var FIELD_stickyCart = true;

            <?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['FIELD_mainLayout']->value) && $_smarty_tpl->tpl_vars['FIELD_mainLayout']->value)) {?>

            var FIELD_mainLayout = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_mainLayout']->value, ENT_QUOTES, 'UTF-8');?>
';

            <?php }?>

            var countdownDay = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Day"),$_smarty_tpl ) );?>
';

            var countdownDays = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Days"),$_smarty_tpl ) );?>
';

            var countdownHour = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Hour"),$_smarty_tpl ) );?>
';

            var countdownHours = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Hours"),$_smarty_tpl ) );?>
';

            var countdownMinute = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Min"),$_smarty_tpl ) );?>
';

            var countdownMinutes = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Mins"),$_smarty_tpl ) );?>
';

            var countdownSecond = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Sec"),$_smarty_tpl ) );?>
';

            var countdownSeconds = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Secs"),$_smarty_tpl ) );?>
';

        <?php echo '</script'; ?>
>

    </head>

    <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
 <?php if (isset($_smarty_tpl->tpl_vars['FIELD_mainLayout']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_mainLayout']->value, ENT_QUOTES, 'UTF-8');
}?>">

        <?php if (isset($_smarty_tpl->tpl_vars['FIELD_showPanelTool']->value) && $_smarty_tpl->tpl_vars['FIELD_showPanelTool']->value) {?>

            <?php $_smarty_tpl->_subTemplateRender("file:modules/fieldthemecustomizer/views/templates/front/colortool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php }?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>




        <main>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_697766349607ee4bd01c8b9_42133879', 'product_activation');
?>


            <header id="header">

                <nav class="header-nav">

                    <div class="container">
                        <div class="row">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

                        </div>

                        

                    </div>

                </nav> 

                <div class="header-top">

                    <div class="container">

                        <div class="row">

                            <div class="logo_header col-md-3 col-xs-12">

                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">

                                    <img class="img-responsive logo" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">

                                </a>

                            </div>

                            <div id="sticky_top" class="col-md-9 col-xs-12">

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>


                            </div>

                        </div>

                    </div>

                    <div class="header-bottom">

                        <!-- MEGAMENU -->

                        <div id="header_menu" class="visible-lg visible-md">

                            <div class="container">

                                <div class="row">

                                     <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'vmegamenu'),$_smarty_tpl ) );?>


                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHeaderMenu'),$_smarty_tpl ) );?>


                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </header>

            <div id="header_mobile_menu" class="navbar-inactive visible-sm visible-xs">

                <div class="fieldmm-nav col-sm-12 col-xs-12">

                    <div class="container">

                        <div id="menu-mobile">

                            <span id="fieldmm-button"><i class="fa fa-reorder"></i></span>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHeaderMenu','fieldmegamenumobile'=>true),$_smarty_tpl ) );?>


                        </div>

                        <div id="sticky_mobile">

                            <nav class="header-nav-mobile">

                                <div class="nav2">

                                    <div class="click-nav2">

                                        <i class="fa fa-bars"></i>

                                    </div>

                                    <div class="content-nav2">

                                        <div class="content-nav2-items">

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>


                                        </div>

                                    </div>

                                </div>

                            </nav>

                        </div>

                    </div>

                </div>

            </div>

            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>

                <div class="vmenu">

                    <div class="container">

                        <div class="row">

                            <div class="col-md-3 vmegamenu2"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav'),$_smarty_tpl ) );?>
</div>    

                        </div>

                    </div>

                </div>

            <?php }?>                    

          <div class="container">

            <div class="vmega_responsive">

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>


            </div>

          </div>

            <!-- SLIDER SHOW -->



            <!--END SLIDER SHOW -->

            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>

                <div id="field_slideshow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'fieldSlideShow'),$_smarty_tpl ) );?>
</div>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1177979735607ee4bd024733_87025350', 'page_content');
?>


            <?php }?>

            <!--END SLIDER SHOW -->

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1718471220607ee4bd025e08_68404472', 'notifications');
?>


            <section id="wrapper" class="active_grid">

                <h2 style="display:none !important">.</h2>



                <div class="container">

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_998323169607ee4bd027023_98973428', 'banner_categories');
?>


                    
                    <?php if ((isset($_smarty_tpl->tpl_vars['layout']->value) && $_smarty_tpl->tpl_vars['layout']->value != 'layouts/layout-full-width.tpl') || (isset($_smarty_tpl->tpl_vars['layout_category']->value) && $_smarty_tpl->tpl_vars['layout_category']->value != 'layouts/layout-full-width.tpl') || (isset($_smarty_tpl->tpl_vars['layout_details']->value) && $_smarty_tpl->tpl_vars['layout_details']->value != 'layouts/layout-full-width.tpl')) {?>

                        <div class="row">

                        <?php }?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22445729607ee4bd059ca0_30032106', "left_column");
?>






                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1730501225607ee4bd05f3d9_09991119', "content_wrapper");
?>




                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_411407539607ee4bd062185_40157004', "right_column");
?>


                        <?php if ((isset($_smarty_tpl->tpl_vars['layout']->value) && $_smarty_tpl->tpl_vars['layout']->value != 'layouts/layout-full-width.tpl') || (isset($_smarty_tpl->tpl_vars['layout_category']->value) && $_smarty_tpl->tpl_vars['layout_category']->value != 'layouts/layout-full-width.tpl') || (isset($_smarty_tpl->tpl_vars['layout_details']->value) && $_smarty_tpl->tpl_vars['layout_details']->value != 'layouts/layout-full-width.tpl')) {?>

                        </div>

                    <?php }?>





                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_548018615607ee4bd069d35_67342725', 'mapsforcontact');
?>


                </div>



            </section>

            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'cms') {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayIntSuperior"),$_smarty_tpl ) );?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>

                <div class="back_blog">

                    <div class="container">

                        <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index' && isset($_smarty_tpl->tpl_vars['HOOK_SMARTBLOGHOMEPOST']->value) && !empty($_smarty_tpl->tpl_vars['HOOK_SMARTBLOGHOMEPOST']->value)) {?> 

                            <?php echo $_smarty_tpl->tpl_vars['HOOK_SMARTBLOGHOMEPOST']->value;?>


                        <?php }?>

                    </div>

                </div>

            <?php }?>

            <footer id="footer">

                <?php if (isset($_smarty_tpl->tpl_vars['HOOK_FIELDBRANDSLIDER']->value) && !empty($_smarty_tpl->tpl_vars['HOOK_FIELDBRANDSLIDER']->value)) {?>

                    <div class ="Brands-block-slider">

                    <div class="container">

                        <?php echo $_smarty_tpl->tpl_vars['HOOK_FIELDBRANDSLIDER']->value;?>


                    </div>

                    </div>

                <?php }?>

                <div class="block_footer_main">

                    <div class ="footer-center">

                        <div class="container">

                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-3">

                                    <div class="row">

                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blockFooter1'),$_smarty_tpl ) );?>


                                    </div>

                                </div>

                            </div>

                            <div class="fotter-top-right">

                                <div class="row">

                                   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blockFooter2'),$_smarty_tpl ) );?>


                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="footer-bottom">

                        <div class="container">

                               <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blockFooter3'),$_smarty_tpl ) );?>


                        </div>

                    </div>

                </div>



                <div id="back-top"><a href="javascript:void(0)" class="mypresta_scrollup hidden-phone"><i class="fa fa-chevron-up"></i></a></div>

                        <?php if (isset($_smarty_tpl->tpl_vars['FIELD_customJS']->value) && $_smarty_tpl->tpl_vars['FIELD_customJS']->value) {?>

                    <!-- Start Custom JS -->

                    <?php echo '<script'; ?>
 ><?php echo $_smarty_tpl->tpl_vars['FIELD_customJS']->value;
echo '</script'; ?>
>

                    <!-- End Custom JS -->

                <?php }?>

            </footer>



        </main>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_700782908607ee4bd079b33_31824703', 'javascript_bottom');
?>


        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>


    </body>



</html>



<?php }
/* {block 'head'} */
class Block_1229776224607ee4bce4cda7_94204453 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1229776224607ee4bce4cda7_94204453',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php
}
}
/* {/block 'head'} */
/* {block 'product_activation'} */
class Block_697766349607ee4bd01c8b9_42133879 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_697766349607ee4bd01c8b9_42133879',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php
}
}
/* {/block 'product_activation'} */
/* {block 'page_content'} */
class Block_1177979735607ee4bd024733_87025350 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_1177979735607ee4bd024733_87025350',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>


        <?php
}
}
/* {/block 'page_content'} */
/* {block 'notifications'} */
class Block_1718471220607ee4bd025e08_68404472 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_1718471220607ee4bd025e08_68404472',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php
}
}
/* {/block 'notifications'} */
/* {block 'banner_categories'} */
class Block_998323169607ee4bd027023_98973428 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner_categories' => 
  array (
    0 => 'Block_998323169607ee4bd027023_98973428',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




                    <?php
}
}
/* {/block 'banner_categories'} */
/* {block "left_column"} */
class Block_22445729607ee4bd059ca0_30032106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_22445729607ee4bd059ca0_30032106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                            <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">

                                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>


                                <?php } else { ?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>


                                <?php }?>

                            </div>

                        <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_800237239607ee4bd0604a5_41164439 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                                    <p>Hello world! This is HTML5 Boilerplate.</p>

                                <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_1730501225607ee4bd05f3d9_09991119 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_1730501225607ee4bd05f3d9_09991119',
  ),
  'content' => 
  array (
    0 => 'Block_800237239607ee4bd0604a5_41164439',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                            <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_800237239607ee4bd0604a5_41164439', "content", $this->tplIndex);
?>


                            </div>

                        <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_411407539607ee4bd062185_40157004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_411407539607ee4bd062185_40157004',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                            <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>


                            </div>

                        <?php
}
}
/* {/block "right_column"} */
/* {block 'mapsforcontact'} */
class Block_548018615607ee4bd069d35_67342725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'mapsforcontact' => 
  array (
    0 => 'Block_548018615607ee4bd069d35_67342725',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                    <?php
}
}
/* {/block 'mapsforcontact'} */
/* {block 'javascript_bottom'} */
class Block_700782908607ee4bd079b33_31824703 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_700782908607ee4bd079b33_31824703',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>

        <?php
}
}
/* {/block 'javascript_bottom'} */
}
