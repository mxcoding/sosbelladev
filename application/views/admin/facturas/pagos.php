<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?php echo base_url('facturas');?>"><i class="icon-factura"></i> Facturas</a></li>
					<li class="active"><a href="<?php echo base_url('facturas/pagos');?>"><i class="icon-factura"></i> Pagos</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>

				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="text-center">Consultar Pago</h3>
				<div class="row">
					<div class="col-lg-4 centrada">
						<div class="form-group">
							<label for="cbxFranquiciatario" class="control-label azul">Franquiciatario</label>
							<select id="cbxFranquiciatario" class="form-control azul">
								<option value="" disabled selected>Seleccione un Franquiciatario</option>
								<option>Juan Ramón Saenz</option>
								<option>Pedro García Ramirez</option>
								<option>Josue Valencia Hernández</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row"></div>
				<div class="row animated fadeInUp" id="div_pagos" style="display:none;">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<div class="archivo-pdf">
							<i class="icon-imagen"></i>
							<label class="text-center">12/11/2015 Pago001</label>
							<button class="btn btn-danger top btn-xs btn-raised"><i class="icon-eliminar"></i></button>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<div class="archivo-pdf">
							<i class="icon-imagen"></i>
							<label class="text-center">12/11/2015 Pago001</label>
							<button class="btn btn-danger top btn-xs btn-raised"><i class="icon-eliminar"></i></button>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<div class="archivo-pdf">
							<i class="icon-imagen"></i>
							<label class="text-center">12/11/2015 Pago001</label>
							<button class="btn btn-danger top btn-xs btn-raised"><i class="icon-eliminar"></i></button>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<div class="archivo-pdf">
							<i class="icon-imagen"></i>
							<label class="text-center">12/11/2015 Pago001</label>
							<button class="btn btn-danger top btn-xs btn-raised"><i class="icon-eliminar"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(function() {
		$('#cbxFranquiciatario').change(function(event) {
			$('#div_pagos').show();
		});
	});
</script>