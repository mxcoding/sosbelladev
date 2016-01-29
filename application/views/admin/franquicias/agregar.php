<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?php echo base_url('franquicias');?>"><i class="icon-listar"></i> Listar</a></li>
					<li class="active"><a href="<?php echo base_url('franquicias/agregar');?>"><i class="icon-agregar"></i> Agregar</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body animated fadeIn">
				<form id="frmAgregarFranquicia">
					<div class="row">
						<div class="container">
							<h3 class="text-center">Agregar Franquicia</h3>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtClave">Clave</label>
								<input class="form-control azul" name="clave" id="txtClave" type="text" required>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtNombre">Nombre</label>
								<input class="form-control azul" name="nombre" id="txtNombre" type="text" required>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="form-group">
								<label for="cbxFranquiciatario" class="control-label azul">Franquiciatario</label>
								<select id="cbxFranquiciatario" name="franquiciatario" class="form-control azul" required>
									<?php if($franquiciatarios):?>
										<?php foreach($franquiciatarios as $franquiciatario):?>
											<option value="<?php echo $franquiciatario->IdFranquiciatario?>"><?php echo $franquiciatario->Nombre." ".$franquiciatario->Apellidos;?></option>
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
	$(function () {
		$("select").prop("selectedIndex", -1).selectize();
		form=$('#frmAgregarFranquicia').submit(function(e){
			e.preventDefault();
			if(!hayMensaje())
			{
				$.ajax({
					url:"<?php echo base_url('franquicias/agregarFranquicia');?>",
					type: 'post',
					data:form.serialize(),
					dataType:'json',
					beforeSend:function(){
						$('#barra').fadeIn();
					},
					complete:function(){
						$('#barra').fadeOut();
					},
					success:function(data){
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
						console.log("Error al agregar la franquicia "+x+h+r);
					}
				});
			}
		});
	});
</script>