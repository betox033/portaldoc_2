


<style type="text/css">
	.tabla_resultados{
		margin-bottom: 0px;
	}
	.tabla_resultados td{
		padding: 3px;
	}
	.tabla_resultados th{
		font-size: 13px;
	}
	.tabla_resultados tbody tr:hover td{
		background-color: lightgrey;
		cursor: pointer;
		margin-bottom: 0px;
	}
	.no_data_results{
		text-align: center;
		font-style: oblique;
	}
</style>

<table class="table tabla_resultados">
	<thead>
		<th>Nombre</th>
		<th>Código</th>
	</thead>
	<tbody>
		<?php foreach ($lista_servicios as $key => $servicio): ?>
			<tr id_servicio="<?php echo($servicio['id']); ?>">
				<td><span><?php echo($servicio['nombre']); ?></span></td>
				<td><span><?php echo($servicio['cod_fonasa']); ?></span></td>
			</tr>
		<?php endforeach ?>
		<?php if(!count($lista_servicios)){ ?>
			<tr>
				<td colspan="2" class="no_data_results"><span>No hay resultados que coincidan.</span></td>
			</tr>
		<?php } ?>
	</tbody>
</table>



<script type="text/javascript">
	$(".tabla_resultados tbody td").unbind('click').click(function(){
		var id_servicio = $(this).closest("tr").attr("id_servicio");
		location.href = "index.php?controller=cms&id_cms=6&serv=" + id_servicio;
	});

    $(document).on("click", function(event){
        var item_106 = $(".mainbox_topb .resultado");

        if(item_106 !== event.target && !item_106.has(event.target).length){
            item_106.removeClass("mostrar");
        }else{
        	item_106.addClass("mostrar");
        }           
    });
</script>