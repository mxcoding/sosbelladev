<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body" style="padding:15px 10px;">
				<ul class="nav nav-pills sin-padding nav-stacked">
					<li><a href="<?php echo base_url('reportes');?>"><i class="icon-factura-1"></i> Reporte ventas sucursales</a></li>
					<li><a href="<?php echo base_url('reportes/sosbella');?>"><i class="icon-factura-1"></i> Reporte ventas Sosbella</a></li>
					<li><a href="<?php echo base_url('reportes/mas_vendidos');?>"><i class="icon-estrella-negra"></i> Reporte más vendidos</a></li>
					<li><a href="<?php echo base_url('reportes/cortes_caja');?>"><i class="icon-corte-caja"></i> Reporte cortes caja</a></li>
					<li><a href="<?php echo base_url('reportes/nomina');?>"><i class="icon-billete"></i> Reporte de Pagos a Empleados</a></li>
					<li class="active"><a href="<?php echo base_url('reportes/asistencia');?>"><i class="icon-checklist"></i> Reporte de Asistencia</a></li>
					<li><a href="<?php echo base_url('reportes/vendedores');?>"><i class="icon-vendedor"></i> Reporte de Vendedores</a></li>
					<li><a href="<?php echo base_url('reportes/comparativo');?>"><i class="icon-grafica"></i> Comparativo Ventas</a></li>
					<li><a href="<?php echo base_url('reportes/obsoletos');?>"><i class="icon-obsoleto"></i> Reporte de Productos Descontinuados</a></li>
					<li><a href="<?php echo base_url('reportes/no_inventariable');?>"><i class="icon-no-inventariado"></i> Reporte de Productos Descontinuados sin Existencia</a></li>
					<li><a href="<?php echo base_url('reportes/minimos');?>"><i class="icon-minimos"></i> Reporte de Productos mínimos por Sucursal</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body animated fadeIn">
				<h3 class="text-center">Reporte de Asistencia Empleados</h3>
					<div class="col-lg-10 centrada">
						<div class="row">
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
							<div class="col-lg-2">
								<div class="form-group">
							        <div class="radio radio-primary">
							        	<label><input type="radio" name="radios" id="todos" value="all" checked>Todas</label>
							        </div>
							        <div class="radio radio-primary">
							        	<label><input type="radio" name="radios" id="rdofechas" value="suc">Sucursal</label>
							        </div>
							    </div>
							</div>
							<div class="col-lg-4" id="cbx" style="display:none;">
								<div class="form-group">
									<label class="azul">Sucursal</label>
							        <select class="form-control azul">
							        	<option>Sucursal 1</option>
							        </select>
							    </div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2 centrada">
								<button type="button" id="consultar_reporte_ventas_sucursal" class="btn btn-bella btn-raised top btn-sm pull-right"><i class="icon-buscar"></i> Consultar</button>
							</div>
						</div>
						<div class="row animated fadeInUp" style="display:none;" id="div_reporte_ventas_sucursal">
							<div class="col-lg-12">
								<div class="table-responsive animated slideInUp">
									<table id="tabla_reporte_asistencia_todos" style="display:none;" class="display table table-hover dataTable" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>Sucursal</th>
												<th>Clave</th>
												<th>Empleado</th>
												<th>Fecha</th>
												<th>Entrada</th>
												<th>Comida Inicio</th>
												<th>Comida Final</th>
												<th>Salida</th>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="table-responsive animated slideInUp">
									<table id="tabla_reporte_asistencia_sucursal" style="display:none;" class="display table table-hover dataTable" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>Clave</th>
												<th>Empleado</th>
												<th>Fecha</th>
												<th>Entrada</th>
												<th>Comida Inicio</th>
												<th>Comida Final</th>
												<th>Salida</th>
											</tr>
										</thead>
										<tbody>
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
<script defer="defer">
$(function() {
	$('#consultar_reporte_ventas_sucursal').click(function(event) {
		op=$('input[name="radios"]:checked').val();
		if(op=='all'){
			if($('#tabla_reporte_asistencia_sucursal').is(':visible')){
				$('#tabla_reporte_asistencia_sucursal').fadeOut();
			}
			$('#tabla_reporte_asistencia_todos').fadeIn();
		}
		else{
			if($('#tabla_reporte_asistencia_todos').is(':visible')){
				$('#tabla_reporte_asistencia_todos').fadeOut();
			}
			$('#tabla_reporte_asistencia_sucursal').fadeIn();
		}
		$('#div_reporte_ventas_sucursal').show();
	});
	$('#tabla_reporte_ventas_sucursal').DataTable({
		"language": {
			"url":"<?php echo base_url('assets/js');?>/Spanish.json"
		}
	});
	


	
});
</script>