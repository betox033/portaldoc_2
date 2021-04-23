

<style type="text/css">
	.item_servicio{
		border: 2px solid lightgrey;
		border-radius: 8px;
		padding: 15px;
		margin-bottom: 15px;
		text-align: center;
		font-size: 17px;
		/*font-family: "Roboto", "sans-serif";*/
		transition: .3s;
	}
	.item_servicio:hover{
		background-color: #ebebeb;
		border: 2px solid #ebebeb;
		box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);
	}
	.item_servicio .nombre{
		font-size: 22px;
		font-weight: 400;
		line-height: 130%;
		margin-bottom: 7px;
	}
	.col_servicio{
		padding-left: 5px;
		padding-right: 5px;
	}
	.precios{
		overflow: hidden;
		text-align: left;
		padding-bottom: 7px;
	}
	.precios .nms{
		float: left;
		width: 60%;
	}
	.precios .vls{
		float: left;
		width: 40%;
	}
	.item_servicio .codigo{
		margin-bottom: 10px;
	}
	.ult{
		margin-top: 10px;
		color: black;
	}
	.item_servicio .logo{
		width: 70%;
		margin-bottom: 10px;
	}

	.btn_solicitar{
		margin-top: 20px;
		color: white;
		background-color: #b02488;
		padding: 5px;
		font-size: 15px;
		border-radius: 5px;
		display: inline-block;
		padding-left: 20px;
		padding-right: 20px;
		transition: .3s;
		cursor: pointer;
	}
	.btn_solicitar:hover{
		background-color: #951470;
	}
	.btnbox{
		text-align: center;
	}
	.mored{
		margin-top: 15px;
		color: #959595;
		transition: .3s;
		cursor: pointer;
	}
	.mored:hover{
		color: black;
	}
</style>






<div class="container-fluid">
	<div class="row">
		<?php for($k=0; $k<9; $k++){ ?>
			<div class="col-sm-12 col-md-6 col-lg-4 col_servicio">
				<div class="item_servicio">
					<img src="/portaldoc/img/logotipo_IMARED.png" class="logo">
					<div class="nombre"><span>Resonancia Magnética Rodilla</span></div>
					<div class="codigo"><span>Código: 0405013</span></div>
					<div class="precios">
						<div class="nms"><span>Particular</span></div><div class="vls"><span>:$300.000</span></div>
						<div class="nms"><span>Copago Fonasa</span></div><div class="vls"><span>:$71.650</span></div>
						<div class="nms ult"><span>A pagar</span></div><div class="vls ult"><span>:$71.650</span></div>
					</div>
					<div class="btnbox"><div class="btn_solicitar"><span>Solicita tu Hora</span></div></div>
					<div class="mored"><span>Más detalles >></span></div>
				</div>
			</div>
		<?php } ?>
	</div>	
</div>


