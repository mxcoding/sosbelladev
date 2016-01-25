<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?php echo base_url('productos');?>"><i class="icon-listar"></i> Listar</a></li>
					<li><a href="<?php echo base_url('productos/agregar');?>"><i class="icon-agregar"></i> Agregar</a></li>
					<li class="active"><a href="<?php echo base_url('productos/cantidades');?>"><i class="icon-cantidades"></i> Cantidades</a></li>
					<li><a href="<?php echo base_url('productos/imprimir_codigos');?>"><i class="icon-codigo"></i> Codigos</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body animated fadeIn">
				<div class="row">
					<h3 class="text-center">Administración de Cantidades</h3>
					<div class="col-lg-10 centrada">
						<div class="col-lg-4 col-md-4">
							<div class="form-group">
								<label for="cbxDescuento" class="control-label azul">Sucursal</label>
								<select id="cbxDescuento" class="form-control azul">
									<option value="" disabled selected>Seleccione una sucursal</option>
									<option>Sucursal Tasqueña</option>
								</select>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="form-group">
								<label for="cbxDescuento" class="control-label azul">Producto</label>
								<select id="cbxDescuento" class="form-control azul">
									<option value="" disabled selected>Seleccione una sucursal</option>
									<option>Pulseras</option>
								</select>
							</div>
						</div>
						<div class="col-lg-2 col-md-2">
							<div class="form-group">
								<label class="control-label azul" for="txtCantidadMinimaSucursal">Cant Minima</label>
								<input class="form-control azul" id="txtCantidadMinimaSucursal" type="text" required>
							</div>
						</div>
						<div class="col-lg-2 col-md-2">
							<div class="form-group">
								<label class="control-label azul" for="txtCantidadMaximaSucursal">Cant Máxima</label>
								<input class="form-control azul" id="txtCantidadMaximaSucursal" type="text" required>
							</div>
						</div>
						<div class="text-center">
							<button class="btn btn-success btn-raised top btn-sm"><i class="icon-agregar"></i> Agregar</button>	
						</div>
					</div>
					<div class="col-lg-11 centrada">
						<div class="col-lg-4 centrada boton">
							<button class="btn btn-warning top btn-raised btn-sm"><i class="icon-editar"></i> Editar</button>
							<a class="btn btn-danger top btn-raised btn-sm" data-toggle="modal" href='#modal-id'><i class="icon-eliminar"></i> Eliminar</a>
						</div>
						<div class="table-responsive">
							<table class="display table dataTable table-hover" id="tabla_cantidades">
								<thead>
									<tr>
										<th>Sucursal</th>
										<th>Producto</th>
										<th>Cantidad Mínima</th>
										<th>Cantidad Máxima</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-id="k">Sucursal Tasqueña</td>
										<td>Pulsera</td>
										<td>100</td>
										<td>5000</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		var tabla=$('#tabla_cantidades').DataTable({
			"language": {
				"url":"<?php echo base_url('assets/js');?>/Spanish.json"
			}
		});
	});
</script>