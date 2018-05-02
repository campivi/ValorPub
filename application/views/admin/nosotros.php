<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12"> 
					

					<div class="widget ">
						<div class="widget-header">
								<i class="icon-th-large"></i>
								<h3>Sé parte del cambio</h3>
						</div> <!-- /widget-header -->
						<div class="widget-content">
							<div class="tabbable">
								<ul class="nav nav-tabs">
								  <li  class="<?php echo ($active === 'form')?'active':'' ?>">
								    <a href="#formcontrols" data-toggle="tab">Parte del cambio</a>
								  </li>
								  <li  class="<?php echo ($active === 'equipo')?'active':'' ?>"><a href="#equipo" data-toggle="tab">Nuestro Equipo</a></li>
								  <li  class="<?php echo ($active === 'aliado')?'active':'' ?>"><a href="#aliado" data-toggle="tab">Aliados</a></li>
								</ul>
								<br />
								<div class="tab-content">
									
									<div class="tab-pane <?php echo ($active === 'form')?'active':'' ?>" id="formcontrols">
										<div class="tabbable">
											<form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/submit_nosotros">
												<fieldset>	
													<div class="control-group">											
														<label class="control-label" for="titulo_nosotros">Título de página (*)</label>
														<div class="controls">
															<input type="text" name="titulo_nosotros" class="span6" id="titulo_nosotros" value="<?php echo $nosotros->titulo_nosotros ?>" >
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->

													<div class="control-group">											
														<label class="control-label" for="descripcion_nosotros">Descripción de la página (*)</label>
														<div class="controls">
															<textarea class="span6 ckeditor" name="descripcion_nosotros" id="descripcion_nosotros"><?php echo $nosotros->descripcion_nosotros ?></textarea>
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->

													<div class="control-group">											
														<label class="control-label" for="titulo_nos_dirigimos">Título nos dirigimos (*)</label>
														<div class="controls">
															<input type="text" name="titulo_nos_dirigimos" class="span6" id="titulo_nos_dirigimos" value="<?php echo $nosotros->titulo_nos_dirigimos ?>" >
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->

													<div class="control-group">											
														<label class="control-label" for="descripcion_nos_dirigimos">Descripción nos dirigimos (*)</label>
														<div class="controls">
															<textarea class="span6 ckeditor" name="descripcion_nos_dirigimos" id="descripcion_nos_dirigimos"><?php echo $nosotros->descripcion_nos_dirigimos ?></textarea>
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
													<div class="control-group">											
														<label class="control-label" for="subtitulo_valores">Sub-título valores (*)</label>
														<div class="controls">
															<input type="text" name="subtitulo_valores" class="span6" id="subtitulo_valores" value="<?php echo $nosotros->subtitulo_valores ?>" >
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
													<div class="control-group">											
														<label class="control-label" for="titulo_valores">Título de valores (*)</label>
														<div class="controls">
															<input type="text" name="titulo_valores" class="span6" id="titulo_valores" value="<?php echo $nosotros->titulo_valores ?>" >
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->

													<div class="control-group">											
														<label class="control-label" for="descripcion_valores">Descripción de valores (*)</label>
														<div class="controls">
															<textarea class="span6 ckeditor" name="descripcion_valores" id="descripcion_valores"><?php echo $nosotros->descripcion_valores ?></textarea>
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
													<div class="control-group">											
														<label class="control-label" for="titulo_vision">Título de visión (*)</label>
														<div class="controls">
															<input type="text" name="titulo_vision" class="span6" id="titulo_vision" value="<?php echo $nosotros->titulo_vision ?>" >
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
													<div class="control-group">											
														<label class="control-label" for="titulo_misional">Título misional (*)</label>
														<div class="controls">
															<input type="text" name="titulo_misional" class="span6" id="titulo_misional" value="<?php echo $nosotros->titulo_misional ?>" >
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->

													<div class="control-group">											
														<label class="control-label" for="descripcion_misional">Descripción misional (*)</label>
														<div class="controls">
															<textarea class="span6 ckeditor" name="descripcion_misional" id="descripcion_misional"><?php echo $nosotros->descripcion_misional ?></textarea>
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
													<div class="control-group">											
														<label class="control-label" for="titulo_institucional">Título institucional (*)</label>
														<div class="controls">
															<input type="text" name="titulo_institucional" class="span6" id="titulo_institucional" value="<?php echo $nosotros->titulo_institucional ?>" >
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->

													<div class="control-group">											
														<label class="control-label" for="descripcion_institucional">Descripción institucional (*)</label>
														<div class="controls">
															<textarea class="span6 ckeditor" name="descripcion_institucional" id="descripcion_institucional"><?php echo $nosotros->descripcion_institucional ?></textarea>
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
													<div class="control-group">											
														<label class="control-label" for="titulo_nuestro_equipo">Título de nuestro equipo (*)</label>
														<div class="controls">
															<input type="text" name="titulo_nuestro_equipo" class="span6" id="titulo_nuestro_equipo" value="<?php echo $nosotros->titulo_nuestro_equipo ?>" >
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
													<div class="control-group">											
														<label class="control-label" for="titulo_aliados">Título de aliados (*)</label>
														<div class="controls">
															<input type="text" name="titulo_aliados" class="span6" id="titulo_aliados" value="<?php echo $nosotros->titulo_aliados ?>" >
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
														<strong>Genial!</strong> Se actualizo correctamente.
													</div>
													<?php } ?>
														<div class="form-actions">
															<button type="submit" class="btn btn-primary">Guardar</button> 
														</div>
												</fieldset>
											</form>
										</div>
									</div>


									
									<div class="tab-pane <?php echo ($active === 'equipo')?'active':'' ?>" id="equipo">
										<div class="tabbable">
											<div class="widget-content">
												<a href="<?php echo base_url(); ?>admin/equipo"  class="right btn btn-medium btn-success pull-right">
													<i class="btn-icon-only icon-plus"> </i>
													Agregar
												</a>
												<br />
												<br />
												<table class="table table-striped table-bordered">
													<thead>
														<tr>
															<th></th>
															<th> Nombre </th>
															<th> Cargo</th>
															<th width="140px"> Imagen</th>
															<th class="td-actions"> </th>
														</tr>
													</thead>
													<tbody>
														<?php if (count($equipo) > 0) {?>
															<?php foreach ($equipo as $key => $value):?>
															<tr>
																<td><?php echo $key + 1 ?></td>
																<td><?php echo $value->nombre ?></td>
																<td><?php echo $value->cargo ?></td>
																<td><img style="width:60px" src="<?php echo base_url(); ?>uploads/<?php echo $value->imagen_equipo ?>"></td>
																<td width="100" class="td-actions">
																	<a href="<?php echo base_url(); ?>admin/editEquipo/<?php echo $value->id_equipo ?>" class="btn btn-small btn-success">
																		<i class="btn-icon-only icon-pencil"> </i>
																	</a>
																	<a href="#" class="btn btn-danger btn-small delete-equipo" data-id="<?php echo $value->id_equipo ?>">
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


									
									<div class="tab-pane <?php echo ($active === 'aliado')?'active':'' ?>" id="aliado">
										<div class="tabbable">
											<div class="widget-content">
												<a href="<?php echo base_url(); ?>admin/aliado"  class="right btn btn-medium btn-success pull-right">
													<i class="btn-icon-only icon-plus"> </i>
													Agregar
												</a>
												<br />
												<br />
												<table class="table table-striped table-bordered">
													<thead>
														<tr>
															<th width="60px"></th>
															<th> Nombre </th>
															<th> web </th>
															<th width="140px"> Imagen</th>
															<th class="td-actions"> </th>
														</tr>
													</thead>
													<tbody>
														<?php if (count($aliado) > 0) {?>
															<?php foreach ($aliado as $key => $value):?>
															<tr>
																<td><?php echo $key + 1 ?></td>
																<td><?php echo $value->nombre ?></td>
																<td><?php echo $value->link_colaborador ?></td>
																<td><img style="width:60px" src="<?php echo base_url(); ?>uploads/<?php echo $value->imagen_colaborador ?>"></td>
																<td width="100" class="td-actions">
																	<a href="<?php echo base_url(); ?>admin/editAliado/<?php echo $value->id_colaborador ?>" class="btn btn-small btn-success">
																		<i class="btn-icon-only icon-pencil"> </i>
																	</a>
																	<a href="#" class="btn btn-danger btn-small delete-aliado" data-id="<?php echo $value->id_colaborador ?>">
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

