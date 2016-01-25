<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body" style="padding:15px 10px;">
				<ul class="nav nav-pills sin-padding nav-stacked">
					<li><a href="<?php echo base_url('reportes');?>"><i class="icon-billete"></i> Reporte de ventas</a></li>
					<li class="active"><a href="<?php echo base_url('reportes/comparativo');?>"><i class="icon-grafica"></i> Comparativo de Ventas</a></li>
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
				<h3 class="text-center">Comparativo Ventas por Mes</h3>
				<!--FECHAS-->
				<div class="row">
					<div class="col-lg-6">
						<div class="col-lg-8 centrada">
							<div class="form-group">
							<label class="control-label azul" for="txtFechaInicio">Fecha de Inicio</label>
							<i class="icon-calendario caledario"></i>
							<input class="form-control azul date" id="txtFechaInicio" type="text" required>
						</div>
						</div>
						
					</div>
					<div class="col-lg-6">
						<div class="col-lg-8 centrada">
							<div class="form-group">
							<label class="control-label azul" for="txtFechaInicio">Fecha de Inicio</label>
							<i class="icon-calendario caledario"></i>
							<input class="form-control azul date" id="txtFechaInicio" type="text" required>
						</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2 centrada">
						<button type="button" id="consultar_reporte_ventas_sucursal" class="btn btn-bella btn-raised top btn-xs pull-right"><i class="icon-buscar"></i> Consultar</button>
					</div>
				</div>
				<div class="col-lg-12" style="margin-top:20px;">
					<div class="animated fadeInUp" id="div_comparativo" style="display:none">
						<div class="row">
							<div class="col-lg-6">
								<div class="col-lg-12">
									<div class="table-responsive animated slideInUp">
										<table class="table-hover " cellspacing="0" width="100%">
											<thead>
												<tr>
													<th>Folio</th>
													<th>Total venta</th>
													<th>Fecha</th>
													<th>Usuario</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>F0001</td>
													<td>$125,000.25</td>
													<td>12/05/2015</td>
													<td>usuario1</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="total">
										<span>Total</span>
										<span class="label label-default">$750,00.52</span>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="dias1" class="control-label azul">Dias para promedio</label>
										<input type="text" id="dias1" class="form-control azul">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="total">
										<span>Total</span>
										<span class="label label-default">$0</span>
									</div>
								</div>
								

							</div><!--TERMINA PRIMERA COMPARACION-->
							<div class="col-lg-6">
								<div class="col-lg-12">
									<div class="table-responsive animated slideInUp">
										<table class="table-hover " cellspacing="0" width="100%">
											<thead>
												<tr>
													<th>Folio</th>
													<th>Total venta</th>
													<th>Fecha</th>
													<th>Usuario</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>F0001</td>
													<td>$125,000.25</td>
													<td>12/05/2015</td>
													<td>usuario1</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="total">
										<span>Total</span>
										<span class="label label-default">$750,00.52</span>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="dias1" class="control-label azul">Dias para promedio</label>
										<input type="text" id="dias1" class="form-control azul">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="total">
										<span>Total</span>
										<span class="label label-default">$0</span>
									</div>
								</div>
							</div><!--TERMINA SEGUNDA COMPARACION-->
						</div>
						<div class="row">
							<div class="col-lg-8 centrada">
								<div id="graf"></div>
								<button type="button" class="btn btn-success btn-raised top btn-sm pull-right"><i class="icon-excel"></i></button>
							<button type="button" class="btn btn-danger btn-raised top btn-sm pull-right"><i class="icon-pdf"></i></button>
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
	$(".date").datepicker( {
	    format: "mm-yyyy",
	    startView: "months", 
	    minViewMode: "months"
	});
	$('#consultar_reporte_ventas_sucursal').click(function(event) {
		$('#div_comparativo').show();
		var chart = $('#graf').highcharts({
	        chart: {
	            renderTo: 'container',
	            type: 'column',
	            margin: 75,
	            options3d: {
	                enabled: true,
	                alpha: 15,
	                beta: 15,
	                depth: 50,
	                viewDistance: 25
	            }
	        },
	         credits:{
	        	enabled:false
	        },
	         xAxis: {
	            categories: ['Enero 2016', 'Febrero 2016']
	        },
	        plotOptions: {
	            series: {
	                pointWidth: 60//width of the column bars irrespective of the chart size
	            }
	        },
	        yAxis: {
	        	labels:{
	        		formatter:function(){
	        			return '$'+this.value;
	        		}
	        	},
	            title: {
	                text: 'Ventas'
	            }
	        },
	        title: {
	            text: 'Comparativo Ventas'
	        },
	        series: [{
	            data: [75000,95000]
	        }]
	    });
	});
	$('#tabla_reporte_ventas_sucursal').DataTable({
		"language": {
			"url":"<?php echo base_url('assets/js');?>/Spanish.json"
		}
	});
});
</script>