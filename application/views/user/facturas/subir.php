<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?php echo base_url('facturas');?>"><i class="icon-factura"></i>Mis Facturas</a></li>
					<li class="active"><a href="<?php echo base_url('facturas/subir');?>"><i class="icon-factura"></i>Subir Pagos</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="text-center">Subir Pago</h3>
				<div class="col-lg-8 centrada">
					<div class="col-lg-6 col-md-4 col-sm-6">
						<div class="form-group">
							<label class="control-label azul" for="txtFechaNac">Fecha</label>
							<i class="icon-calendario caledario"></i>
							<input class="form-control azul date" value="<?php echo date('d/m/Y'); ?>" id="txtFechaNac" type="text" required>
						</div>
					</div>
					<div class="col-lg-6 col-md-4 col-sm-6">
						<span class="btn btn-default btn-file top btn-raised btn-sm" style="margin-top:20px;">
							Seleccionar Archivos <i class="icon-imagen"></i> <input type="file" multiple>
						</span>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 centrada" style="text-align:center;">
						<button type="submit" class="btn btn-success btn-raised btn-sm top"><i class="icon-agregar"></i> Guardar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-sm-offset-3 col-md-9 col-md-offset-3 col-lg-10 col-lg-offset-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive animated slideInUp">
							<table id="tabla_facturas" class="display table table-hover dataTable" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Fecha</th>
										<th>Franquiciatario</th>
										<th>Archivos</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>12/05/2015</td>
										<td>Franquiciatario</td>
										<td>Factura,XML</td>
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
<script defer="defer">
	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
		numFiles = input.get(0).files ? input.get(0).files.length : 1,
		label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [numFiles, label]);
	});
	$(document).ready( function() {
		$('.btn-file :file').on('fileselect', function(event, numFiles, label) {
			console.log(numFiles);
			console.log(label);
		});
		$('#tabla_facturas').DataTable({
			"language": {
				"url":"<?php echo base_url('assets/js');?>/Spanish.json"
			}
		});
	});
</script>