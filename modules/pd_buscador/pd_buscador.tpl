



{if $id_cms_pd_buscador == 6}



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
								
								{foreach $lista_ciudades as $ciudad}
								<option value="{$ciudad->codigoCiudad}">{$ciudad->nombreCiudad}</option>
								{/foreach}
							</select>
						</div>
						<div class="filter">
							<select>
								<option selected disabled value="">Especialidad</option>
								{foreach $lista_especialidades as $especialidad}
								<option value="{$especialidad.id}" {if $especialidad.id == $esp_default}selected{/if}>{$especialidad.nombre}</option>
								{/foreach}
							</select>
						</div>
						<div class="filter">
							<select id="selector_servicio">
								<option selected disabled value="">Prestación o exámen</option>
								{foreach $lista_servicios as $servicio}
								<option value="{$servicio.id}" {if $servicio.id == $serv_default}selected{/if}>
									<strong>{$servicio.nombre}&nbsp;|&nbsp;{$servicio.cod_fonasa}</strong>
								</option>
								{/foreach}
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
								{foreach $lista_fonasa as $fonasa}
								<option value="{$fonasa.id}">{$fonasa.nombre}</option>
								{/foreach}
							</select>
						</div>
						<div class="filter">
							<select>
								<option selected disabled value="">Isapre</option>
								{foreach $lista_isapre as $isapre}
								<option value="{$isapre.id}">{$isapre.nombre}</option>
								{/foreach}
							</select>
						</div>
						<div class="filter">
							<select>
								<option selected disabled value="">Seguro complementario</option>
								{foreach $lista_seguros as $seguro}
								<option value="{$seguro.id}">{$seguro.nombre}</option>
								{/foreach}
							</select>
						</div>
						<div class="filter">
							<select>
								<option selected disabled value="">Caja de compensación</option>
								{foreach $lista_cajas as $caja}
								<option value="{$caja.id}">{$caja.nombre}</option>
								{/foreach}
							</select>
						</div>
						<div class="filter">
							<select>
								<option selected disabled value="">Convenio</option>
								{foreach $lista_convenios as $convenio}
								<option value="{$convenio.id}">{$convenio.nombre}</option>
								{/foreach}
							</select>
						</div>
						<div class="btn_results">
							<span>Ver Resultados</span>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-9">
					<div class="resultado_lista" style="height: 100%">
						<img src="{$ruta_img_pd_buscador}shutterstock_1718755624.png" style="width: 100%;">
						
					</div>
				</div>
			</div>
		</div>
	</div>




<script type="text/javascript">
	$(document).ready(function(){
		$(".btn_results").unbind('click').click(function(){
			var id_servicio = $("#selector_servicio").val();
			$.ajax({
				type: 'POST',
				url: '{$ruta_controller_pd_buscador}ajaxGetListaServiciosFiltro.php',
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
</script>







{/if}








