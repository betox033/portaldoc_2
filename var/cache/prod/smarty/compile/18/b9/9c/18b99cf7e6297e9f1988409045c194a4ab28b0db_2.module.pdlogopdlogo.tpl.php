<?php
/* Smarty version 3.1.33, created on 2021-04-22 16:44:42
  from 'module:pdlogopdlogo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6081e03a0b91f3_75590031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18b99cf7e6297e9f1988409045c194a4ab28b0db' => 
    array (
      0 => 'module:pdlogopdlogo.tpl',
      1 => 1619124266,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6081e03a0b91f3_75590031 (Smarty_Internal_Template $_smarty_tpl) {
?>



<style type="text/css">
	#logo_principal{
		/*position: fixed;
		z-index: 30;
		top: 17px;
		left: 10vw;*/
		position: relative;
		z-index: 100;
		width: 70%;

		margin-top: -5px;
		margin-bottom: -50px;
	}
	#header .header-nav.miniatura #logo_principal{
		width: 180px;
		margin-top: -10px;
	}
</style>



<div class="col-sm-12 col-md-6 col-lg-3">
	<div class="centro-abs">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
" class="centro-abs">
		<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ruta_img_pd_logo']->value, ENT_QUOTES, 'UTF-8');?>
logo_portalDocfinal.png" id="logo_principal">
	</a>		
	</div>

</div>
<div class="col-lg-1"></div>
<?php }
}
