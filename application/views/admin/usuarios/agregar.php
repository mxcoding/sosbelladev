<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?php echo base_url('usuarios');?>"><i class="icon-listar"></i> Listar</a></li>
					<li class="active"><a href="<?php echo base_url('usuarios/agregar');?>"><i class="icon-agregar"></i> Agregar</a></li>
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
							<h3 class="text-center">Agregar Usuario</h3>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtUsuario">Nombre de Usuario</label>
								<input class="form-control azul" id="txtUsuario" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtContraseña">Contraseña</label>
								<input class="form-control azul" id="txtContraseña" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtRContraseña">Repetir Contraseña</label>
								<input class="form-control azul" id="txtRContraseña" type="pass" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label for="cbxTipoUsuario" class="control-label azul">Tipo de Usuario</label>
								<select id="cbxTipoUsuario" class="form-control azul">
									<option value="" disabled selected>Seleccione el tipo de usuario</option>
									<option>Empleado</option>
									<option>Franquiciatario</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label for="cbxNombre" class="control-label azul">Nombre</label>
								<select id="cbxNombre" class="form-control azul">
									<option value="" disabled selected>Seleccione el nombre de usuario</option>
									<option>Juan Carlos Valenzuela López</option>
									<option>Raúl Jiménez Pérez</option>
									<option>Javier Hernández Márquez</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label for="cbxPerfil" class="control-label azul">Rol</label>
								<select id="cbxPerfil" class="form-control azul">
									<option value="" disabled selected>Seleccione un rol</option>
									<option>Administrador</option>
									<option>Vendedor</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6" id="div_cod_vendedor" style="display:none;">
							<div class="form-group">
								<label for="txtCodigoVendedor" class="control-label azul">Código Vendedor</label>
								<input class="form-control azul" id="txtCodigoVendedor" type="text" required>
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
		$('#cbxPerfil').change(function(event) {
			var perfil=$('#cbxPerfil option:selected').text();
			if(perfil=='Vendedor'){
				$('#div_cod_vendedor').show().addClass('animated flipInX').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(event) {
					$(this).removeClass('animated flipInX');
				});
			}
			else{
				$('#div_cod_vendedor').fadeOut();
			}
		});;
	});
</script>