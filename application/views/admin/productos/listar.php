<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="<?php echo base_url('productos');?>"><i class="icon-listar"></i> Listar</a></li>
					<li><a href="<?php echo base_url('productos/agregar');?>"><i class="icon-agregar"></i> Agregar</a></li>
					<li><a href="<?php echo base_url('productos/cantidades');?>"><i class="icon-cantidades"></i> Cantidades</a></li>
					<li><a href="<?php echo base_url('productos/imprimir_codigos');?>"><i class="icon-codigo"></i> Codigos</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="text-center">Listar Productos</h3>
				<div class="row">
					<div class="col-lg-4 centrada boton">
						<button class="btn btn-warning top btn-raised btn-sm"><i class="icon-editar"></i> Editar</button>
						<a class="btn btn-danger top btn-raised btn-sm" data-toggle="modal" href='#modal-id'><i class="icon-eliminar"></i> Eliminar</a>
						<a class="btn btn-primary top btn-raised btn-sm" data-toggle="modal" href='#modal-detalle'><i class="icon-detalle"></i></a>
					</div>	
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive animated slideInUp">
							<table id="tabla_productos" class="display table table-hover dataTable" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Familia</th>
										<th>Categoria</th>
										<th>Código</th>
										<th>Fecha</th>
										<th>Nombre</th>
										<th>Descripción</th>
										<th>Cantidad</th>
										<th>Precio</th>
										<th>Descuento</th>
										<th>Precio Franquiciatario</th>
										<th>C.Min</th>
										<th>C.Max</th>
										<th>Obsoleto</th>
										<th>Existencia</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-id="P001">Bisuteria</td>
										<td>Pulseras</td>
										<td>P001</td>
										<td>12/05/2015</td>
										<td>Pulsera Roja</td>
										<td>Descripción de la Pulsera Roja</td>
										<td>200</td>
										<td>$5.00</td>
										<td>40%</td>
										<td>$3.50</td>
										<td>10</td>
										<td>200</td>
										<td>NO</td>
										<td>1</td>
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
					<p>¿Realmente desea eliminar el producto <strong id="nombre_producto"></strong>?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-danger btn-raised top btn-sm"><i class="icon-eliminar"></i> Eliminar</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-detalle">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Detalle Producto</h4>
				</div>
				<div class="modal-body">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Color</th>
									<th>Cantidad</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Rojo</td>
									<td>50</td>
								</tr>
								<tr>
									<td>Verde</td>
									<td>40</td>
								</tr>
							</tbody>
						</table>
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Sucursal</th>
									<th>Cantidad Minima</th>
									<th>Cantidad Maxima</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Tasqueña</td>
									<td>50</td>
									<td>5000</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script defer="defer">
	$('#tabla_productos').DataTable({
		"language": {
			"url":"<?php echo base_url('assets/js');?>/Spanish.json"
        }
	});
	$('.boton .btn-warning').on('click',function(event) {
        document.location.href="productos/editar/"+$(this).data('id');
    });
    $('.boton .btn-danger').on('click',function(event) {
        var nombre=$('.table>tbody>tr.selected>td:eq(4)').text();
        $('#nombre_producto').empty().text(nombre);
        $('.modal-title').empty().text('Eliminar el producto '+$(this).data('id'));
    });
    $('.boton .btn-primary').on('click',function(event) {

    });
</script>