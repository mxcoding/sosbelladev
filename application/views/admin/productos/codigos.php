<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?php echo base_url('productos');?>"><i class="icon-listar"></i> Listar</a></li>
					<li><a href="<?php echo base_url('productos/agregar');?>"><i class="icon-agregar"></i> Agregar</a></li>
					<li><a href="<?php echo base_url('productos/cantidades');?>"><i class="icon-cantidades"></i> Cantidades</a></li>
					<li class="active"><a href="<?php echo base_url('productos/imprimir_codigos');?>"><i class="icon-codigo"></i> Codigos</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="text-center">Imprimir Códigos</h3>
				<div class="row">
					<div class="col-lg-4">
						<div class="form-group">
					        <div class="radio radio-primary">
					        	<label><input type="radio" name="radios" id="todos" value="all" checked>Todos</label>
					        </div>
					        <div class="radio radio-primary">
					        	<label><input type="radio" name="radios" id="rdofechas" value="date">Rango de Fechas</label>
					        </div>
					    </div>
					</div>
					<div class="col-lg-8 animated slideInUp" id="cal" style="display:none">
						<div class="form-group">
					    	<div class="col-lg-6">
					    		<div class="form-group">
					    			<div class="form-group">
										<label class="control-label azul" for="txtFechaInicio">Fecha de Inicio</label>
										<i class="icon-calendario caledario"></i>
										<input class="form-control azul date" id="txtFechaInicio" type="text" required>
									</div>
					    		</div>
					    	</div>
					    	<div class="col-lg-6">
					    		<div class="form-group">
									<label class="control-label azul" for="txtFechaInicio">Fecha de Inicio</label>
									<i class="icon-calendario caledario"></i>
									<input class="form-control azul date" id="txtFechaInicio" type="text" required>
								</div>
					    	</div>
					    </div>
					</div>
					<div class="col-lg-2 centrada animated slideInUp">
						<button id="bus" class="btn btn-primary top btn-raised btn-sm"><i class="icon-buscar"></i> Buscar</button>
					</div>	
				</div>
				<div class="row" id="res" style="display:none;">
					<div class="col-lg-12">
						<div class="table-responsive animated slideInUp">
							<table id="tabla_productos" class="display table table-hover dataTable" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Código</th>
										<th>Descripción</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
						<div class="pull-right">
							<button class="btn btn-success btn-raised btn-xs top"><i class="icon-excel"></i> Exportar</button>
						</div>
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
	$('input[name=radios]').on('change',function(){
		if($('#res').is(':visible')){
			$('#res').fadeOut();
		}
		valor=$(this).val();
		if(valor=='all'){
			$('#cal').fadeOut();
		}
		else{
			$('#cal').fadeIn();
		}

	});
	$('#bus').click(function(){
		$('#res').fadeIn();
	});
</script>