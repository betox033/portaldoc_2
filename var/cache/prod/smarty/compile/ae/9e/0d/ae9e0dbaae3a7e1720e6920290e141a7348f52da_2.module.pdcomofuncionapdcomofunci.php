<?php
/* Smarty version 3.1.33, created on 2021-04-22 10:36:02
  from 'module:pdcomofuncionapdcomofunci' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_608189d269d6a1_06784233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae9e0dbaae3a7e1720e6920290e141a7348f52da' => 
    array (
      0 => 'module:pdcomofuncionapdcomofunci',
      1 => 1619102157,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608189d269d6a1_06784233 (Smarty_Internal_Template $_smarty_tpl) {
?>



<style type="text/css">
	.mainbox_cf{
		padding-top: 60px;
		padding-bottom: 60px;
	}
	.mainbox_cf .title_main{
		font-size: 34px;
		font-weight: bold;
		color: #333333;
		text-align: center;
		margin-bottom: 50px;
	}
	.item_cf{
		text-align: center;
	}
	.item_cf .title{
		font-size: 24px;
		font-weight: bold;
		color: #333333;
	}
	.item_cf .parrax{
		font-size: 20px;
		margin-top: 10px;
		line-height: 130%;
		color: #5b5b5b;
	}
	.item_cf img{
		width: 100%;
		margin-bottom: 30px;
	}

</style>







<div class="mainbox_cf">
	<div  class="container">
		<div class="title_main"><span>¿Cómo funciona el Portal?</span></div>

		<div class="row">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_como_funciona']->value, 'cf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cf']->value) {
?>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="item_cf">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ruta_img_pd_como_funciona']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['cf']->value['img'], ENT_QUOTES, 'UTF-8');?>
">
					<div class="title"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cf']->value['titulo'], ENT_QUOTES, 'UTF-8');?>
</strong></div>
					<div class="parrax"><span><?php echo $_smarty_tpl->tpl_vars['cf']->value['parrafo'];?>
</span></div>
				</div>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
</div><?php }
}
