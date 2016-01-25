<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?php echo base_url('empleados');?>"><i class="icon-listar"></i> Listar</a></li>
					<li class="active"><a href="<?php echo base_url('empleados/agregar');?>"><i class="icon-agregar"></i> Agregar</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body">
				<form id="frmAgregarEmpleado">
					<div class="row animated fadeIn">
						<h3 class="text-center">Agregar Empleado</h3>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtCodigo">Código</label>
								<input class="form-control azul" id="txtCodigo" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtNombre">Nombre</label>
								<input class="form-control azul" id="txtNombre" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtApellidoP">Apellido Paterno</label>
								<input class="form-control azul" id="txtApellidoP" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtApellidoM">Apellido Materno</label>
								<input class="form-control azul" id="txtApellidoM" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtFechaNac">Fecha de Nacimiento</label>
								<i class="icon-calendario caledario"></i>
								<input class="form-control azul date" id="txtFechaNac" type="text" required="">
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtDireccion">Dirección</label>
								<input class="form-control azul" id="txtDireccion" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtEmail">Correo Electrónico</label>
								<input class="form-control azul" id="txtEmail" type="email" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtTelefono">Teléfono</label>
								<input class="form-control azul" id="txtTelefono" type="phone" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtCelular">Celular</label>
								<input class="form-control azul" id="txtCelular" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtSalario">Salario por hora</label>
								<input class="form-control azul" id="txtSalario" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtTiempoComida">Tiempo Comida</label>
								<input class="form-control azul" id="txtTiempoComida" type="text" data-toggle="tooltip" data-placement="bottom" title="Tiempo en minutos" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtUsuario">Usuario</label>
								<input class="form-control azul" id="txtUsuario" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtpass">Contraseña</label>
								<input class="form-control azul" id="txtpass" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtrepass">Repetir Contraseña</label>
								<input class="form-control azul" id="txtrepass" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label for="cbxPerfil" class="control-label azul">Perfil</label>
								<select id="cbxPerfil" class="form-control azul">
									<option value="">Cajero</option>
									<option value="">Almacen</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group input-group reloj">
								<label class="control-label azul">Hora Entrada</label>
							    <input type="text" class="form-control azul">
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group input-group reloj">
								<label class="control-label azul">Hora Salida</label>
							    <input type="text" class="form-control azul">
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group input-group">
								<label class="control-label azul">Sucursal</label>
							    <select class="form-control azul">
							    	<option value="" disabled>Seleccione una sucursal</option>
							    </select>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
									<div>
										<span class="btn btn-default btn-file btn-raised btn-xs"><span class="fileinput-new">Seleccionar</span><span class="fileinput-exists">Cambiar</span><input type="file" name="..."></span>
										<a href="#" class="btn btn-default fileinput-exists btn-raised btn-xs" data-dismiss="fileinput">Quitar</a>
									</div>
								</div>
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
<script>
$(function () {
	$('input[id=txtTiempoComida]').tooltip({'trigger':'focus','tittle':'dskldklfk'});
});
</script>