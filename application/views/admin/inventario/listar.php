<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="<?php echo base_url('inventario');?>"><i class="icon-factura"></i> Inventario</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="text-center">Inventario</h3>
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group">
							<label for="cbxSucursal" class="control-label azul">Sucursal</label>
							<select id="cbxSucursal" class="form-control azul">
								<option value="" disabled selected>Seleccione una sucursal</option>
								<option>Sucursal 02</option>
								<option>CEDIS</option>
							</select>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="radio radio-primary">
				          <label>
				            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
				            Todo
				          </label>
				        </div>
				        <div class="radio radio-primary">
				          <label>
				            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
				            Rango
				          </label>
				        </div>
					</div>
					<div class="formulario">
						<div class="col-lg-3">
							<div class="form-group">
								<label class="control-label azul" for="txtFechaInicio">Fecha de Inicio</label>
								<i class="icon-calendario caledario"></i>
								<input class="form-control azul date" id="txtFechaInicio" type="text" required>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="form-group">
								<label class="control-label azul" for="txtFechaTermino">Fecha de Termino</label>
								<i class="icon-calendario caledario"></i>
								<input class="form-control azul date" id="txtFechaTermino" type="text" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2 centrada text-center">
						<button id="buscar_inventario" class="btn btn-bella top btn-raised btn-sm"><i class="icon-buscar"></i> Consultar</button>
					</div>	
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-sm-offset-3 col-md-9 col-md-offset-3 col-lg-10 col-lg-offset-2 animated fadeIn" id="div_inventario" style="display:none;">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive animated slideInUp ">
							<table id="tabla_inventario" class="display table table-hover dataTable" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Código</th>
										<th>Fecha</th>
										<th>Nombre</th>
										<th>Descripción</th>
										<th>Precio</th>
										<th>Existencia</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-id="F001">P001</td>
										<td>12/05/2015</td>
										<td>Pulsera</td>
										<td>Pulsera Roja</td>
										<td>$50.00</td>
										<td>5000</td>
									</tr>
								</tbody>
							</table>
						</div>
						<button type="button" class="btn btn-danger btn-raised top btn-sm pull-right"><i class="icon-pdf"></i></button>
						<button type="button" class="btn btn-success btn-raised top btn-sm pull-right"><i class="icon-excel"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script defer="defer">
$(function() {
	$('#tabla_inventario').DataTable({
		"language": {
			"url":"<?php echo base_url('assets/js');?>/Spanish.json"
		}
	});
	$('#buscar_inventario').click(function(event) {
		$('#div_inventario').show();
	});
});
</script>