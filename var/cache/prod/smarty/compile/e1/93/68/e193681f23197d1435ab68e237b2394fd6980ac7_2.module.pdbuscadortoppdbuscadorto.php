<?php
/* Smarty version 3.1.33, created on 2021-04-22 16:47:26
  from 'module:pdbuscadortoppdbuscadorto' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6081e0dea11558_73973623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e193681f23197d1435ab68e237b2394fd6980ac7' => 
    array (
      0 => 'module:pdbuscadortoppdbuscadorto',
      1 => 1619124438,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6081e0dea11558_73973623 (Smarty_Internal_Template $_smarty_tpl) {
?>


<style type="text/css">
	.mainbox_topb{
		/*position: fixed;
		top: 35px;
		left: 35vw;
		z-index: 30;
		transition: .3s;*/
		position: relative;
	}
	.mainbox_topb.miniatura{
		top: 7px;
	}
	.input_bm{
		border: .7px solid lightgrey;
		border-radius: 40px;
		width: 100%;
		font-size: 18px;
		/*color: #5b5b5b;*/
		color: #333333;
		padding: 10px;
		padding-left: 20px;
		font-weight: lighter;
	}
	.input_bm::placeholder{
		color: #5b5b5b;
	}
	.input_bm:hover{
		box-shadow: 2px 5px 5px -2px rgb(0 0 0 / 11%);
	}
	.btn_input_bm{
		position: absolute;
		right: 5px;
		top: 5px;
		z-index: 5;
		border-radius: 4px;
		width: 35px;
		height: 35px;
		/*background-color: #007bc2;*/
		color: lightgrey;
		font-size: 22px;
		cursor: pointer;
		transition: .3s;
	}
	.btn_input_bm:hover{
		color: grey;
	}
	.btn_input_bm img{
		width: 25px;
	}

	.mainbox_topb .resultado{
		position: absolute;
		top: 35px;
		z-index: 5;
		background-color: white;
		left: 5px;
		width: 100%;
		box-shadow: 2px 5px 5px -2px rgb(0 0 0 / 11%);
		max-height: 0px;
		opacity: 0;
		transition: .3s;
		padding: 10px;
	}
	.mainbox_topb .resultado.mostrar{
		opacity: 1;
		max-height: none;
	}
	.col_buscador{
		padding-left: 0px;
		padding-right: 0px;
	}
</style>



<div class="col-sm-12 col-md-6 col-lg-5 col_buscador">
	<div class="mainbox_topb">
		<input type="text" name="" class="input_bm" id="input_buscador" placeholder="Busca atenciones en salud, exámenes, y más...">
		<div class="btn_input_bm centro-abs"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ruta_img_pd_buscador_top']->value, ENT_QUOTES, 'UTF-8');?>
lupa.png"></div>

		<div class="resultado">
			<span>Mensaje de Prueba</span>
		</div>
	</div>	
</div>

<div class="col-lg-1"></div>





<?php echo '<script'; ?>
 type="text/javascript">
	$("#input_buscador").keyup(function(){
		var valor = $(this).val();

		$.ajax({
			type: 'POST',
			url: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ruta_controller_pd_buscador_top']->value, ENT_QUOTES, 'UTF-8');?>
ajaxShowServicios.php',
			data: 'valor=' + valor,
			success: function(response){
				$(".mainbox_topb .resultado").html(response);
				$(".mainbox_topb .resultado").addClass("mostrar");
			}
		});

	});
<?php echo '</script'; ?>
><?php }
}
