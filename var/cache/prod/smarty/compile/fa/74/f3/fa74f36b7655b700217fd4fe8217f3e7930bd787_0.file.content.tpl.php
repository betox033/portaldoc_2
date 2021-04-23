<?php
/* Smarty version 3.1.33, created on 2021-04-19 23:32:55
  from '/home/robertor/public_html/portaldoc/admin732hw8ye9/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_607e4b670cf065_31127242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa74f36b7655b700217fd4fe8217f3e7930bd787' => 
    array (
      0 => '/home/robertor/public_html/portaldoc/admin732hw8ye9/themes/default/template/content.tpl',
      1 => 1618410942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607e4b670cf065_31127242 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
