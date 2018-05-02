<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12">   
					
					<div class="widget-content">
						<div class="tabbable">
							<ul class="nav nav-tabs">
								<li  class="<?php echo ($active === 'capacitacion')?'active':'' ?>">
									<a href="#capacitacion" data-toggle="tab">Capacitación</a>
								</li>
								<li  class="<?php echo ($active === 'categoria')?'active':'' ?>"><a href="#categoria" data-toggle="tab">Categoría</a></li>
								<li  class="<?php echo ($active === 'tipo')?'active':'' ?>"><a href="#tipo" data-toggle="tab">Tipo</a></li>
							</ul>
							<br />
							<div class="tab-content">
								<div class="tab-pane <?php echo ($active === 'categoria')?'active':'' ?>" id="categoria">
									<div class="widget-header">
											<i class="icon-th-large"></i>
											<h3>Categoría</h3>
									</div> <!-- /widget-header -->
									<div class="widget-content">
										<div class="tabbable">
											<form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/addCategoryCap">
												<fieldset>	
													<div class="control-group">											
														<label class="control-label" for="descripcion_categoria">Descripción (*)</label>
														<div class="controls">
															<input type="text" name="descripcion_categoria" class="span6" id="descripcion_categoria" value="" >
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
													<?php if(isset($errorc) && $errorc){ ?>
													<div class="alert">
														<button type="button" class="close" data-dismiss="alert">×</button>
														<strong>Alerta!</strong> <?php echo $errorc; ?>
													</div>
													<?php }?>

													<?php if(isset($successc) && $successc){?>
													<div class="alert alert-success">
														<button type="button" class="close" data-dismiss="alert">×</button>
														<strong>Genial!</strong> Se agregó la nueva categoría.
													</div>
													<?php } ?>
														<div class="form-actions">
															<button type="submit" class="btn btn-primary">Agregar</button> 
														</div>
												</fieldset>
											</form>
										</div>
										<br />
										<div class="widget ">
											<div class="widget-header">
													<i class="icon-list"></i>
													<h3>Listado</h3>
											</div> <!-- /widget-header -->
											<div class="widget-content">
												<table class="table table-striped table-bordered">
													<thead>
														<tr>
															<th width="40"></th>
															<th> Titulo </th>
															<th class="td-actions"> </th>
														</tr>
													</thead>
													<tbody>
														<?php if (count($categorias) > 0) {?>
														<?php foreach ($categorias as $key => $value):?>
														<tr>
															<td><?php echo $key + 1 ?></td>
															<td><?php echo $value->descripcion_categoria ?></td><td width="100" class="td-actions">
																<a href="#" class="btn btn-danger btn-small delete-categoria" data-id="<?php echo $value->id_category ?>">
																	<i class="btn-icon-only icon-remove"> </i>
																</a>
															</td>
														</tr>
													<?php endforeach; ?>
													<?php }else {?>
													<tr>
														<td colspan="3"><center>No hay registros.</center></td>
													</tr>
													<?php } ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>


								<div class="tab-pane <?php echo ($active === 'tipo')?'active':'' ?>" id="tipo">
									<div class="widget-header">
											<i class="icon-th-large"></i>
											<h3>Tipo</h3>
									</div> <!-- /widget-header -->
									<div class="widget-content">
										<div class="tabbable">
											<form id="edit-tipo" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/addTipoCap">
												<fieldset>	
													<div class="control-group">											
														<label class="control-label" for="descripcion">Descripción (*)</label>
														<div class="controls">
															<input type="text" name="descripcion" class="span6" id="descripcion" value="" >
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
													<?php if(isset($errort) && $errort){ ?>
													<div class="alert">
														<button type="button" class="close" data-dismiss="alert">×</button>
														<strong>Alerta!</strong> <?php echo $errort; ?>
													</div>
													<?php }?>

													<?php if(isset($successt) && $successt){?>
													<div class="alert alert-success">
														<button type="button" class="close" data-dismiss="alert">×</button>
														<strong>Genial!</strong> Se agregó el nuevo tipo.
													</div>
													<?php } ?>
														<div class="form-actions">
															<button type="submit" class="btn btn-primary">Agregar</button> 
														</div>
												</fieldset>
											</form>
										</div>
										<br />
										<div class="widget ">
											<div class="widget-header">
													<i class="icon-list"></i>
													<h3>Listado</h3>
											</div> <!-- /widget-header -->
											<div class="widget-content">
												<table class="table table-striped table-bordered">
													<thead>
														<tr>
															<th width="40"></th>
															<th> Titulo </th>
															<th class="td-actions"> </th>
														</tr>
													</thead>
													<tbody>
														<?php if (count($tipos) > 0) {?>
														<?php foreach ($tipos as $key => $value):?>
														<tr>
															<td><?php echo $key + 1 ?></td>
															<td><?php echo $value->descripcion ?></td><td width="100" class="td-actions">
																<a href="#" class="btn btn-danger btn-small delete-categoria" data-id="<?php echo $value->id_type_cap ?>">
																	<i class="btn-icon-only icon-remove"> </i>
																</a>
															</td>
														</tr>
													<?php endforeach; ?>
													<?php }else {?>
													<tr>
														<td colspan="3"><center>No hay registros.</center></td>
													</tr>
													<?php } ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>



								<div class="tab-pane <?php echo ($active === 'capacitacion')?'active':'' ?>" id="capacitacion">
									<div class="tabbable">
										<div class="widget ">
											<div class="widget-header">
													<i class="icon-th-large"></i>
													<h3>Capacitación</h3>
											</div> <!-- /widget-header -->
											<div class="widget-content">
												<div class="tabbable">
													<form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/edit_capacitacion">
														<input type="hidden" name="id" id="id" value="<?php echo $page->id_page ?>">
														<fieldset>	
															<div class="control-group">											
																<label class="control-label" for="titulo">Título (*)</label>
																<div class="controls">
																	<input type="text" name="titulo" class="span6" id="titulo" value="<?php echo $page->titulo ?>" >
																</div> <!-- /controls -->				
															</div> <!-- /control-group -->
															
															<?php if(isset($error) && $error){ ?>
															<div class="alert">
																<button type="button" class="close" data-dismiss="alert">×</button>
																<strong>Alerta!</strong> <?php echo $error; ?>
															</div>
															<?php }?>

															<?php if(isset($success) && $success){?>
															<div class="alert alert-success">
																<button type="button" class="close" data-dismiss="alert">×</button>
																<strong>Genial!</strong> Los datos fueron actualizados.
															</div>
															<?php } ?>
																<div class="form-actions">
																	<button type="submit" class="btn btn-primary">Guardar</button> 
																	<button class="btn">Cancelar Cambios</button>
																</div>
														</fieldset>
													</form>
												</div>
											</div>
										</div>

										<div class="widget ">
											<div class="widget-header">
													<i class="icon-list"></i>
													<h3>Blog</h3>
											</div> <!-- /widget-header -->
											<div class="widget-content">
												<a href="<?php echo base_url(); ?>admin/blogCapacitacion"  class="right btn btn-medium btn-success pull-right">
													<i class="btn-icon-only icon-plus"> </i>
													Agregar
												</a>
												<br />
												<br />
												<table id="capacitacion_table" class="table table-striped table-bordered sorted_table">
													<thead>
														<tr>
															<th></th>
															<th> Titulo </th>
															<th> Día</th>
															<th> Hora</th>
															<th> Lugar</th>
															<th> Categoría</th>
															<th width="140px"> Imagen</th>
															<th class="td-actions"> </th>
														</tr>
													</thead>
													<tbody>
														<?php if (count($blogs) > 0) {?>
															<?php foreach ($blogs as $key => $value):?>
															<tr data-id="<?php echo $value->id_capacitacion ?>">
																<td><?php echo $key + 1 ?></td>
																<td><?php echo $value->titulo_capacitacion ?></td>
																<td><?php 
																		if ($value->dia_capacitacion === "1969-12-31") {
																			echo "--";
																		}
																		else{
																			echo $value->dia_capacitacion ;
																		}
																?></td>
																<td><?php echo $value->hora_capacitacion ?></td>
																<td><?php echo $value->lugar_capacitacion ?></td>
																<?php 
																	switch ($value->categoria) {
																		case "1":
																			$category = "Charlas";
																			break;
																		
																		case "2":
																			$category = "Seminarios";
																			break;
																		
																		case "3":
																			$category = "Talleres";
																			break;
																		
																		default:
																			$category = "Cursos";
																			break;
																	}
																?>
																<td><?php echo $category ?></td>
																<td><img style="width:140px" src="<?php echo base_url(); ?>uploads/<?php echo $value->imagen_capacitacion ?>"></td>
																<td width="100" class="td-actions">
																	<a href="<?php echo base_url(); ?>admin/editBlogCapacitacion/<?php echo $value->id_capacitacion ?>" class="btn btn-small btn-success">
																		<i class="btn-icon-only icon-pencil"> </i>
																	</a>
																	<a href="#" class="btn btn-danger btn-small delete-capacitacion" data-id="<?php echo $value->id_capacitacion ?>">
																		<i class="btn-icon-only icon-remove"> </i>
																	</a>
																</td>
															</tr>
															<?php endforeach; ?>
														<?php }else{ ?>
														<tr>
															<td colspan="8"> <center>No hay registros.</center></td>
														</tr>
														<?php } ?>
													</tbody>
												</table>
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

