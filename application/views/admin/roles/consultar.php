<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="<?php echo base_url('roles');?>"><i class="icon-listar"></i> Consultar</a></li>
					<li><a href="<?php echo base_url('roles/agregar');?>"><i class="icon-agregar"></i> Agregar</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10" style="margin-bottom:20px;">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="text-center">Consultar Rol</h3>
				<div class="col-lg-4 centrada">
					<div class="form-group">
						<label for="cbxRol" class="control-label azul">Rol</label>
						<select id="cbxRol" class="form-control azul">
							<option value="" disabled selected>Seleccione un rol</option>
							<option>Administrador</option>
							<option>Vendedor</option>
							<option>Cajero</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div id="boton" class="col-lg-4 centrada animated slideInUp text-center" style="display:none;">
						<button class="btn btn-warning top btn-raised btn-xs"><i class="icon-editar"></i> Editar</button>
						<a class="btn btn-danger top btn-raised btn-xs" data-toggle="modal" href='#modal-id'><i class="icon-eliminar"></i> Eliminar</a>
					</div>	
				</div>
			</div>
		</div>
		<div class="row animated slideInUp" id="roles" style="display:none;">
			<div class="col-lg-12">
				<div class="collapse-card">
					<div class="collapse-card__heading">
						<div class="collapse-card__title">
							<h3>Permisos Web</h3>
						</div>
					</div>
					<div class="collapse-card__body">
						<div class="row">
							<div class="col-lg-3 col-md-4 col-sm-6">
								<div class="panel panel-default">
									<div class="panel-heading">Empleados
										<div class="checkbox blanco">
											<label><input type="checkbox" name="empleados"></label>
										</div>
									</div>
									<div class="panel-body">
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<div class="checkbox">
												<label><input type="checkbox" name="empleados"> Agregar</label>
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<div class="checkbox">
												<label><input type="checkbox" name="empleados"> Eliminar</label>
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<div class="checkbox">
												<label><input type="checkbox" name="empleados"> Editar</label>
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<div class="checkbox">
												<label><input type="checkbox" name="empleados"> Consultar</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6"><!-- Catalogos Franquicias -->
								<div class="panel panel-default">
									<div class="panel-heading">Franquicias
										<div class="checkbox blanco">
											<label>
												<input type="checkbox">
											</label>
										</div>
									</div>
									<div class="panel-body">
										<div class="panel-body">
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Agregar</label>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Eliminar</label>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Editar</label>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Consultar</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6"><!-- Catalogos Sucursales -->
								<div class="panel panel-default">
									<div class="panel-heading">Sucursales
										<div class="checkbox blanco">
											<label>
												<input type="checkbox">
											</label>
										</div>
									</div>
									<div class="panel-body">
										<div class="panel-body">
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Agregar</label>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Eliminar</label>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Editar</label>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Consultar</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6"><!-- Catalogos Usuarios -->
								<div class="panel panel-default">
									<div class="panel-heading">Usuarios
										<div class="checkbox blanco">
											<label>
												<input type="checkbox">
											</label>
										</div>
									</div>
									<div class="panel-body">
										<div class="panel-body">
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Agregar</label>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Eliminar</label>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Editar</label>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Consultar</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 col-md-4 col-sm-6"><!-- Catalogos Familias -->
								<div class="panel panel-default">
									<div class="panel-heading">Familias
										<div class="checkbox blanco">
											<label>
												<input type="checkbox">
											</label>
										</div>
									</div>
									<div class="panel-body">
										<div class="panel-body">
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Agregar</label>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Eliminar</label>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Editar</label>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Consultar</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6"><!-- Catalogos Categorias -->
								<div class="panel panel-default">
									<div class="panel-heading">Categorias
										<div class="checkbox blanco">
											<label>
												<input type="checkbox">
											</label>
										</div>
									</div>
									<div class="panel-body">
										<div class="panel-body">
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Agregar</label>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Eliminar</label>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Editar</label>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Consultar</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-md-4 col-sm-6"><!-- Catalogos Productos -->
								<div class="collapse-card">
									<div class="collapse-card__heading">
										<div class="collapse-card__title">
											<h4 class="text-center">Módulo Productos
												<div class="checkbox modulo">
													<label>
														<input type="checkbox">
													</label>
												</div>
											</h4>
										</div>
									</div>
									<div class="collapse-card__body">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
												<div class="panel panel-default">
													<div class="panel-heading">Productos
														<div class="checkbox blanco">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</div>
													<div class="panel-body">
														<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
															<div class="checkbox">
																<label><input type="checkbox" name="franquicias"> Agregar</label>
															</div>
														</div>
														<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
															<div class="checkbox">
																<label><input type="checkbox" name="franquicias"> Eliminar</label>
															</div>
														</div>
														<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
															<div class="checkbox">
																<label><input type="checkbox" name="franquicias"> Editar</label>
															</div>
														</div>
														<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
															<div class="checkbox">
																<label><input type="checkbox" name="franquicias"> Consultar</label>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
												<div class="panel panel-default">
													<div class="panel-heading">Cantidades
														<div class="checkbox blanco">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</div>
													<div class="panel-body">
														<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
															<div class="checkbox">
																<label><input type="checkbox" name="franquicias"> Agregar</label>
															</div>
														</div>
														<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
															<div class="checkbox">
																<label><input type="checkbox" name="franquicias"> Eliminar</label>
															</div>
														</div>
														<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
															<div class="checkbox">
																<label><input type="checkbox" name="franquicias"> Editar</label>
															</div>
														</div>
														<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
															<div class="checkbox">
																<label><input type="checkbox" name="franquicias"> Consultar</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 centrada">
												<div class="panel panel-default">
													<div class="panel-heading">Códigos
														<div class="checkbox blanco">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><!-- Catalogos Facturas -->
								<div class="panel panel-default">
									<div class="panel-heading">Facturas
										<div class="checkbox blanco">
											<label>
												<input type="checkbox">
											</label>
										</div>
									</div>
									<div class="panel-body">
										<div class="panel-body">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Subir Factura</label>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Consultar Pago</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><!-- Catalogos Facturas -->
								<div class="panel panel-default">
									<div class="panel-heading">Inventario
										<div class="checkbox blanco">
											<label>
												<input type="checkbox">
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><!-- Catalogos Reportes -->
								<div class="panel panel-default">
									<div class="panel-heading">Reportes
										<div class="checkbox blanco">
											<label>
												<input type="checkbox">
											</label>
										</div>
									</div>
									<div class="panel-body">
										<div class="panel-body">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Reporte ventas Sucursales</label>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Comparativo Ventas</label>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Reporte Ventas Sosbella</label>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Reporte de Productos descontinuados</label>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Reporte más Vendido</label>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Reporte de Productos descontinuados sin existencia</label>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Reporte Cortes de Caja</label>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Reporte de productos mínimos</label>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Reporte Pagos a empleados</label>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Reporte de Asistencia</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><!-- Catalogos Inventario -->
								<div class="panel panel-default">
									<div class="panel-heading">Roles
										<div class="checkbox blanco">
											<label>
												<input type="checkbox">
											</label>
										</div>
									</div>
									<div class="panel-body">
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<div class="checkbox">
												<label><input type="checkbox" name="franquicias"> Agregar</label>
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<div class="checkbox">
												<label><input type="checkbox" name="franquicias"> Eliminar</label>
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<div class="checkbox">
												<label><input type="checkbox" name="franquicias"> Editar</label>
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<div class="checkbox">
												<label><input type="checkbox" name="franquicias"> Consultar</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><!-- Catalogos Inventario -->
								<div class="collapse-card">
									<div class="collapse-card__heading">
										<div class="collapse-card__title">
											<h4>Módulo Productos</h4>
										</div>
									</div>
									<div class="collapse-card__body">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="panel panel-default">
													<div class="panel-heading">Monitoreo de Ventas
														<div class="checkbox blanco">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="panel panel-default">
													<div class="panel-heading">Agregar Metas
														<div class="checkbox blanco">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</div>
													<div class="panel-body">
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<div class="checkbox">
																<label><input type="checkbox" name="franquicias"> Agregar</label>
															</div>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<div class="checkbox">
																<label><input type="checkbox" name="franquicias"> Eliminar</label>
															</div>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<div class="checkbox">
																<label><input type="checkbox" name="franquicias"> Editar</label>
															</div>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<div class="checkbox">
																<label><input type="checkbox" name="franquicias"> Monitoreo</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>





























			<div class="col-lg-12" style="margin-top:20px;">
				<div class="collapse-card">
					<div class="collapse-card__heading">
						<div class="collapse-card__title">
							<h3>Permisos Escritorio</h3>
						</div>
					</div>
					<div class="collapse-card__body">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="collapse-card">
									<div class="collapse-card__heading">
										<div class="collapse-card__title">
											<h4 class="text-center">Módulo Administración
												<div class="checkbox modulo">
													<label>
														<input type="checkbox">
													</label>
												</div>
											</h4>
										</div>
									</div>
									<div class="collapse-card__body">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<h4>Catálogos Administrativos</h4>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><!-- Mermas -->
												<div class="panel panel-default">
													<div class="panel-heading">Mermas
														<div class="checkbox blanco">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</div>
													<div class="panel-body">
														<div class="panel-body">
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Agregar</label>
																</div>
															</div>
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Cancelar</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><!-- Franquiciatarios -->
												<div class="panel panel-default">
													<div class="panel-heading">Franquiciatarios
														<div class="checkbox blanco">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</div>
													<div class="panel-body">
														<div class="panel-body">
															<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Agregar</label>
																</div>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Eliminar</label>
																</div>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Editar</label>
																</div>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Consultar</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><!-- Proveedores -->
												<div class="panel panel-default">
													<div class="panel-heading">Proveedores
														<div class="checkbox blanco">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</div>
													<div class="panel-body">
														<div class="panel-body">
															<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Agregar</label>
																</div>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Eliminar</label>
																</div>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Editar</label>
																</div>
															</div>
															<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Consultar</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><!-- Devoluciones -->
												<div class="panel panel-default">
													<div class="panel-heading">Promociones
														<div class="checkbox blanco">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</div>
													<div class="panel-body">
														<div class="panel-body">
															<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Agregar</label>
																</div>
															</div>
															<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Eliminar</label>
																</div>
															</div>
															<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Editar</label>
																</div>
															</div>
															<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Consultar</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><!-- Devoluciones -->
												<div class="panel panel-default">
													<div class="panel-heading">Promociones
														<div class="checkbox blanco">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</div>
													<div class="panel-body">
														<div class="panel-body">
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Guardar</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!--TERMINA CATALOGOS ADMINISTRATIVOS-->





										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<h4>Administración Inventario</h4>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><!--Surtir Inventario -->
												<div class="panel panel-default">
													<div class="panel-heading">Surtir Inventario
														<div class="checkbox blanco">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</div>
													<div class="panel-body">
														<div class="panel-body">
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Guardar</label>
																</div>
															</div>
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Consultar</label>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">Alertas
														<div class="checkbox blanco">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-4 col-sm-6 col-xs-12" id="inventario"><!-- Inventario -->
												<div class="panel panel-default">
													<div class="panel-heading">Inventario
														<div class="checkbox blanco">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</div>
													<div class="panel-body">
														<div class="panel-body">
															<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Consultar</label>
																</div>
															</div>
															<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Capturar Inventario</label>
																</div>
															</div>
															<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Ajustar</label>
																</div>
															</div>
															<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Imprimir</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="traspasos"><!-- Traspasos -->
												<div class="panel panel-default">
													<div class="panel-heading">Traspasos
														<div class="checkbox blanco">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</div>
													<div class="panel-body">
														<div class="panel-body">
															<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Buscar Producto</label>
																</div>
															</div>
															<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Guardar</label>
																</div>
															</div>
															<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Agregar</label>
																</div>
															</div>
															<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Imprimir</label>
																</div>
															</div>
															<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Cancelar</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!--TERMINA ADMINISTRACIÓN INVENTARIO-->













										<div class="row" style="margin-top:20px;">
											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><!-- Administracion de Reportes -->
												<div class="panel panel-default">
													<div class="panel-heading blanco">Administracion de Reportes</div>
													<div class="panel-body">
														<div class="panel-body">
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Reporte de Ventas</label>
																</div>
															</div>
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Reporte Cortes de Caja</label>
																</div>
															</div>
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Reporte de Mermas</label>
																</div>
															</div>
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Reporte Ajustar Inventario</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><!-- Cuentas por Cobrar -->
												<div class="panel panel-default">
													<div class="panel-heading">Cuentas por Cobrar
														<div class="checkbox blanco">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</div>
													<div class="panel-body">
														<div class="panel-body">
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Abonar</label>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">Cortes de Caja
														<div class="checkbox blanco">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</div>
													<div class="panel-body">
														<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
															<div class="checkbox">
																<label><input type="checkbox" name="franquicias"> Confirmar Corte</label>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
												<div class="collapse-card">
													<div class="collapse-card__heading">
														<div class="collapse-card__title inner_collapse">
															<h4 class="text-center">Monitoreo</h4>
														</div>
													</div>
													<div class="collapse-card__body">
														<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
															<div class="panel panel-default">
																<div class="panel-heading">Monitoreo Pedidos
																	<div class="checkbox blanco">
																		<label>
																			<input type="checkbox">
																		</label>
																	</div>
																</div>
																<div class="panel-body">
																   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																		<div class="checkbox">
																			<label><input type="checkbox" name="franquicias"> Actualizar Estatus</label>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
															<div class="panel panel-default">
																<div class="panel-heading">Monitoreo Traspasos
																	<div class="checkbox blanco">
																		<label>
																			<input type="checkbox">
																		</label>
																	</div>
																</div>
																<div class="panel-body">
																   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																		<div class="checkbox">
																			<label><input type="checkbox" name="franquicias"> Actualizar Estatus</label>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>	
										</div><!--TERMINA ADMINISTRACIÓN REPORTES-->
									</div>
								</div>
							</div>
						</div><!--TERMINA MÓDULO DE ADMINISTRACIÓN-->






























						<div class="row">


							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="collapse-card">
									<div class="collapse-card__heading">
										<div class="collapse-card__title">
											<h4 class="text-center">Módulo de Ventas
												<div class="checkbox modulo">
													<label>
														<input type="checkbox">
													</label>
												</div>
											</h4>
										</div>
									</div>
									<div class="collapse-card__body">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="panel panel-default">
													<div class="panel-heading">Punto de Venta
														<div class="checkbox blanco">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</div>
													<div class="panel-body">
														<div class="panel-body">
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Buscar Producto</label>
																</div>
															</div>
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Descuento</label>
																</div>
															</div>
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Vender</label>
																</div>
															</div>
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Cancelar</label>
																</div>
															</div>
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Abrir Caja</label>
																</div>
															</div>
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Recargas</label>
																</div>
															</div>
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Devoluciones</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>



							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="collapse-card">
											<div class="collapse-card__heading">
												<div class="collapse-card__title">
													<h4 class="text-center">Módulo Configuración
														<div class="checkbox modulo">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</h4>
												</div>
											</div>
											<div class="collapse-card__body">
												<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
													<div class="panel panel-default">
														<div class="panel-heading">Principal
															<div class="checkbox blanco">
																<label>
																	<input type="checkbox">
																</label>
															</div>
														</div>
														<div class="panel-body">
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Guardar</label>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
													<div class="panel panel-default">
														<div class="panel-heading">Ticket
															<div class="checkbox blanco">
																<label>
																	<input type="checkbox">
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="collapse-card">
											<div class="collapse-card__heading">
												<div class="collapse-card__title">
													<h4 class="text-center">Módulo Reproductor Imágenes
														<div class="checkbox modulo">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</h4>
												</div>
											</div>
											<div class="collapse-card__body">
												<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
													<div class="panel panel-default">
														<div class="panel-heading">Reproductor
															<div class="checkbox blanco">
																<label>
																	<input type="checkbox">
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="collapse-card">
									<div class="collapse-card__heading">
										<div class="collapse-card__title">
											<h4 class="text-center">Módulo Monitoreo Vendedor
												<div class="checkbox modulo">
													<label>
														<input type="checkbox">
													</label>
												</div>
											</h4>
										</div>
									</div>
									<div class="collapse-card__body">
										<div class="panel panel-default">
											<div class="panel-heading">Monitoreo
												<div class="checkbox blanco">
													<label>
														<input type="checkbox">
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!--TERMINA MODULO VENTAS-->










































					</div>
				</div>
			</div>
		</div><!--TERMINA ROW GENERAL ANIMACIÓN-->
	</div>
</div>
</div>
</div>
<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">¿Realmente desea eliminar el rol?</h4>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-raised top btn-sm" data-dismiss="modal"><i class="icon-cerrar"></i> cerrar</button>
				<button type="button" class="btn btn-danger btn-raised top btn-sm"><i class="icon-eliminar"></i> Eliminar</button>
			</div>
		</div>
	</div>
</div>
<script>
	$(function () {
		$('.collapse-card').paperCollapse();
		$('#cbxRol').on('change',function(event) {
			$('input[type="checkbox"]').attr('disabled',true);
			$('#roles').hide().fadeIn();
			$('#boton').hide().fadeIn();
		});
		$('.btn-warning').click(function(event) {
			$('input[type="checkbox"]').attr('disabled',false);
		});
	});
	
</script>