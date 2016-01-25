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
						<div class="table-responsive">
							<table id="tabla_empleados" class="display table table-hover dataTable" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Codigo</th>
										<th>Nombre</th>
										<th>Sucursal</th>
										<th>Fecha de Nac</th>
										<th>Dirección</th>
										<th>Email</th>
										<th>Teléfono</th>
										<th>Celular</th>
										<th>Salario</th>
										<th>Comida</th>
										<th>Fotografia</th>
										<th>Usuario</th>
										<th>Perfil</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-id="EMP001">EMP001</td>
										<td>Juan Martinez Perez</td>
										<td>12/05/1993</td>
										<td>Calle Centro #8 Col Ecatepec</td>
										<td>juan@web.com</td>
										<td>555555555</td>
										<td>0445555555555</td>
										<td>$5000</td>
										<td>60 min</td>
										<td>
											<a class="galeria" href="<?php echo base_url('assets/img/empleados/1.jpg');?>" rel="galeria">
												<img src="<?php echo base_url('assets/img/empleados/1.jpg');?>" class="img-responsive img-circle">
											</a>
										</td>
										<td>usuario</td>
										<td>Cajero</td>
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
					<p>¿Realmente desea eliminar al empleado <strong id="nombre_empleado"></strong>?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-raised btn-sm top" data-dismiss="modal"><i class="icon-cerrar"></i> cerrar</button>
					<button type="button" class="btn btn-danger btn-raised top btn-sm"><i class="icon-eliminar"></i> Eliminar</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script defer="defer">
	$('#tabla_empleados').DataTable({
		"language": {
			"url":"<?php echo base_url('assets/js');?>/Spanish.json"
        }
	});
	$('.boton .btn-warning').on('click',function(event) {
        document.location.href="empleados/editar/"+$(this).data('id');
    });
    $('.boton .btn-danger').on('click',function(event) {
        var nombre=$('.table>tbody>tr.selected>td:eq(1)').text();
        var apellidop=$('.table>tbody>tr.selected>td:eq(2)').text();
        var apellidom=$('.table>tbody>tr.selected>td:eq(3)').text();
        $('#nombre_empleado').empty().text(nombre+' '+apellidop+' '+apellidom);
        $('.modal-title').empty().text('Eliminar al empleado '+$(this).data('id'));
    });
</script>