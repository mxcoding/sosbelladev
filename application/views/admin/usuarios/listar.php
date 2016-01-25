<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="<?php echo base_url('usuarios');?>"><i class="icon-listar"></i> Listar</a></li>
					<li><a href="<?php echo base_url('usuarios/agregar');?>"><i class="icon-agregar"></i> Agregar</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="text-center">Listar Usuarios</h3>
				<div class="row">
					<div class="col-lg-4 centrada boton">
						<button class="btn btn-warning top btn-raised btn-sm"><i class="icon-editar"></i> Editar</button>
						<a class="btn btn-danger top btn-raised btn-sm" data-toggle="modal" href='#modal-id'><i class="icon-eliminar"></i> Eliminar</a>
					</div>	
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive animated slideInUp">
							<table id="tabla_usuarios" class="display table table-hover dataTable" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Usuario</th>
										<th>Tipo de Usuario</th>
										<th>Nombre</th>
										<th>Perfil</th>
										<th>Permisos</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-id="usuario001">usuario001</td>
										<td>Empleado</td>
										<td>Juan Carlos Valenzuela Pérez</td>
										<td>Administrador</td>
										<td>Web</td>
									</tr>
									<tr>
										<td data-id="usuario002">usuario002</td>
										<td>Franquiciatario</td>
										<td>Raúl Jiménez Méndez</td>
										<td>Administrador</td>
										<td>Web</td>
									</tr>
									<tr>
										<td data-id="usuario002">usuario003</td>
										<td>Empleado</td>
										<td>Javier Hernández Márquez</td>
										<td>Vendedor</td>
										<td>Punto Venta</td>
									</tr>
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
					<p>¿Realmente desea eliminar al usuario <strong id="nombre_usuario"></strong>?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-sm top btn-raised" data-dismiss="modal"><i class="icon-cerrar"></i> Cerrar</button>
					<button type="button" class="btn btn-danger btn-raised top btn-sm"><i class="icon-eliminar"></i> Eliminar</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script defer="defer">
	$('#tabla_usuarios').DataTable({
		"language": {
			"url":"<?php echo base_url('assets/js');?>/Spanish.json"
        }
	});
	$('.boton .btn-warning').on('click',function(event) {
        document.location.href="usuarios/editar/"+$(this).data('id');
    });
    $('.boton .btn-danger').on('click',function(event) {
        var nombre=$('.table>tbody>tr.selected>td:eq(0)').text();
        $('#nombre_usuario').empty().text(nombre);
        $('.modal-title').empty().text('Eliminar al usuario '+$(this).data('id'));
    });
</script>