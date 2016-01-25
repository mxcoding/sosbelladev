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
						<button class="btn btn-warning top btn-raised btn-sm"><i class="icon-editar"></i> Editar</button>
						<a class="btn btn-danger top btn-raised btn-sm" data-toggle="modal" href='#modal-id'><i class="icon-eliminar"></i> Eliminar</a>
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
								<tbody>

									<?php foreach ($empleados as $empleado):?>
									<tr>
										<td data-id="<?php echo $empleado->codigo;?>"><?php echo $empleado->codigo;?></td>
										<td><?php echo $empleado->nombre.' '.$empleado->apellidos;?></td>
										<td><?php echo $empleado->fecha_nacimiento;?></td>
										<td><?php echo $empleado->direccion;?></td>
										<td><?php echo $empleado->email;?></td>
										<td><?php echo $empleado->telefono;?></td>
										<td><?php echo $empleado->celular;?></td>
										<td><?php if($empleado->salario_hora) echo '$'.number_format($empleado->salario_hora,2);?></td>
										<td><?php echo $empleado->tiempo_comida." min";?></td>
										<td>
											<a class="galeria" href="<?php echo base_url('assets/img/empleados') ."/".$empleado->foto;?>" rel="galeria">
												<img src="<?php echo base_url('assets/img/empleados') ."/".$empleado->foto;?>" class="img-responsive img-rounded">
											</a>
										</td>
									</tr>
									<?php endforeach;?>
								</tbody>
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
					<button id="eliminar" type="button" class="btn btn-danger btn-raised top btn-sm"><i class="icon-eliminar"></i> Eliminar</button>
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
	$('.boton .btn-warning').on('click',function(event) {
        document.location.href="empleados/editar/"+$(this).data('id');
    });
    $('.boton .btn-danger').on('click',function(event) {
        var nombre=$('.table>tbody>tr.selected>td:eq(1)').text();
        $('#nombre_empleado').empty().text(nombre);
        $('.modal-title').empty().text('Eliminar al empleado '+$(this).data('id'));
    });
   $('#eliminar').on('click',function(event) {
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