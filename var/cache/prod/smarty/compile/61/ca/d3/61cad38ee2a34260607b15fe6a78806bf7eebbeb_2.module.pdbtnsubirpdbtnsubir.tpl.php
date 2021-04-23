<?php
/* Smarty version 3.1.33, created on 2021-04-19 23:32:50
  from 'module:pdbtnsubirpdbtnsubir.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_607e4b625b56f6_27040089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61cad38ee2a34260607b15fe6a78806bf7eebbeb' => 
    array (
      0 => 'module:pdbtnsubirpdbtnsubir.tpl',
      1 => 1618421809,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607e4b625b56f6_27040089 (Smarty_Internal_Template $_smarty_tpl) {
?>









<style type="text/css">
	.btn_subir{
		position: fixed;
		bottom: 20px;
		right: 10px;
		width: 50px;
		cursor: pointer;
		transition: .3s;
		z-index: 20;
	}
	.back-to-top{
		display: none !important;
	}
	html {
  		scroll-behavior: smooth;
	}
</style>



<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ruta_img_pd_btnsubir']->value, ENT_QUOTES, 'UTF-8');?>
21.png" class="btn_subir">

<?php echo '<script'; ?>
 type="text/javascript">
	$(".btn_subir").unbind('click').click(function(){
		window.scrollTo(0, 0);
	});
	$(window).scroll(function() {
		if ($(document).scrollTop() > 150) {
			$('.btn_subir').css("opacity", 1);
		}
		else {
			$('.btn_subir').css("opacity", 0);
		}
	});
<?php echo '</script'; ?>
><?php }
}
