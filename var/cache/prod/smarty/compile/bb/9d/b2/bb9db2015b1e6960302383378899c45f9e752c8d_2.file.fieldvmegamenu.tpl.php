<?php
/* Smarty version 3.1.33, created on 2021-04-19 23:32:50
  from '/home/robertor/public_html/portaldoc/modules/fieldvmegamenu/fieldvmegamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_607e4b62428488_21321037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb9db2015b1e6960302383378899c45f9e752c8d' => 
    array (
      0 => '/home/robertor/public_html/portaldoc/modules/fieldvmegamenu/fieldvmegamenu.tpl',
      1 => 1618411762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607e4b62428488_21321037 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="block v-megamenu-container">
    <div class="v-megamenu-title bgcolor <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == "index") {?>Click<?php }?>">
        <i class="fa icon-reorder"></i>
        <h3 class="title_font"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','mod'=>'fieldvmegamenu'),$_smarty_tpl ) );?>
</h3>
    </div>
    <div class="v-megamenu">
        <ul><?php echo $_smarty_tpl->tpl_vars['vmegamenu']->value;?>
</ul>
        
    </div>
</div>
<?php echo '<script'; ?>
 >
	var CloseVmenu = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"CLOSE MENU",'mod'=>"fieldvmegamenu"),$_smarty_tpl ) );?>
';
	var MoreVmenu='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"MORE CATEGORIES",'mod'=>"fieldvmegamenu"),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
><?php }
}
