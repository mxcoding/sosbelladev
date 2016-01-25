<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?php echo base_url('sucursales');?>"><i class="icon-listar"></i> Listar</a></li>
					<li><a href="<?php echo base_url('sucursales/agregar');?>"><i class="icon-agregar"></i> Agregar</a></li>
					<li class="active"><a><i class="icon-editar"></i> Editar</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body animated fadeIn">
				<form id="frmAgregarEmpleado">
					<div class="row">
						<div class="container">
							<h3 class="text-center">Editar Sucursal</h3>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtClave">Clave</label>
								<input class="form-control azul" id="txtClave" type="text" value="SUC001" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtNombre">Nombre</label>
								<input class="form-control azul" id="txtNombre" type="text" value="Sucursal Tasqueña" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtDireccion">Direción</label>
								<input class="form-control azul" id="txtDireccion" type="text" value="Metro Tasqueña s/n" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
							<label for="cbxFranquiciatario" class="control-label azul">Franquiciatario</label>
								<select id="cbxFranquiciatario" class="form-control azul">
									<option selected>Juan Ramón Saenz</option>
									<option>Pedro García Ramirez</option>
									<option>Josue Valencia Hernández</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 centrada" style="text-align:center;">
							<button type="submit" class="btn btn-success btn-raised btn-sm top"><i class="icon-agregar"></i> Agregar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>