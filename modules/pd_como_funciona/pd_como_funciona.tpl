



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
			{foreach $lista_como_funciona as $cf}
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="item_cf">
					<img src="{$ruta_img_pd_como_funciona}{$cf.img}">
					<div class="title"><strong>{$cf.titulo}</strong></div>
					<div class="parrax"><span>{$cf.parrafo nofilter}</span></div>
				</div>
			</div>
			{/foreach}
		</div>
	</div>
</div>