<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?php echo base_url('categorias');?>"><i class="icon-listar"></i> Listar</a></li>
					<li class="active"><a href="<?php echo base_url('categorias/agregar');?>"><i class="icon-agregar"></i> Agregar</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body animated fadeIn">
				<form id="frmAgregarCategoria">
					<div class="row">
						<div class="container">
							<h3 class="text-center">Agregar Categoria</h3>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="form-group">
								<label for="cbxFamilia" class="control-label azul">Familia</label>
								<select id="cbxFamilia" name="familia" class="form-control azul" required>
									<?php if($familias):?>
										<option value="" selected disabled>Selecciona una familia</option>
										<?php foreach($familias as $familia):?>
											<option value="<?php echo $familia->IdFamilia?>"><?php echo $familia->Nombre;?></option>
										<?php endforeach;?>
									<?php else:?>
										<option value="" selected disabled>No hay familias registradas</option>
									<?php endif;?>
								</select>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtNombre">Nombre</label>
								<input class="form-control azul" id="txtNombre" name="nombre" type="text" required>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtDescripcion">Descripcion</label>
								<input class="form-control azul" id="txtDescripcion" name="descripcion" type="text" required>
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
		var form=$('#frmAgregarCategoria').submit(function(event) {
			event.preventDefault();
			if(!hayMensaje()){
				jQuery.ajax({
					url: '<?php echo base_url("categorias/agregarCategoria");?>',
					type: 'POST',
					dataType: 'json',
					data:form.serialize(),
					beforeSend:function(){
						$('#barra').fadeIn();
					},
					complete: function(xhr, textStatus) {
						$('#barra').fadeOut();
					},
					success: function(data, textStatus, xhr) {
						if(data){
							mostrarMensaje('Categoria agregada correctamente','ok');
						}
						else{
							mostrarMensaje('Ha ocurrido un problema','error');	
						}
					},
					error: function(xhr, textStatus, errorThrown) {
						console.log("Error al agregar categoria");
					}
				});
			}
		});
		$("select").selectize();
	});
</script>