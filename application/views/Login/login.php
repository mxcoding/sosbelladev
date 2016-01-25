<div class="container">
	<div class="row ">
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-9 centrada animated fadeIn">
			<div class="panel panel-default">
				<div class="panel-body">
					<h4 class="text-center">Iniciar Sesión</h4>
					<img class="logo img-responsive" src="<?php echo base_url('assets/img/sosbella.png');?>" alt="">
					<form class="form-horizontal" method="POST">
						<div class="form-group">
							<div class="col-lg-12">
								<label for="inputEmail" class="control-label azul">Usuario</label>
								<input type="text" class="form-control azul" id="inputUsuario" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12">
								<label for="inputPassword" class="control-label azul">Contraseña</label>
								<input type="password" class="form-control azul" id="inputPassword" required>
							</div> 
						</div>
						<div class="col-lg-6 centrada">
							<button type="submit" class="btn btn-morado btn-sm btn-raised btn-block top"><i class="icon-log-in"></i> Ingresar</button>
						</div>
						<p class="text-center" style="margin-top:20px;">
							Si no recuerdas tu contraseña comunicate con tu administrador 5551234567
						</p>
					</form>
				</div>
			</div>
			<div id="barra">
				<div class="progress">
					<div class="indeterminate"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<script defer="defer">
	$(function () {
		$('form').on('submit', function (e) {
			e.preventDefault();
			if(!hayMensaje())
			{
				$.ajax({
					url: "<?php echo base_url('login');?>",
					type: 'post',
					data: {usuario:$('#inputUsuario').val(),contra:$('#inputPassword').val()},
					dataType:'json',
					beforeSend:function(){
						$('#barra').fadeIn();
					},
					success: function (data) {
						if(data.respuesta){
							document.location.href="<?php echo base_url('administracion');?>"
						}
						else{
							var ends='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
							if(data.mensaje){
								mostrarMensaje(data.mensaje,'alerta');
							}
							else{
								if(data.count){
									mostrarMensaje('Usuario y/o contraseña incorrecta<br><br><p class="text-center">Te restan '+(5-data.count)+' intentos</p>','alerta');
								}
								else{
									mostrarMensaje('El usuario y/o la contraseña son incorrectos','alerta');
								}
							}
						}
					},
					error:function(x,h,r){
						console.log("Error al iniciar sesion "+x+h+r);
					},
					complete:function(){
						$('#barra').fadeOut();
					}
				});
			}
		});
	});
</script>