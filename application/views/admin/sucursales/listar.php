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
						<button class="btn btn-warning top btn-raised btn-sm"><i class="icon-editar"></i> Editar</button>
						<a class="btn btn-danger top btn-raised btn-sm" data-toggle="modal" href='#modal-id'><i class="icon-eliminar"></i> Eliminar</a>
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
								<tbody>
									<tr>
										<td data-id="SUC001">SUC001</td>
										<td>Sucursal Tasqueña</td>
										<td>Metro Tasqueña s/n</td>
										<td>Franquicia 1</td>
									</tr>
									<tr>
										<td data-id="SUC002">SUC002</td>
										<td>Sucursal Atizapán</td>
										<td>Metro Atizapan s/n</td>
										<td>Franquicia 2</td>
									</tr>
									<tr>
										<td data-id="SUC003">SUC003</td>
										<td>Sucursal Puebla</td>
										<td>Col Centro #414</td>
										<td>Franquicia 3</td>
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
					<p>¿Realmente desea eliminar la sucursal <strong id="nombre_sucursal"></strong>?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-sm btn-raised top" data-dismiss="modal"><i class="icon-cerrar"></i> Cerrar</button>
					<button type="button" class="btn btn-danger btn-raised top btn-sm"><i class="icon-eliminar"></i> Eliminar</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script defer="defer">
	$('#tabla_sucursales').DataTable({
		"language": {
			"url":"<?php echo base_url('assets/js');?>/Spanish.json"
        }
	});
	$('.boton .btn-warning').on('click',function(event) {
        document.location.href="sucursales/editar/"+$(this).data('id');
    });
    $('.boton .btn-danger').on('click',function(event) {
        var nombre=$('.table>tbody>tr.selected>td:eq(0)').text();
        $('#nombre_sucursal').empty().text(nombre);
        $('.modal-title').empty().text('Eliminar la sucursal '+$(this).data('id'));
    });
</script>