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
				<form id="frmEditarSucursal">
					<div class="row">
						<div class="container">
							<h3 class="text-center">Editar Sucursal</h3>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtClave">Clave</label>
								<input class="form-control azul" name="Clave" type="text" value="<?php echo $sucursal->Clave;?>" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtNombre">Nombre</label>
								<input class="form-control azul" name="Nombre" type="text" value="<?php echo $sucursal->Nombre;?>" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtDireccion">Direción</label>
								<input class="form-control azul" name="Direccion" type="text" value="<?php echo $sucursal->Direccion;?>">
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
							<label for="cbxFranquiciatario" class="control-label azul">Franquiciatario</label>
								<select name="IdFranquicia" class="form-control azul">
									<?php if($franquicias):?>
										<?php foreach($franquicias as $franquicia):?>
											<?php if($franquicia->IdFranquicia==$sucursal->IdFranquicia):?>
												<option value="<?php echo $franquicia->IdFranquicia;?>" selected><?php echo $franquicia->Nombre;?></option>	
											<?php else:?>
												<option value="<?php echo $franquicia->IdFranquiciatario;?>"><?php echo $franquicia->Nombre;?></option>
											<?php endif;?>
										<?php endforeach;?>
									<?php else:?>
										<option disabled selected>No hay franquiciatarios registrados</option>
									<?php endif;?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 centrada" style="text-align:center;">
							<button type="submit" class="btn btn-warning btn-raised btn-sm top"><i class="icon-editar"></i> Editar</button>
						</div>
						<input type="hidden" name="IdSucursal" value="<?php echo $sucursal->IdSucursal;?>">
						<input type="hidden" name="clave_anterior" value="<?php echo $sucursal->Clave;?>">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	$(function () {
		$("select").selectize();
		form=$('#frmEditarSucursal').submit(function(e){
			e.preventDefault();
			if(!hayMensaje())
			{
				$.ajax({
					url:"<?php echo base_url('sucursales/editarSucursal');?>",
					type: 'post',
					dataType:'json',
					data:form.serialize(),
					beforeSend:function(){
						$('#barra').fadeIn();
					},
					complete:function(){
						$('#barra').fadeOut();
					},
					success: function (data) {
						if(data.estatus)
						{
							mostrarMensaje(data.mensaje,'ok');
						}
						else
						{
							mostrarMensaje(data.mensaje,'alerta');
						}
					},
					error:function(x,h,r){
						$('#barra').fadeOut();
						console.log("Error al editar ")
					}
				});
			}
		});
	});
</script>