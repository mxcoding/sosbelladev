<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body" style="padding:15px 10px;">
				<ul class="nav nav-pills sin-padding nav-stacked">
					<li class="active"><a href="<?php echo base_url('reportes');?>"><i class="icon-billete"></i> Reporte de ventas</a></li>
					<li><a href="<?php echo base_url('reportes/comparativo');?>"><i class="icon-grafica"></i> Comparativo de Ventas</a></li>
					<li><a href="<?php echo base_url('reportes/nomina');?>"><i class="icon-billete"></i> Reporte de Nómina</a></li>
					<li><a href="<?php echo base_url('reportes/asistencia');?>"><i class="icon-checklist"></i> Reporte de Asistencia</a></li>
					<li><a href="<?php echo base_url('reportes/vendedores');?>"><i class="icon-vendedor"></i> Reporte de Vendedores</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body animated fadeIn">
				<h3 class="text-center">Reporte de Ventas</h3>
					<div class="col-lg-10 centrada">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label class="control-label azul" for="txtFechaInicio">Fecha de Inicio</label>
									<i class="icon-calendario caledario"></i>
									<input class="form-control azul date" id="txtFechaInicio" type="text" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="control-label azul" for="txtFechaTermino">Fecha de Termino</label>
									<i class="icon-calendario caledario"></i>
									<input class="form-control azul date" id="txtFechaTermino" type="text" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2 centrada">
								<button type="button" id="consultar_reporte_ventas_sosbella" class="btn btn-bella btn-raised top btn-sm pull-right"><i class="icon-buscar"></i> Consultar</button>
							</div>
						</div>
						<div class="row animated fadeInUp" style="display:none;" id="div_reporte_ventas_sosbella">
							<div class="col-lg-12">
								<div class="table-responsive animated slideInUp">
									<table id="tabla_reporte_ventas_sosbella" class="display table table-hover dataTable" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>Folio</th>
												<th>Total Venta</th>
												<th>Fecha</th>
												<th>Hora</th>
												<th>Usuario</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>FFOLIOXBZ</td>
												<td>$400,000.00</td>
												<td>12/05/2015</td>
												<td>05:54</td>
												<td>Usuario 001</td>
											</tr>
											<tr>
												<td>FFOLIOXBZ</td>
												<td>$400,000.00</td>
												<td>12/05/2015</td>
												<td>05:54</td>
												<td>Usuario 001</td>
											</tr>
											<tr>
												<td>FFOLIOXBZ</td>
												<td>$400,000.00</td>
												<td>12/05/2015</td>
												<td>05:54</td>
												<td>Usuario 001</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="total">
									<span>Total</span>
									<span class="label label-default">$1,200,000.00</span>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-9 centrada">
									<div class="col-lg-3">
										<div class="form-group">
											<label for="txtdias" class="control-label azul">Dias para promedio</label>
											<input type="text" class="form-control azul text-center" id="txtdias">
										</div>
									</div>
									<div class="col-lg-9">
										<div class="total">
											<span>PROMEDIO TOTAL</span>
											<span class="label label-default">$750,00.52</span>
										</div>
									</div>
									
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
<script defer="defer">
$(function() {
	$('#consultar_reporte_ventas_sosbella').click(function(event) {
		$('#div_reporte_ventas_sosbella').show();
	});
	$('#tabla_reporte_ventas_sosbella').DataTable({
		"language": {
			"url":"<?php echo base_url('assets/js');?>/Spanish.json"
		}
	});
});
</script>