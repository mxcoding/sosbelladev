<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="container" style="margin:0;">
				<a href="<?php echo base_url('administracion');?>" id="btn-carrito" class="btn btn-default btn-raised btn-sm top pull-left"><i class="icon-inicio"></i> Menú Principal</a>
				<a href="<?php echo base_url('compras/carrito');?>" class="btn btn-default btn-sm btn-raised pull-right"><span class="badge"><?php echo $this->cart->total_items();?></span><i class="icon-carrito"></i> Ver Carrito</a>			
			</div>
			<div class="container" style="margin:0;">
				<a class="btn btn-default btn-raised btn-xs pull-left" href="<?php echo base_url('compras');?>"><i class="icon-carrito"></i> Seguir Comprando</a>
			</div>
			<div class="col-lg-8 col-lg-offset-2">
				<div class="col-lg-5 col-md-6 col-sm-5 col-xs-12">
					<a class="galeria" href="<?php echo base_url('assets/img/productos/pulsera.jpg');?>" rel="galeria">
						<img class="img-responsive" src="<?php echo base_url('assets/img/productos/pulsera.jpg');?>" alt="">	
					</a>
					<div class="row thumb">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
							<a class="galeria" href="<?php echo base_url('assets/img/productos/pulsera.jpg');?>" rel="galeria">
								<img class="mini-primera img-responsive" src="<?php echo base_url('assets/img/productos/pulsera.jpg');?>" alt="">	
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
							<a class="galeria" href="<?php echo base_url('assets/img/productos/pulsera.jpg');?>" rel="galeria">
								<img class="img-responsive" src="<?php echo base_url('assets/img/productos/pulsera.jpg');?>" alt="">	
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
							<a class="galeria" href="<?php echo base_url('assets/img/productos/pulsera.jpg');?>" rel="galeria">
								<img class="mini-segunda img-responsive" src="<?php echo base_url('assets/img/productos/pulsera.jpg');?>" alt="">	
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
					<h3>Producto Fulano</h3>
					<p class="big">$75.00</p>
					<p clasS="justificado">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Colores Disponibles</p>
						<p>
							<span class="color" style="background-color:red;"></span>
							<span class="color" style="background-color:green;"></span>
							<span class="color" style="background-color:yellow;"></span>
						</p>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label class="control-label azul" for="cantidad">Cantidad</label>
									<input type="number" id="cantidad" class="form-control azul" min="1">
								</div>
								<div class="form-group">
									<label class="control-label azul" for="comentario">Comentario</label>
									<input type="text" id="comentario" class="form-control azul">
								</div>
							</div>
							<div class="col-lg-6">
								<button type="button" class="btn btn-azul btn-raised btn-sm"><i class="icon-agregar-carrito"></i> Agregar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>