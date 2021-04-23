<?php
/* Smarty version 3.1.33, created on 2021-04-22 17:03:30
  from 'module:pdbuscadorpdbuscador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6081e4a234cd75_20071238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3fad1a960b7a24bc3e21948ce01a6dc308789bb' => 
    array (
      0 => 'module:pdbuscadorpdbuscador.tpl',
      1 => 1619124889,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6081e4a234cd75_20071238 (Smarty_Internal_Template $_smarty_tpl) {
?>



<?php if ($_smarty_tpl->tpl_vars['id_cms_pd_buscador']->value == 6) {?>



<style type="text/css">
	#main{
		display: none;
	}
	.mainbox_buscador{
		padding-bottom: 40px;
		padding-top: 50px;
	}
	.mainbox_buscador .title{
		/*color: #1678c7;*/
		color: #0079C8;
		font-size: 24px;
		font-weight: bold;
		margin-bottom: 30px;
		padding-left: 30px;
	}
	.filter select{
		border: 1px solid #5b9bd5;
		border-radius: 5px;
		padding: 5px;
		font-size: 17px;
		color: #5b5b5b;
		width: 100%;
		transition: .3s;
		cursor: pointer;
	}
	.filter.filter_azul select{
		background-color: #2277ce;
		color: white;
	}
	.filter select:hover{
		background-color: #e5f2ff;
		color: #3696ad;
	}
	.filter.filter_azul select:hover{
		background-color: #2277ce;
		border: 1px solid #2277ce;
		color: white;
	}
	.filter{
		margin-bottom: 15px;
	}
	.btn_results{
		background-color: #0079C8;
		border: 1px solid #0079C8;
		font-size: 17px;
		padding: 5px;
		border-radius: 5px;
		transition: .3s;
		cursor: pointer;
		color: white;
	}
	.btn_results:hover{
		background-color: #0079C8;
		border: 1px solid #0079C8;
	}
	.box_filters{
		padding-left: 30px;
		padding-right: 30px;
	}
	.filter.filter_rosado select{
		background-color: #cb299b;
		color: white;
		border: 1px solid #cb299b;
	}



</style>


	<div class="mainbox_buscador">
		<div class="container">
			<div class="title"><span>Búsqueda personalizada</span></div>
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="box_filters">
						<div class="filter filter_rosado">
							<select>
								<option selected value="" disabled>Ingresar Perfil</option>
							</select>
						</div>
						<div class="filter">
							<select>
								<option selected value="" disabled>Ubicación</option>
								
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_ciudades']->value, 'ciudad');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ciudad']->value) {
?>
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ciudad']->value->codigoCiudad, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ciudad']->value->nombreCiudad, ENT_QUOTES, 'UTF-8');?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<div class="filter">
							<select>
								<option selected disabled value="">Especialidad</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_especialidades']->value, 'especialidad');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['especialidad']->value) {
?>
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['especialidad']->value['id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['especialidad']->value['id'] == $_smarty_tpl->tpl_vars['esp_default']->value) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['especialidad']->value['nombre'], ENT_QUOTES, 'UTF-8');?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<div class="filter">
							<select id="selector_servicio">
								<option selected disabled value="">Prestación o exámen</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_servicios']->value, 'servicio');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['servicio']->value) {
?>
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['servicio']->value['id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['servicio']->value['id'] == $_smarty_tpl->tpl_vars['serv_default']->value) {?>selected<?php }?>>
									<strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['servicio']->value['nombre'], ENT_QUOTES, 'UTF-8');?>
&nbsp;|&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['servicio']->value['cod_fonasa'], ENT_QUOTES, 'UTF-8');?>
</strong>
								</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<div class="filter">
							<select>
								<option selected disabled value="">Horario hábil o inhábil</option>
								<option value="1">Hábil</option>
								<option value="0">Inhábil</option>
							</select>
						</div>
						<div class="filter">
							<select>
								<option selected disabled value="">Fonasa</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_fonasa']->value, 'fonasa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fonasa']->value) {
?>
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fonasa']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fonasa']->value['nombre'], ENT_QUOTES, 'UTF-8');?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<div class="filter">
							<select>
								<option selected disabled value="">Isapre</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_isapre']->value, 'isapre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['isapre']->value) {
?>
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['isapre']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['isapre']->value['nombre'], ENT_QUOTES, 'UTF-8');?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<div class="filter">
							<select>
								<option selected disabled value="">Seguro complementario</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_seguros']->value, 'seguro');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['seguro']->value) {
?>
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seguro']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seguro']->value['nombre'], ENT_QUOTES, 'UTF-8');?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<div class="filter">
							<select>
								<option selected disabled value="">Caja de compensación</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_cajas']->value, 'caja');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['caja']->value) {
?>
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['caja']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['caja']->value['nombre'], ENT_QUOTES, 'UTF-8');?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<div class="filter">
							<select>
								<option selected disabled value="">Convenio</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_convenios']->value, 'convenio');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['convenio']->value) {
?>
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['convenio']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['convenio']->value['nombre'], ENT_QUOTES, 'UTF-8');?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<div class="btn_results">
							<span>Ver Resultados</span>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-9">
					<div class="resultado_lista" style="height: 100%">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ruta_img_pd_buscador']->value, ENT_QUOTES, 'UTF-8');?>
shutterstock_1718755624.png" style="width: 100%;">
						
					</div>
				</div>
			</div>
		</div>
	</div>




<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
		$(".btn_results").unbind('click').click(function(){
			var id_servicio = $("#selector_servicio").val();
			$.ajax({
				type: 'POST',
				url: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ruta_controller_pd_buscador']->value, ENT_QUOTES, 'UTF-8');?>
ajaxGetListaServiciosFiltro.php',
				data: 'id_servicio=' + id_servicio,
				beforeSend: function(){

				},
				success: function(response){
					//alert(response);
					$(".resultado_lista").html(response);
				}
			});
		});
	});
<?php echo '</script'; ?>
>







<?php }?>








<?php }
}
