<?php
/* Smarty version 3.1.33, created on 2021-04-22 10:59:57
  from 'module:pdconfigstylespdconfigsty' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60818f6d0dd128_74911555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '333014e8c74baa5adcda6ea1533d1cf63d4c2a9d' => 
    array (
      0 => 'module:pdconfigstylespdconfigsty',
      1 => 1619103589,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60818f6d0dd128_74911555 (Smarty_Internal_Template $_smarty_tpl) {
?>






<style type="text/css">


@font-face {
  font-family: arcon;
  src: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
fonts/Arcon-Regular.otf);
}

	span, strong, h1, h2, h3, h4, h5,p, a, input, input::placeholder, td,th, select{
		font-family: arcon;
	}






	@media(min-width: 1400px){
		.container{
			max-width: 1300px;
		}
	}

	#sticky_top{
		position: fixed;
		top: 0px;
		left: 0px;
		z-index: 10;
		width: 100%;
	}
	.mobile_links-wrapper{
		display: none;
	}




	/*
	#header_menu{
		height: 50px;
	}*/
	#header_menu #fieldmegamenu-main{
		display: none;
	}

	#fieldmegamenu-main.fieldmegamenu .root:hover .root-item > a > .title{
		background-color: #f6f6f6;
	}
	.back_blog{
		display: none;
	}
	.centro-abs {
		display: flex;
		align-items: center;
		justify-content: center;
	}
	#header{
		position: fixed;
		top: 0px;
		left: 0px;
		z-index: 15;
		width: 100%;
		padding-bottom: 0px;
		background-color: white;
	}

	#header .header-nav{
		border: none !important;
		background-color: white;
		height: auto;
		padding-top: 25px !important;
		padding-bottom: 25px !important;
		transition: .3s;
	}
	#header .header-nav.miniatura{
		padding-top: 10px !important;
		padding-bottom: 10px !important;
		box-shadow: 2px 5px 5px -2px rgb(0 0 0 / 11%) !important;
	}
	#header .header-top{
		background-color: white;
		display: none;
	}
	#header_menu{
		background-color: white;
		/*position: absolute;
		top: 70px;*/
	}
	#fieldmegamenu-main.fieldmegamenu > ul > li .no-description .title{
		color: grey;
		text-transform: none;
		font-size: 18px;
	}
	#fieldmegamenu-main.fieldmegamenu > ul > li .no-description .title:before{
		display: none;
	}
	#sticky_top:before,
	#cart_block_top{
		display: none;
	}
	#fieldmegamenu-main.fieldmegamenu > ul{
		float: right;
	}
	#header .logo{
		display: none;
	}
	.block_footer_main{
		background-color: #2a3c50;
	}
	.footer-bottom{
		background-color: #2a3c50;
	}
	.fotter-top-right li a, .fotter-top-right .collapse li a,
	.fotter-top-right .collapse li a:hover,
	.footer-bottom p,
	.footer-bottom p a{
		color: white;
	}

	.footer-bottom > .container{
		border-top: 2px solid white;
	}

	#back-top a{
		display: none;
	}
</style>


<?php echo '<script'; ?>
 type="text/javascript">
	$(window).scroll(function() {
		if ($(document).scrollTop() > 50) {
			$(".header-nav").addClass("miniatura");
			/*
			$("#logo_principal").addClass("miniatura");
			$(".mainbox_topb").addClass("miniatura");
			$("#header").addClass("miniatura");
			$(".menu_icono_general").addClass("miniatura");
			$(".top_ubicacion").addClass("miniatura");
			*/
		}else {
			$(".header-nav").removeClass("miniatura");
			/*
			$("#logo_principal").removeClass("miniatura");
			$(".mainbox_topb").removeClass("miniatura");
			$("#header").removeClass("miniatura");
			$(".menu_icono_general").removeClass("miniatura");
			$(".top_ubicacion").removeClass("miniatura");
			*/
		}
	});
<?php echo '</script'; ?>
><?php }
}
