<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="<?php echo base_url('franquicias');?>"><i class="icon-listar"></i> Listar</a></li>
					<li><a href="<?php echo base_url('franquicias/agregar');?>"><i class="icon-agregar"></i> Agregar</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="text-center">Listar Franquicias</h3>
				<div class="row">
					<div class="col-lg-4 centrada boton">
						<form action="<?php echo base_url('franquicias/editar') ?>" method="POST">
							<input type="hidden" class="editar" name="IdFranquicia" value="">
							<div class="text-center">
								<button type="submit" class="btn btn-warning top btn-raised btn-sm"><i class="icon-editar"></i> Editar</button>
							</div>
						</form>
						<a class="btn btn-danger top btn-raised btn-sm" data-toggle="modal" href='#modal-id'><i class="icon-eliminar"></i> Eliminar</a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive animated fadeIn">
							<table id="tabla_franquicias" class="display table table-hover dataTable" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Clave</th>
										<th>Nombre</th>
										<th>Franquiciatario</th>
									</tr>
								</thead>
								<?php if($franquicias):?>
									<tbody>
									<?php foreach ($franquicias as $franquicia):?>
										<tr>
											<td data-id="<?php echo $franquicia->IdFranquicia;?>"><?php echo $franquicia->Clave?></td>
											<td><?php echo $franquicia->Nombre;?></td>
											<td><?php echo $franquicia->Franquiciatario;?></td>
										</tr>
									<?php endforeach;?>
									</tbody>
									
								<?php else:?>
									<tbody></tbody>
								<?php endif;?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-id">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">Eliminar Franquicia</h4>
				</div>
				<div class="modal-body">
					<p>¿Realmente desea eliminar la franquicia <strong id="detalle_row"></strong>?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-raised top btn-sm" data-dismiss="modal"><i class="icon-cerrar"></i> cerrar</button>
					<button type="button" class="btn btn-danger btn-raised top btn-sm" id="eliminar"><i class="icon-eliminar"></i> Eliminar <div class="spinner"></div></button>
				</div>
			</div>
		</div>
	</div>
</div>
<script defer="defer">
	var tabla=$('#tabla_franquicias').DataTable({
		"language": {
			"url":"<?php echo base_url('assets/js');?>/Spanish.json"
        }
	});
    $('.boton .btn-danger').on('click',function(event) {
        var clave=$('.table>tbody>tr.selected>td:eq(0)').text();
        var nombre=$('.table>tbody>tr.selected>td:eq(1)').text();
        $('#detalle_row').empty().text(clave+' '+nombre);
    });
    $('#eliminar').click(function (e) {
    	e.preventDefault();
    	$.ajax({
			url: '<?php echo base_url("franquicias/eliminar");?>',
			type: 'POST',
			dataType: 'json',
			data: {IdFranquicia:$('.btn-danger').data('id')},
			beforeSend:function(){
				$('.spinner').fadeIn();
			},
			success: function(data, textStatus, xhr) {
				if(data.estatus){
					tabla.row('.selected').remove().draw(false);
					$('.modal').modal('hide');
					mostrarMensaje(data.mensaje,'ok');
				}
				else{
					console.log(data.mensaje);
				}
			},
			error: function(xhr, textStatus, errorThrown) {
				console.log("Error al eliminar la sucursal");
			},
			complete:function(){
				$('.spinner').fadeOut();
			}
		});
    });
</script>