<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
                    <li><a href="<?php echo base_url('productos');?>"><i class="icon-listar"></i> Listar</a></li>
                    <li><a href="<?php echo base_url('productos/agregar');?>"><i class="icon-agregar"></i> Agregar</a></li>
                    <li class="active"><a><i class="icon-editar"></i> Editar</a></li>
                    <li><a href="<?php echo base_url('productos/cantidades');?>"><i class="icon-cantidades"></i> Cantidades</a></li>
                    <li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
                </ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body animated fadeIn">
			<div class="row">
						<h3 class="text-center">Editar Producto</h3>
					</div>
				<form id="frmAgregarEmpleado">
					<div class="row">
						
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label for="cbxFamilia" class="control-label azul">Familia</label>
								<select id="cbxFamilia" class="form-control azul">
									<option>Familia 1</option>
									<option>Familia 2</option>
									<option>Familia 3</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label for="cbxCategoria" class="control-label azul">Categoria</label>
								<select id="cbxCategoria" class="form-control azul">
									<option>Categoria 1</option>
									<option>Categoria 2</option>
									<option>Categoria 3</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul calendario" for="txtFechaIngreso">Fecha de Ingreso</label>
								<i class="icon-calendario" style="font-size:10px"></i>
								<input class="form-control azul date" id="txtFechaIngreso" value="<?php echo date('d/m/Y');?>" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtNombre">Nombre</label>
								<input class="form-control azul" id="txtNombre" type="text" required>
							</div>
						</div>
					</div>




					<div class="row">
						<div class="col-lg-3  col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtDescripcion">Descripción</label>
								<input class="form-control azul" id="txtDescripcion" type="text" required>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtPrecio">Precio</label>
								<input class="form-control azul" id="txtPrecio" type="text" required>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="form-group">
								<label for="cbxDescuento" class="control-label azul">Descuento</label>
								<select id="cbxDescuento" class="form-control azul">
									<option>40%</option>
									<option>54%</option>
									<option>64%</option>
								</select>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtPrecio">Precio Franquicia</label>
								<input class="form-control azul" id="txtPrecio" type="text" required>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtObsoleto">Producto Descontinuado</label>
								<input class="form-control azul" id="txtObsoleto" type="text" placeholder="Mes" required>
							</div>
						</div>
					</div><!--SEGUNDA LINEA-->

















					
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtExistencia">Existencia</label>
								<input class="form-control azul" id="txtExistencia" type="text" required>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtCantidadMinimaCEDIS">Cantidad Minima</label>
								<input class="form-control azul" id="txtCantidadMinimaCEDIS" type="text" required>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="form-group">
								<label class="control-label azul" for="txtCantidadMaximaCEDIS">Cantidad Máxima</label>
								<input class="form-control azul" id="txtCantidadMaximaCEDIS" type="text" required>
							</div>
						</div>
					</div>
					

					<div class="row" style="margin-top:20px;">
						<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12" style="background:#f3f3f3;">
							<div class="col-lg-6 col-md-4 col-sm-6">
								<div class="form-group">
									<label for="cbxColor" class="control-label azul">Color</label>
									<select id="cbxColor" class="form-control azul">
										<option value="" disabled selected>Seleccione un color</option>
										<option>Verde</option>
										<option>Rojo</option>
										<option>Varios</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-md-4 col-sm-6">
								<div class="form-group">
									<label class="control-label azul" for="txtCantidad">Cantidad</label>
									<input class="form-control azul" id="txtCantidad" type="text" required>
								</div>
							</div>
							<div class="col-lg-10" style="margin-top:1.8em;">
								<div class="table-responsive">
									<table class="table table-hover table-condensed">
										<thead>
											<tr>
												<th>Color</th>
												<th>Cantidad</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Verde</td>
												<td>100</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="col-lg-1">
								<button class="btn btn-primary btn-xs btn-raised top"><i class="icon-agregar"></i></button>
								<button class="btn btn-warning btn-xs btn-raised top"><i class="icon-editar"></i></button>
								<button class="btn btn-danger btn-xs btn-raised top"><i class="icon-eliminar"></i></button>
							</div>
						</div>
						<div class="col-lg-10 col-lg-offset-1">
							<label for="">Fotografías</label><br>
							<button type="button" class="btn btn-default btn-raised top btn-xs" id="fotos"><i class="icon-foto"></i> Seleccionar</button>
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