<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="<?php echo base_url('empleados');?>"><i class="icon-listar"></i> Listar</a></li>
					<li><a href="<?php echo base_url('empleados/agregar');?>"><i class="icon-agregar"></i> Agregar</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10 animated fadeIn">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="text-center">Listar Empleados</h3>
				<div class="row">
					<div class="col-lg-4 centrada boton">
						<form action="<?php echo base_url('empleados/editar') ?>" method="POST">
							<input type="hidden" class="editar" name="id" value="">
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
							<table id="tabla_empleados" class="display table table-hover dataTable" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Codigo</th>
										<th>Sucursal</th>
										<th>Nombre</th>
										<th>Fecha de Nac</th>
										<th>Dirección</th>
										<th>Email</th>
										<th>Teléfono</th>
										<th>Celular</th>
										<th>Salario</th>
										<th>Comida</th>
										<th>Fotografia</th>
									</tr>
								</thead>
								<?php if($empleados):?>
								<tbody>
									<?php foreach ($empleados as $empleado):?>
									<tr>
										<td data-id="<?php echo $empleado->IdEmpleado;?>"><?php echo $empleado->Clave;?></td>
										<td></td>
										<td><?php echo $empleado->Nombre.' '.$empleado->Apellidos;?></td>
										<td><?php echo $empleado->FechaNacimiento;?></td>
										<td><?php echo $empleado->Direccion;?></td>
										<td><?php echo $empleado->Mail;?></td>
										<td><?php echo $empleado->Telefono;?></td>
										<td><?php echo $empleado->Celular;?></td>
										<td><?php if($empleado->SueldoHora) echo '$'.number_format($empleado->SueldoHora,2);?></td>
										<td><?php echo $empleado->TiempoComida." min";?></td>
										<td><img src="<?php echo base_url('assets/img/empleados') ."/".$empleado->NomImagen."?".time();?>" class="img-responsive img-rounded"></td>
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
					<h4 class="modal-title"></h4>
				</div>
				<div class="modal-body">
					<p>¿Realmente desea eliminar al empleado <strong id="nombre_empleado"></strong>?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-raised btn-sm top" data-dismiss="modal"><i class="icon-cerrar"></i> cerrar</button>
					<button id="confirmar" type="button" class="btn btn-danger btn-raised top btn-sm"><i class="icon-eliminar"></i> Eliminar</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script defer="defer">
	var tabla=$('#tabla_empleados').DataTable({
		"language": {
			"url":"<?php echo base_url('assets/js');?>/Spanish.json"
        }
	});
    $('#eliminar').on('click',function(event) {
        var nombre=$('.table>tbody>tr.selected>td:eq(0)').text();
        $('#nombre_empleado').empty().text(nombre);
        $('.modal-title').empty().text('Eliminar al empleado '+nombre);
    });
   $('#confirmar').on('click',function(event) {
   		jQuery.ajax({
   		  url: '<?php echo base_url("empleados/eliminarEmpleado");?>',
   		  type: 'POST',
   		  dataType: 'json',
   		  data: {codigo:$('.boton .btn-danger').data('id')},
   		  success: function(data, textStatus, xhr) {
   		    if(data){
   		    	tabla.row('.selected').remove().draw(false);
   		    	mostrarMensaje('Empleado eliminado','ok');
   		    }
   		  },
   		  error: function(xhr, textStatus, errorThrown) {
   		  	console.log('Error al eliminar al empleado ');
   		  },
   		  complete:function(){
   		  	$('#modal-id').modal('hide');
   		  }
   		});
   });
</script>