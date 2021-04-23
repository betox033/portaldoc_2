<?php
/* Smarty version 3.1.33, created on 2021-04-19 23:32:50
  from '/home/robertor/public_html/portaldoc/modules/fieldstaticfooter/block_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_607e4b62570639_37796109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45404aca367895d1b50fb3186cb65eb23fabaff2' => 
    array (
      0 => '/home/robertor/public_html/portaldoc/modules/fieldstaticfooter/block_footer.tpl',
      1 => 1618411762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607e4b62570639_37796109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/robertor/public_html/portaldoc/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staticblocks']->value, 'block', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['block']->value) {
?>
		<?php if ($_smarty_tpl->tpl_vars['block']->value['insert_module'] == 1) {?>
        <?php $_smarty_tpl->_assignInScope('name', ('insert_module_').($_smarty_tpl->tpl_vars['block']->value['name_module']));?>
        	<?php if (strpos($_smarty_tpl->tpl_vars['block']->value['description'],$_smarty_tpl->tpl_vars['name']->value) !== false) {?>
            	<?php ob_start();
echo $_smarty_tpl->tpl_vars['block']->value['block_module'];
$_prefixVariable1 = ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['block']->value['description'],$_smarty_tpl->tpl_vars['name']->value,$_prefixVariable1);?>

            <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>

            <?php echo $_smarty_tpl->tpl_vars['block']->value['block_module'];?>

        	<?php }?>
        <?php } else { ?>
        	  <?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>

        <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    
  <?php }
}
