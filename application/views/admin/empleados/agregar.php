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
				<form id="frmAgregarEmpleado" enctype="multipart/form-data">
					<div class="row animated fadeIn">
						<h3 class="text-center">Agregar Empleado</h3>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtCodigo">Código</label>
								<input class="form-control azul numeric" id="txtCodigo" name="codigo" type="text" maxlength="3" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtNombre">Nombre</label>
								<input class="form-control azul" id="txtNombre" name="nombre" type="text" maxlength="30" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtApellidos">Apellidos</label>
								<input class="form-control azul" id="txtApellidos" name="apellidos" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtFechaNac">Fecha de Nacimiento</label>
								<i class="icon-calendario caledario"></i>
								<input class="form-control azul date" id="txtFechaNac" value="<?php echo date('Y/m/d');?>" name="fecha_nacimiento" type="text">
							</div>
						</div>
						<div class="col-lg-6 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtDireccion">Dirección</label>
								<input class="form-control azul" id="txtDireccion" name="direccion" type="text" maxlength="100">
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtEmail">Correo Electrónico</label>
								<i class="icon-arroba"></i>
								<input class="form-control azul" id="txtEmail" name="email" type="email">
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtTelefono">Teléfono</label>
								<i class="icon-telefono"></i>
								<input class="form-control azul" id="txtTelefono" name="telefono" title="Ingresa un telefono válido" type="text">
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtCelular">Celular</label>
								<i class="icon-cel"></i>
								<input class="form-control azul" id="txtCelular" name="celular" title="Ingresa un telefono válido" type="text">
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtSalario">Salario por hora</label>
								<i class="icon-dolar"></i>
							  	<input type="number" min="1" id="txtSalario" name="salario_hora" class="form-control azul" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtTiempoComida">Tiempo Comida</label>
								<i class="icon-reloj"></i>
								<input class="form-control azul" id="txtTiempoComida" name="tiempo_comida" type="number" min="1" data-toggle="tooltip" data-placement="bottom" title="Tiempo en minutos" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group input-group reloj">
								<label class="control-label azul">Hora Entrada</label>
							    <input type="text" class="form-control azul" name="hora_entrada">
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group input-group reloj">
								<label class="control-label azul">Hora Salida</label>
							    <input type="text" class="form-control azul" name="hora_salida">
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group input-group">
								<label class="control-label azul">Sucursal</label>
							    <select class="form-control azul" name="sucursal">
							    	<option value="" disabled>Seleccione una sucursal</option>
							    </select>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
									<div class="text-center">
										<span class="btn btn-default btn-file btn-raised btn-xs top"><span class="fileinput-new"><i class="icon-foto"></i> Seleccionar</span><span class="fileinput-exists"><i class="icon-regresar"></i> Cambiar</span><input class="subir" type="file" name="foto"></span>
										<a href="#" class="btn btn-default fileinput-exists btn-raised btn-xs top" data-dismiss="fileinput"><i class="icon-cerrar"></i> Quitar</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 centrada" style="text-align:center;">
							<button type="submit" class="btn btn-success btn-raised btn-sm top"><i class="icon-agregar"></i> Agregar</button>
							<div id="barra">
								<div class="progress">
									<div class="indeterminate"></div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</div>
<script>
	$(window).keydown(function(event){
		if( (event.keyCode == 13)) {
			return false;
		}
	});
	$(function () {
		$('.fileinput').fileinput({
			uploadtype: 'image'
		});
		
		$('input[id=txtTiempoComida]').tooltip({'trigger':'focus'});
		var form=$('#frmAgregarEmpleado');
		form.submit(function(event) {
			event.preventDefault();
			jQuery.ajax({
				url: "<?php echo base_url('empleados/agregarEmpleado');?>",
				type: 'POST',
				data: form.serialize()+"&foto="+$('.fileinput-preview img').attr('src'),
				dataType:'json',
				beforeSend:function(){
					$('#barra').fadeIn();
				},
				success: function(data, textStatus, xhr) {
					$('#barra').fadeOut();
					if(data){
						mostrarMensaje('Empleado agregado correctamente','ok')
					}
					else{
						mostrarMensaje('El codigo ya existe, verifíquelo','alerta');
					}
				},
				error: function(xhr, textStatus, errorThrown) {
					console.log('Error al solicitar la insercion a la tabla empleados');
				}
			});
		});
	});
</script>