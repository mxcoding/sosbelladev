<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?php echo base_url('empleados');?>"><i class="icon-listar"></i> Listar</a></li>
					<li><a href="<?php echo base_url('empleados/agregar');?>"><i class="icon-agregar"></i> Agregar</a></li>
					<li class="active"><a><i class="icon-editar"></i> Editar</a></li>
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
						<h3 class="text-center">Editar Empleado</h3>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtCodigo">Código</label>
								<input class="form-control azul" id="txtCodigo" type="text" value="EMP001" required />
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtNombre">Nombre</label>
								<input class="form-control azul" id="txtNombre" type="text" value="Juan" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtApellidoP">Apellido Paterno</label>
								<input class="form-control azul" id="txtApellidoP" type="text" value="Martínez" required />
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtApellidoM">Apellido Materno</label>
								<input class="form-control azul" id="txtApellidoM" type="text" value="Pérez" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtFechaNac">Fecha de Nacimiento</label>
								<input class="form-control azul" id="txtFechaNac" type="text" value="12/05/1993" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtDireccion">Dirección</label>
								<input class="form-control azul" id="txtDireccion" type="text" value="Calle Centro #8 Col Ecatepec" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtEmail">Correo Electrónico</label>
								<input class="form-control azul" id="txtEmail" type="email" value="juan@web.com" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtTelefono">Teléfono</label>
								<input class="form-control azul" id="txtTelefono" type="phone" value="55555555" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtCelular">Celular</label>
								<input class="form-control azul" id="txtCelular" type="text" value="044555555555" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtSalario">Salario por hora</label>
								<input class="form-control azul" id="txtSalario" type="text" value="$5,000" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtcomida">Timpo Comida</label>
								<input class="form-control azul" id="txtcomida" type="text" value="50 min" required>
							</div>
							
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtUsuario">Usuario</label>
								<input class="form-control azul" id="txtUsuario" type="text" value="usuario" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtpass">Contraseña</label>
								<input class="form-control azul" id="txtpass" type="text" value="1234" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtrepass">Repetir Contraseña</label>
								<input class="form-control azul" id="txtrepass" type="text" value="1234" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label for="cbxPerfil" class="control-label azul">Perfil</label>
								<select id="cbxPerfil" class="form-control azul">
									<option value="" selected>Cajero</option>
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
									<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
										<img src="http://lorempixel.com/200/200/people/" data-src="http://lorempixel.com/200/200/people/" alt="...">
									</div>
									<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
									<div>
										<span class="btn btn-default btn-file btn-raised btn-xs"><span class="fileinput-new">Seleccionar</span><span class="fileinput-exists">Cambiar</span><input type="file" name="..."></span>
										<a href="#" class="btn btn-default btn-raised btn-xs fileinput-exists" data-dismiss="fileinput">Quitar</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 centrada" style="text-align:center;">
								<button type="submit" class="btn btn-warning btn-raised btn-sm top"><i class="icon-editar"></i> Editar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script>
	$(function () {
		$('#txtFechaNac').datepicker({
			lenguage:"es",
			autoclose:true
		});
		$('input[id=txtTiempoComida]').tooltip({'trigger':'focus','tittle':'dskldklfk'});
	});
	</script>