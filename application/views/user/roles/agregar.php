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
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="text-center">Consultar Rol</h3>
				<div class="col-lg-4 centrada">
					<label class="control-label azul" for="">Nombre del Rol</label>
					<input type="text" class="form-control azul">
					<div class="text-center">
						<button class="btn btn-success btn-sm btn-raised top"><i class="icon-agregar"></i> Agregar</button>	
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 centrada boton">
						<button class="btn btn-warning top btn-raised btn-sm"><i class="icon-editar"></i> Editar</button>
						<a class="btn btn-danger top btn-raised btn-sm" data-toggle="modal" href='#modal-id'><i class="icon-eliminar"></i> Eliminar</a>
					</div>	
				</div>
			</div>
		</div>
		<div class="row animated slideInUp" id="roles">

			<!--PERMISOS WEB-->
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="collapse-card">
					<div class="collapse-card__heading">
						<div class="collapse-card__title">
							<h3>Permisos Web</h3>
						</div>
					</div>
					<div class="collapse-card__body">
						<div class="row">
							<div class="col-lg-3 col-md-4 col-sm-6"><!-- Catalogo Empleados -->
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
							<div class="col-lg-3 col-md-4 col-sm-6"><!-- Catalogo Roles -->
								<div class="panel panel-default">
									<div class="panel-heading">Roles
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
							<div class="col-lg-3 col-md-4 col-sm-6"><!-- Catalogo Usuarios -->
								<div class="panel panel-default">
									<div class="panel-heading">Usuarios
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
									<div class="panel-heading">Compras
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
							<div class="col-lg-4 col-md-4 col-sm-6"><!-- Catalogos Sucursales -->
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
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Reporte de Ventas</label>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Comparativo Ventas</label>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Reporte de Pagos a Empleados</label>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Reporte de Asistencia</label>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="checkbox">
													<label><input type="checkbox" name="franquicias"> Reporte de Vendedores</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="panel panel-default">
									<div class="panel-heading">Facturas
										<div class="checkbox blanco">
											<label>
												<input type="checkbox">
											</label>
										</div>
									</div>
									<div class="panel-body">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="checkbox">
												<label><input type="checkbox" name="franquicias"> Consultar Factura</label>
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="checkbox">
												<label><input type="checkbox" name="franquicias"> Subir Pago</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-6">
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
														<div class="panel-body">
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Agregar</label>
																</div>
															</div>
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Eliminar</label>
																</div>
															</div>
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Editar</label>
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
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>



			<!--PERMISOS ESCRITORIO-->
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:20px;">
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
											<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
												<div class="collapse-card">
													<div class="collapse-card__heading">
														<div class="collapse-card__title">
															<h4 class="text-left">Catálogos Administrativos</h4>
														</div>
													</div>
													<div class="collapse-card__body">
														<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><!-- Mermas -->
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
														<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><!-- Promociones -->
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
														<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><!-- Administracion de Reportes -->
															<div class="panel panel-default">
																<div class="panel-heading blanco">Administracion de Reportes</div>
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
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<div class="collapse-card">
													<div class="collapse-card__heading">
														<div class="collapse-card__title">
															<h4 class="text-center">Administración de Reportes</h4>
														</div>
													</div>
													<div class="collapse-card__body">
														<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><!-- Devoluciones -->
															<div class="panel panel-default">
																<div class="panel-heading">Devoluciones
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
																				<label><input type="checkbox" name="franquicias"> Consultar (Rango Fec)</label>
																			</div>
																		</div>
																		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																			<div class="checkbox">
																				<label><input type="checkbox" name="franquicias"> Consultar Venta</label>
																			</div>
																		</div>
																		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																			<div class="checkbox">
																				<label><input type="checkbox" name="franquicias"> Guardar e Imprimir</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											
										</div><!--termina catálogos administrativos-->
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="collapse-card">
													<div class="collapse-card__heading">
														<div class="collapse-card__title">
															<h4>Administración Inventario</h4>
														</div>
													</div>
													<div class="collapse-card__body">
														<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><!-- Surtir Inventario -->
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
																		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																			<div class="checkbox">
																				<label><input type="checkbox" name="franquicias"> Consultar</label>
																			</div>
																		</div>
																		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																			<div class="checkbox">
																				<label><input type="checkbox" name="franquicias"> Capturar Inventario</label>
																			</div>
																		</div>
																		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																			<div class="checkbox">
																				<label><input type="checkbox" name="franquicias"> Ajustar</label>
																			</div>
																		</div>
																		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
																		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																			<div class="checkbox">
																				<label><input type="checkbox" name="franquicias"> Buscar Producto</label>
																			</div>
																		</div>
																		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																			<div class="checkbox">
																				<label><input type="checkbox" name="franquicias"> Guardar</label>
																			</div>
																		</div>
																		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																			<div class="checkbox">
																				<label><input type="checkbox" name="franquicias"> Agregar</label>
																			</div>
																		</div>
																		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																			<div class="checkbox">
																				<label><input type="checkbox" name="franquicias"> Imprimir</label>
																			</div>
																		</div>
																		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																			<div class="checkbox">
																				<label><input type="checkbox" name="franquicias"> Cancelar</label>
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
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
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
															<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																<div class="checkbox">
																	<label><input type="checkbox" name="franquicias"> Abonar</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
												<div class="panel panel-default">
													<div class="panel-heading">Cortes de Caja
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
																	<label><input type="checkbox" name="franquicias"> Confirmar Corte</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
												<div class="panel panel-default">
													<div class="panel-heading">Monitoreo de Traspasos
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
																	<label><input type="checkbox" name="franquicias"> Actualizar Estatus</label>
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
						</div><!--MÓDULO ADMINISTRACIÓN-->

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="collapse-card">
									<div class="collapse-card__heading">
										<div class="collapse-card__title">
											<h4 class="text-center">Módulo Ventas
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
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><!-- Punto de Venta -->
												<div class="panel panel-default">
													<div class="panel-heading">Punto de Venta
														<div class="checkbox blanco">
															<label>
																<input type="checkbox">
															</label>
														</div>
													</div>
													<div class="panel-body">
														<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
															<div class="checkbox">
																<label><input type="checkbox" name="franquicias"> Agregar Producto</label>
															</div>
														</div>
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
								<div class="collapse-card">
									<div class="collapse-card__heading">
										<div class="collapse-card__title">
											<h4 class="text-center">Módulo monitoreo vendedor
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
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
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
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
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
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
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
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
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
							</div><!--MÓDULO configuración-->
						</div><!--MÓDULO Ventas-->
					</div>
				</div>
			</div>





			
			
		</div>
	</div>
</div>
</div>
<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<p>¿Realmente desea eliminar la franquicia <strong id="clave_fra"></strong>?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-raised top btn-sm" data-dismiss="modal"><i class="icon-cerrar"></i> cerrar</button>
				<button type="button" class="btn btn-danger btn-raised top btn-sm"><i class="icon-eliminar"></i> Eliminar</button>
			</div>
		</div>
	</div>
</div>
<script>
	$('#cbxRol').on('change',function(event) {
		$('#roles').hide().fadeIn();
		$('.boton').hide().fadeIn();
	});
	$('.collapse-card').paperCollapse();
</script>