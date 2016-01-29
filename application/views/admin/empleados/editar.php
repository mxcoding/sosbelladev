<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?php echo base_url('empleados');?>"><i class="icon-listar"></i> Listar</a></li>
					<li><a href="<?php echo base_url('empleados/agregar');?>"><i class="icon-agregar"></i> Agregar</a></li>
					<li class="active"><a href="#"><i class="icon-editar"></i> Editar</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body">
				<form id="frmEditarEmpleado">
					<div class="row animated fadeIn">
						<h3 class="text-center">Editar al empleado</h3>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtCodigo">Código</label>
								<input class="form-control azul" id="txtCodigo" name="codigo" value="<?php echo $empleado->Clave;?>" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtNombre">Nombre</label>
								<input class="form-control azul" id="txtNombre" name="nombre" value="<?php echo $empleado->Nombre;?>" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtApellidos">Apellidos</label>
								<input class="form-control azul" id="txtApellidos" name="apellidos" value="<?php echo $empleado->Apellidos;?>" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtFechaNac">Fecha de Nacimiento</label>
								<i class="icon-calendario caledario"></i>
								<input class="form-control azul date" id="txtFechaNac" value="<?php echo $empleado->FechaNacimiento;?>" name="fecha_nacimiento" type="text" required="">
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtDireccion">Dirección</label>
								<input class="form-control azul" id="txtDireccion" name="direccion" value="<?php echo $empleado->Direccion;?>" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtEmail">Correo Electrónico</label>
								<i class="icon-arroba"></i>
								<input class="form-control azul" id="txtEmail" name="email" value="<?php echo $empleado->Mail;?>" type="email" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtTelefono">Teléfono</label>
								<i class="icon-telefono"></i>
								<input class="form-control azul" id="txtTelefono" name="telefono" value="<?php echo $empleado->Telefono;?>" title="Ingresa un telefono válido" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtCelular">Celular</label>
								<i class="icon-cel"></i>
								<input class="form-control azul" id="txtCelular" name="celular" value="<?php echo $empleado->Celular;?>" title="Ingresa un telefono válido" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtSalario">Salario por hora</label>
								<i class="icon-dolar"></i>
							  	<input type="number" min="1" id="txtSalario" name="salario_hora" value="<?php echo $empleado->SueldoHora;?>" class="form-control azul" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtTiempoComida">Tiempo Comida</label>
								<i class="icon-reloj"></i>
								<input class="form-control azul" id="txtTiempoComida" name="tiempo_comida" type="number" value="<?php echo $empleado->TiempoComida;?>" min="1" data-toggle="tooltip" data-placement="bottom" title="Tiempo en minutos" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group input-group reloj">
								<label class="control-label azul">Hora Entrada</label>
							    <input type="text" class="form-control azul" name="hora_entrada" value="<?php echo $empleado->HoraEntrada;?>">
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group input-group reloj">
								<label class="control-label azul">Hora Salida</label>
							    <input type="text" class="form-control azul" name="hora_salida" value="<?php echo $empleado->HoraSalida;?>">
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
									<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
										<img src="<?php echo base_url('assets/img/empleados/').'/'.$empleado->NomImagen;?>" alt="...">
									</div>
									<div class="text-center">
										<span class="btn btn-default btn-file btn-raised btn-xs top"><span class="fileinput-new"><i class="icon-foto"></i> Seleccionar</span><span class="fileinput-exists"><i class="icon-regresar"></i> Cambiar</span><input class="subir" type="file" name="foto"></span>
										<a href="#" class="btn btn-default fileinput-exists btn-raised btn-xs top" data-dismiss="fileinput"><i class="icon-cerrar"></i> Quitar</a>
									</div>
								</div>
								<input type="hidden" name="IdPersona" value="<?php echo $empleado->IdPersona;?>">
								<input type="hidden" name="IdEmpleado" value="<?php echo $empleado->IdEmpleado;?>">
								<input type="hidden" name="foto_antigua" value="<?php echo $empleado->NomImagen;?>">
								<input type="hidden" name="codigo_anterior" value="<?php echo $empleado->Clave;?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 centrada" style="text-align:center;">
							<button type="submit" class="btn btn-warning btn-raised btn-sm top"><i class="icon-editar"></i> Editar</button>
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
	function mostarMensaje(texto,tipo){
		var _template;
		switch(tipo){
			case 'ok':
				_template='<div class="noty_message ok"><i class="icon-ok"></i><span class="noty_text"></span></div>';
			break;
			case 'error':
				_template='<div class="noty_message error"><i class="icon-error"></i><span class="noty_text"></span></div>';
			break;
			case 'alerta':
				_template='<div class="noty_message alerta"><i class="icon-exclamacion"></i><span class="noty_text"></span></div>';
			break;
		}
		var n = noty({
			layout:'center',
			theme:'relax',
			text: texto,
			type:'alert',
			modal:'true',
			killer: true,
			template: _template,
			animation: {
				open: 'animated flipInX', // Animate.css class names
				close: 'animated flipOutX',
				easing: 'swing',
				speed: 500 // opening & closing animation speed
			},
			closeWith: ['click','backdrop']
		});
	}
	$(function () {
		$('.fileinput').fileinput({
			uploadtype: 'image'
		});
		$('input[id=txtTiempoComida]').tooltip({'trigger':'focus'});
		var form=$('#frmEditarEmpleado');
		form.submit(function(event) {
			event.preventDefault();
			jQuery.ajax({
				url: "<?php echo base_url('empleados/editarEmpleado');?>",
				type: 'POST',
				data: form.serialize()+"&foto="+$('.fileinput-preview img').attr('src'),
				dataType:'json',
				beforeSend:function(){
					$('#barra').fadeIn();
				},
				success: function(data, textStatus, xhr) {
					$('#barra').fadeOut();
					if(data.mensaje)
					{
						mostarMensaje(data.mensaje,'ok')
					}
					else
					if(data)
					{
						mostarMensaje('Cliente agregado correctamente','ok');
					}
					else
					{
						mostarMensaje('El codigo ya existe, verifíquelo','alerta');
					}
				},
				error: function(xhr, textStatus, errorThrown) {
					console.log('Error al solicitar la insercion a la tabla empleados');
				}
			});
		});
	});
</script>