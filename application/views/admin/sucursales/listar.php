<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="<?php echo base_url('sucursales');?>"><i class="icon-listar"></i> Listar</a></li>
					<li><a href="<?php echo base_url('sucursales/agregar');?>"><i class="icon-agregar"></i> Agregar</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="text-center">Listar Sucursales</h3>
				<div class="row">
					<div class="col-lg-4 centrada boton">
						<form action="<?php echo base_url('sucursales/editar') ?>" method="POST">
							<input type="hidden" class="editar" name="IdSucursal" value="">
							<div class="text-center">
								<button type="submit" class="btn btn-warning top btn-raised btn-sm"><i class="icon-editar"></i> Editar</button>
							</div>
						</form>
						<a class="btn btn-danger top btn-raised btn-sm" id="eliminar" data-toggle="modal" href='#modal-id'><i class="icon-eliminar"></i> Eliminar</a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive animated slideInUp">
							<table id="tabla_sucursales" class="display table table-hover dataTable" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Clave</th>
										<th>Nombre</th>
										<th>Direccion</th>
										<th>Franquicia</th>
									</tr>
								</thead>
								<?php if($sucursales):?>
									<tbody>
										<?php foreach ($sucursales as $sucursal):?>
											<tr>
												<td data-id="<?php echo $sucursal->IdSucursal;?>"><?php echo $sucursal->Clave?></td>
												<td><?php echo $sucursal->NombreSucursal;?></td>
												<td><?php echo $sucursal->Direccion;?></td>
												<td><?php echo $sucursal->NombreFranquicia;?></td>
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
					<h4 class="modal-title text-center">Eliminar Sucursal</h4>
				</div>
				<div class="modal-body">
					<p>¿Realmente desea eliminar la sucursal <strong id="detalle_sucursal"></strong>?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-sm btn-raised top" data-dismiss="modal"><i class="icon-cerrar"></i> Cerrar</button>
					<button type="button" data-id="" class="btn btn-danger btn-raised top btn-sm" id="confirmar"><i class="icon-eliminar"></i> Eliminar <div class="spinner"></div></button>
				</div>
			</div>
		</div>
	</div>
</div>
<script defer="defer">
	var tabla=$('#tabla_sucursales').DataTable({
		"language": {
			"url":"<?php echo base_url('assets/js');?>/Spanish.json"
		}
	});
	$('.boton .btn-danger').on('click',function(event) {
		var nombre=$('.table>tbody>tr.selected>td:eq(1)').text();
		var clave=$('.table>tbody>tr.selected>td:eq(0)').text();
		$('#detalle_sucursal').empty().text(clave+' '+nombre);
	});
	$('#confirmar').click(function (e) {
		e.preventDefault();
		$.ajax({
			url: '<?php echo base_url("sucursales/eliminarSucursal");?>',
			type: 'POST',
			dataType: 'json',
			data: {IdSucursal:$('.btn-danger').data('id')},
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