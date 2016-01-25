<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<h4 class="text-center">TOTAL VENTA</h4>
				<h4 class="text-center"><strong>$90000.00</strong></h4>
				<div class="form-group">
					<label for="cbxCorte" class="control-label azul">Seleccione Corte</label>
					<select id="cbxCorte" class="form-control azul">
						<option>Corte1 12:00 hrs</option>
						<option>Corte2 17:00 hrs</option>
						<option>Corte2 20:00 hrs</option>
					</select>
				</div>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?php echo base_url('reportes/cortes_caja');?>"><i class="icon-regresar"></i>Cortes de Caja</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body animated fadeIn">
				<h3 class="text-center">Detalle de Corte de Caja del dia <?php echo $fecha;?> </h3>
				<div class="col-lg-10 centrada">
					<div class="row">
						<button type="button" class="btn btn-success btn-raised top btn-sm pull-right"><i class="icon-excel"></i></button>
						<button type="button" class="btn btn-danger btn-raised top btn-sm pull-right"><i class="icon-pdf"></i></button>
					</div>
					<div class="row">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title detalle"><i class="icon-billete"></i> Efectivo</h3>
							</div>
							<div class="panel-body">
								<div class="table-responsive animated fadeIn">
									<table id="tabla_detalle_efectivo" class="display table table-hover dataTable" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>Folio</th>
												<th>Total de venta</th>
												<th>Tipo pago</th>
												<th>Usuario</th>
												<th>Fecha</th>
												<th>Hora</th>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title detalle"><i class="icon-tarjeta"></i> Tarjetas de crédito</h3>
							</div>
							<div class="panel-body">
								<div class="table-responsive animated fadeIn">
									<table id="tabla_detalle_tarjetas" class="display table table-hover dataTable" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>Folio</th>
												<th>Total de venta</th>
												<th>Tipo pago</th>
												<th>Usuario</th>
												<th>Fecha</th>
												<th>Hora</th>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title detalle"><i class="icon-ticket"></i> Vales internos</h3>
							</div>
							<div class="panel-body">
								<div class="table-responsive animated fadeIn">
									<table id="tabla_detalle_vales" class="display table table-hover dataTable" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>Folio</th>
												<th>Total de venta</th>
												<th>Tipo pago</th>
												<th>Usuario</th>
												<th>Fecha</th>
												<th>Hora</th>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title detalle"><i class="icon-cuenta-credito"></i> Abonos a cuentas de crédito</h3>
							</div>
							<div class="panel-body">
								<div class="table-responsive animated fadeIn">
									<table id="tabla_detalle_cuentas_credito" class="display table table-hover dataTable" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>Folio</th>
												<th>Franquiciatario</th>
												<th>Total de venta</th>
												<th>Tipo pago</th>
												<th>Usuario</th>
												<th>Fecha</th>
												<th>Hora</th>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title detalle"><i class="icon-cel"></i> Recárgas</h3>
							</div>
							<div class="panel-body">
								<div class="table-responsive animated fadeIn">
									<table id="tabla_detalle_cuentas_credito" class="display table table-hover dataTable" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>Fecha</th>
												<th>Número</th>
												<th>Cantidad</th>
												<th>Compañia</th>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script defer="defer">
$(function() {
	$('#consultar_reporte_ventas_sucursal').click(function(event) {
		$('#div_reporte_ventas_sucursal').show();
	});
	$('#tabla_reporte_ventas_sucursal').DataTable({
		"language": {
			"url":"<?php echo base_url('assets/js');?>/Spanish.json"
		}
	});
});
</script>