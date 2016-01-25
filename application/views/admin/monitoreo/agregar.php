<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body" style="padding:15px 10px;">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?php echo base_url('monitoreo');?>"><i class="icon-monitoreo"></i> Monitoreo de Ventas</a></li>
					<li class="active"><a href="<?php echo base_url('monitoreo/agregar');?>"><i class="icon-agregar"></i> Agregar metas</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body animated fadeIn">
				<h3 class="text-center">Monitoreo de Ventas</h3>
				<div class="col-lg-10 centrada">
					<div class="row">
						<div class="col-lg-4">
							<div class="form-group">
								<label class="control-label azul" for="cbxSucursal">Sucursal</label>
								<div class="form-group">
									<select id="cbxSucursal" class="form-control azul">
										<option value="" disabled selected>Seleccione un sucursal</option>
										<option>CEDIS</option>
										<option>Sucursal 1</option>
										<option>Sucursal 2</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label class="control-label azul" for="txtSalario">Establecer meta</label>
								<i class="icon-dolar"></i>
								<input type="number" min="1" id="txtSalario" name="salario_hora" class="form-control azul" required>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label class="control-label azul" for="cbxMes">Mes</label>
								<i class="icon-calendario caledario"></i>
								<select id="cbxMes" class="form-control azul">
									<option value="" disabled selected>Seleccione un mes</option>
									<option>Enero</option>
									<option>Febrero</option>
									<option>Marzo</option>
									<option>Abril</option>
									<option>Mayo</option>
									<option>Junio</option>
									<option>Julio</option>
									<option>Agosto</option>
									<option>Septiembre</option>
									<option>Octubre</option>
									<option>Noviembre</option>
									<option>Diciembre</option>
								</select>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-lg-4 centrada text-center">
							<button id="agregar_monitoreo" class="btn btn-success btn-raised top btn-xs"><i class="icon-agregar"></i> Agregar</button>
							<div class="boton inline" style="display:none;">
								<button class="btn btn-warning top btn-raised btn-xs"><i class="icon-editar"></i> Editar</button>
								<a class="btn btn-danger top btn-raised btn-xs" data-toggle="modal" href='#modal-id'><i class="icon-eliminar"></i> Eliminar</a>
							</div>
						</div>
					</div>
					<div class="row animated fadeInUp" id="div_reporte_ventas_sucursal">
						<div class="col-lg-10 centrada">
							<div class="table-responsive animated slideInUp">
								<table id="tabla_monitoreo" class="display table table-hover dataTable" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Fecha</th>
											<th>Mes</th>
											<th>Meta Mes</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>01/01/2016</td>
											<td>Enero</td>
											<td><a href="#modal">$100,000.00</a></td>
										</tr>
										<tr>
											<td>05/02/2016</td>
											<td>Febrero</td>
											<td><a href="#modal">$100,000.00</a></td>
										</tr>
										<tr>
											<td>02/04/2016</td>
											<td>Abril</td>
											<td><a href="#modal">$100,000.00</a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<button type="button" class="btn btn-success btn-raised top btn-sm pull-right"><i class="icon-excel"></i></button>
						<button type="button" class="btn btn-danger btn-raised top btn-sm pull-right"><i class="icon-pdf"></i></button>
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
				<h4 class="modal-title">Eliminar Meta</h4>
			</div>
			<div class="modal-body">							
				<p><b>¿Esta seguro que desea eliminar la meta?</b></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
				<button type="button" class="btn btn-primary">Eliminar</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title text-center">Meta Desglosada</h3>
			</div>
			<div class="modal-body">							
				<p><h3><b>Mes</b> $100,000</h3></p>
				<p><h3><b>Semana</b> $25,000</h3></p>
				<p><h3><b>Dia</b> $3,571</h3></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>
<script defer="defer">
	$(function() {
		var tabla=$('#tabla_monitoreo');
		$('.date').pikaday({
			minDate:moment().toDate()
		});
		tabla.DataTable({
			"language": {
				"url":"<?php echo base_url('assets/js');?>/Spanish.json"
			}
		});
		$('#tabla_monitoreo tbody td a').click(function(event) {
			$('#modal').modal('show');
		});
	});
</script>