




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
	{foreach $homebtn_lista as $key => $homebtn}
	.item__btn__{$key}{
			background-color: {$homebtn.color};
		}
		.item__btn__{$key}:hover{
			background-color: {$homebtn.color_hover};
		}
	{/foreach}

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
	{*{$homebtn_lista|@var_dump}*}
	{foreach $homebtn_lista as $key => $homebtn}
		<a href="{$homebtn.url}" {if $homebtn.newtab}target="_blank"{/if}>
			<div class="item_btn item__btn__{$key}">
				<img src="{$ruta_img_pd_homebtn}{$homebtn.img}">
				<span>{$homebtn.titulo}</span>
			</div>			
		</a>
	{/foreach}
</div>