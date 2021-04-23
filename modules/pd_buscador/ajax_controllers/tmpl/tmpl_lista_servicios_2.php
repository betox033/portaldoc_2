


<style type="text/css">
	.item_servicio{
		border: 1px solid #a7a7a7;
		padding: 15px;
		padding-left: 30px;
		padding-right: 30px;
		border-radius: 7px;
		margin-bottom: 15px;
		color: #858585;
		font-size: 17px;
		transition: .3s;
	}
	.item_servicio:hover{
		background-color: #ebebeb;
		border: 1px solid #ebebeb;
		box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);
	}
	.item_servicio .logo{
		width: 100%;
	}
	.item_servicio .name_exam{
		font-size: 20px;
		font-weight: 500;
		margin-bottom: 7px;
	}
	.item_servicio .more_details{
		font-size: 13px;
		margin-top: 10px;
		cursor: pointer;
		transition: .3s;
	}
	.item_servicio .more_details:hover{
		color: black;
		font-weight: bold;
	}
	.table_precios tbody td{
		padding-top: 0px;
		padding-bottom: 10px;
		vertical-align: top;
	}
	.price_fund{
		color: #0079C8;
		font-weight: bold;
	}


	.btn_soli, .btn_comp{
		transition: .3s;
		cursor: pointer;
		color: white;
		border-radius: 5px;
		margin-bottom: 7px;
		padding: 7px;
		font-size: 16px;
		text-align: center;
		width: 100%;
	}
	.btn_soli{
		background-color: #00abf8;
		width: 100%;
	}
	.btn_soli:hover{
		background-color: #00abf8;
	}
	.btn_comp{
		background-color: #44B527;
	}
	.btn_comp:hover{
		background-color: #44B527;
	}
	.cuadro_logo{
		height: 85px;
	}

	.col_res{
		padding-left: 7px;
		padding-right: 7px;
	}
	.col_res_lineleft{
		border-left: 2px solid lightgrey;
		padding-left: 12px;
	}
	.col_botones_res{
		padding-left: 2px;
		padding-right: 2px;
		height: 85px;
		flex-direction: column;
	}
</style>






<?php foreach ($lista_servicios as $key => $servicio): ?>
	<div class="item_servicio">
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-2 col_res">
				<div class="cuadro_logo centro-abs">
					<img src="/portaldoc/img/prest/<?php echo($servicio['logo']); ?>" class="logo">
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 col_res">
				<div class="name_exam"><span><?php echo($servicio_general['nombre']); ?></span></div>
				<div class="code_exam"><span>Código: <?php echo($servicio_general['cod_fonasa']); ?></span></div>
				<div class="more_details"><span>Más detalles ></span></div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 col_res col_res_lineleft">
				<table class="table_precios">
					<tbody>
						<tr>
							<td><span>Particular</span></td><td><span>: $300.000</span></td>	
						</tr>
						<tr>
							<td><span>Copago Fonasa</span></td><td><span>: $71.650</span></td>
						</tr>
						<tr class="price_fund">
							<td><span>A pagar</span></td><td><span>: $71.650</span></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-2 col_res col_botones_res centro-abs">
				<div class="btn_soli"><span>Solicita tu Hora</span></div>
				<a href="https://beneficiarios.fonasa.cl/Fonasa-beneficiarios/#!/login" target="_blank" style="width: 100%">
					<div class="btn_comp" style="margin-bottom: 0px"><span>Compra de Bono</span></div>
				</a>
			</div>
		</div>
	</div>
<?php endforeach ?>