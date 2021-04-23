<?php
/* Smarty version 3.1.33, created on 2021-04-22 17:00:46
  from 'module:pdhomebtnpdhomebtn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6081e3fe867fc9_14328818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c28cbeb074cf6fe86a8e09503fc30becc28009b8' => 
    array (
      0 => 'module:pdhomebtnpdhomebtn.tpl',
      1 => 1619125239,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6081e3fe867fc9_14328818 (Smarty_Internal_Template $_smarty_tpl) {
?>




<style type="text/css">

	@media(min-width: 990px){
		.cuadro_botones_home{
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.cuadro_botones_home .item_btn{
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
		}
		.item_btn{
			min-width: 180px;
		}
	}
	.cuadro_botones_home{
		position: relative;
		z-index: 5;
	}
	.cuadro_botones_home .cuadro_left{
		position: absolute;
		top: 0px;
		left: 0px;
		width: 50%;
		height: 100%;
		background-color: #005881;
		z-index: -1;
	}
	.cuadro_botones_home .cuadro_right{
		position: absolute;
		top: 0px;
		right: 0px;
		width: 50%;
		height: 100%;
		background-color: #005881;
		z-index: -1;
	}
	.item_btn{
		cursor: pointer;
    	transition: .3s;
    	padding-left: 10px;
    	padding-right: 10px;
    	padding-top: 20px;
    	padding-bottom: 20px;
    	color: white;
    	font-size: 18px;
    	font-weight: bold;
	}
	.item_btn img{
		width: 80px;
		height: auto;
		margin-bottom: 12px;
	}
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homebtn_lista']->value, 'homebtn', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['homebtn']->value) {
?>
	.item__btn__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
{
			background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homebtn']->value['color'], ENT_QUOTES, 'UTF-8');?>
;
		}
		.item__btn__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
:hover{
			background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homebtn']->value['color_hover'], ENT_QUOTES, 'UTF-8');?>
;
		}
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	@media(max-width: 990px){
		.item_btn{
			padding: 5px;
			padding-left: 30px;
			font-size: 11px;
			float: left;
    		width: 50%;
		}
		.item_btn img{
			width: 40px;
			margin-bottom: 0px;
		}
		.cuadro_botones_home{
			margin-bottom: 30px;
			height: 110px;
		}

	}
</style>

<div class="cuadro_botones_home">
	<div class="cuadro_left"></div>
	<div class="cuadro_right"></div>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homebtn_lista']->value, 'homebtn', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['homebtn']->value) {
?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homebtn']->value['url'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['homebtn']->value['newtab']) {?>target="_blank"<?php }?>>
			<div class="item_btn item__btn__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ruta_img_pd_homebtn']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['homebtn']->value['img'], ENT_QUOTES, 'UTF-8');?>
">
				<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homebtn']->value['titulo'], ENT_QUOTES, 'UTF-8');?>
</span>
			</div>			
		</a>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
