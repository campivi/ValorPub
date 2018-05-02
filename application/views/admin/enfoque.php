<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12"> 
					

					<div class="widget ">
						<div class="widget-header">
								<i class="icon-th-large"></i>
								<h3>Nuestro Enfoque</h3>
						</div> <!-- /widget-header -->
						<div class="widget-content">
							<div class="tabbable">
								<ul class="nav nav-tabs">
									<li  class="<?php echo ($active === 'form')?'active':'' ?>">
										<a href="#formcontrols" data-toggle="tab">Nuestro Enfoque</a>
									</li>
									<li  class="<?php echo ($active === 'block_1')?'active':'' ?>"><a href="#block_1" data-toggle="tab">Bloque 1</a></li>
									<li  class="<?php echo ($active === 'block_2')?'active':'' ?>"><a href="#block_2" data-toggle="tab">Bloque 2</a></li>
									<li  class="<?php echo ($active === 'block_3')?'active':'' ?>"><a href="#block_3" data-toggle="tab">Bloque 3</a></li>
								</ul>
								<br />
								<div class="tab-content">
									
									<div class="tab-pane <?php echo ($active === 'form')?'active':'' ?>" id="formcontrols">
										<div class="tabbable">
											<form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/submit_enfoque">
												<fieldset>	
													<div class="control-group">											
														<label class="control-label" for="titulo">Título de página (*)</label>
														<div class="controls">
															<input type="text" name="titulo" class="span6" id="titulo" value="<?php echo $enfoque->titulo ?>" >
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													

													<div class="control-group">											
														<label class="control-label" for="descripcion">Descripción (*)</label>
														<div class="controls">
															<textarea class="span6 ckeditor" name="descripcion" id="descripcion"><?php echo $enfoque->descripcion ?></textarea>
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->

													<div class="control-group">											
														<label class="control-label" for="titulo_video">Título de video (*)</label>
														<div class="controls">
															<input type="text" name="titulo_video" class="span6" id="titulo_video" value="<?php echo $enfoque->titulo_video ?>" >
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													

													<div class="control-group">											
														<label class="control-label" for="titulo_video">Descripción de video (*)</label>
														<div class="controls">
															<textarea class="span6 ckeditor" name="descripcion_video" id="descripcion_video"><?php echo $enfoque->descripcion_video ?></textarea>
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->

													<div class="control-group">											
														<label class="control-label" for="url_video">URL de video (*)</label>
														<div class="controls">
															<input type="text" name="url_video" class="span6" id="url_video" value="<?php echo $enfoque->url_video ?>" >
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


									
									<div class="tab-pane <?php echo ($active === 'block_1')?'active':'' ?>" id="block_1">
										<div class="widget-header">
												<i class="icon-th-large"></i>
												<h3>Bloque 1</h3>
										</div> <!-- /widget-header -->
										<div class="widget-content">
											<div class="tabbable">
												<form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/submit_enfoque_1">
													<fieldset>	
														<div class="control-group">											
															<label class="control-label" for="titulo_block_1">Título(*)</label>
															<div class="controls">
																<input type="text" name="titulo_block_1" class="span6" id="titulo_block_1" value="<?php echo $enfoque->titulo_block_1 ?>" >
															</div> <!-- /controls -->				
														</div> <!-- /control-group -->			


														<div class="control-group">											
															<label class="control-label" for="titulo_1">Título de Bloque 1 (*)</label>
															<div class="controls">
																<input type="text" name="titulo_1" class="span6" id="titulo_1" value="<?php echo $enfoque->titulo_1 ?>" >
															</div> <!-- /controls -->				
														</div> <!-- /control-group -->												

														<div class="control-group">											
															<label class="control-label" for="descripcion_1">Descripción de Bloque 1 (*)</label>
															<div class="controls">
																<textarea class="span6 ckeditor" name="descripcion_1" id="descripcion_1"><?php echo $enfoque->descripcion_1 ?></textarea>
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
										<br />
										<br />
										<div class="widget-header">
												<i class="icon-th-large"></i>
												<h3>Puntos</h3>
										</div> <!-- /widget-header -->
										<div class="widget-content">
											<div class="tabbable">
												<div class="widget-content">
													<a href="<?php echo base_url(); ?>admin/addPoint/1"  class="right btn btn-medium btn-success pull-right">
														<i class="btn-icon-only icon-plus"> </i>
														Agregar
													</a>
													<br />
													<br />
													<table class="table table-striped table-bordered">
														<thead>
															<tr>
																<th></th>
																<th> Descripción </th>
																<th class="td-actions"> </th>
															</tr>
														</thead>
														<tbody>
															<?php if (count($puntos_1) > 0) {?>
																<?php foreach ($puntos_1 as $key => $value):?>
																<tr>
																	<td><?php echo $key + 1 ?></td>
																	<td><?php echo $value->descripcion ?></td>
																	<td width="100" class="td-actions">
																		<a href="<?php echo base_url(); ?>admin/editPoint/<?php echo $value->id_punto ?>" class="btn btn-small btn-success">
																			<i class="btn-icon-only icon-pencil"> </i>
																		</a>
																		<a href="#" class="btn btn-danger btn-small delete-point" data-id="<?php echo $value->id_punto ?>">
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



									<div class="tab-pane <?php echo ($active === 'block_2')?'active':'' ?>" id="block_2">
										<div class="widget-header">
												<i class="icon-th-large"></i>
												<h3>Bloque 2</h3>
										</div> <!-- /widget-header -->
										<div class="widget-content">
											<div class="tabbable">
												<form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/submit_enfoque_2">
													<fieldset>	
														<div class="control-group">											
															<label class="control-label" for="titulo_block_2">Título(*)</label>
															<div class="controls">
																<input type="text" name="titulo_block_2" class="span6" id="titulo_block_2" value="<?php echo $enfoque->titulo_block_2 ?>" >
															</div> <!-- /controls -->				
														</div> <!-- /control-group -->			

														<div class="control-group">											
															<label class="control-label" for="titulo_2">Título de Bloque 1 (*)</label>
															<div class="controls">
																<input type="text" name="titulo_2" class="span6" id="titulo_2" value="<?php echo $enfoque->titulo_2 ?>" >
															</div> <!-- /controls -->				
														</div> <!-- /control-group -->														

														<div class="control-group">											
															<label class="control-label" for="descripcion_2">Descripción de Bloque 1 (*)</label>
															<div class="controls">
																<textarea class="span6 ckeditor" name="descripcion_2" id="descripcion_2"><?php echo $enfoque->descripcion_2 ?></textarea>
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
										<br />
										<br />
										<div class="widget-header">
												<i class="icon-th-large"></i>
												<h3>Puntos</h3>
										</div> <!-- /widget-header -->
										<div class="widget-content">
											<div class="tabbable">
												<div class="widget-content">
													<a href="<?php echo base_url(); ?>admin/addPoint/2"  class="right btn btn-medium btn-success pull-right">
														<i class="btn-icon-only icon-plus"> </i>
														Agregar
													</a>
													<br />
													<br />
													<table class="table table-striped table-bordered">
														<thead>
															<tr>
																<th></th>
																<th> Descripción </th>
																<th class="td-actions"> </th>
															</tr>
														</thead>
														<tbody>
															<?php if (count($puntos_2) > 0) {?>
																<?php foreach ($puntos_2 as $key => $value):?>
																<tr>
																	<td><?php echo $key + 1 ?></td>
																	<td><?php echo $value->descripcion ?></td>
																	<td width="100" class="td-actions">
																		<a href="<?php echo base_url(); ?>admin/editPoint/<?php echo $value->id_punto ?>" class="btn btn-small btn-success">
																			<i class="btn-icon-only icon-pencil"> </i>
																		</a>
																		<a href="#" class="btn btn-danger btn-small delete-point" data-id="<?php echo $value->id_punto ?>">
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


									<div class="tab-pane <?php echo ($active === 'block_3')?'active':'' ?>" id="block_3">
										<div class="widget-header">
												<i class="icon-th-large"></i>
												<h3>Bloque 3</h3>
										</div> <!-- /widget-header -->
										<div class="widget-content">
											<div class="tabbable">
												<form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/submit_enfoque_3">
													<fieldset>	
														<div class="control-group">											
															<label class="control-label" for="titulo_block_3">Título(*)</label>
															<div class="controls">
																<input type="text" name="titulo_block_3" class="span6" id="titulo_block_3" value="<?php echo $enfoque->titulo_block_3 ?>" >
															</div> <!-- /controls -->				
														</div> <!-- /control-group -->			

														<div class="control-group">											
															<label class="control-label" for="titulo_3">Título de Bloque 3 (*)</label>
															<div class="controls">
																<input type="text" name="titulo_3" class="span6" id="titulo_3" value="<?php echo $enfoque->titulo_3 ?>" >
															</div> <!-- /controls -->				
														</div> <!-- /control-group -->														

														<div class="control-group">											
															<label class="control-label" for="descripcion_3">Descripción de Bloque 3 (*)</label>
															<div class="controls">
																<textarea class="span6 ckeditor" name="descripcion_3" id="descripcion_3"><?php echo $enfoque->descripcion_3 ?></textarea>
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
										<br />
										<br />
										<div class="widget-header">
												<i class="icon-th-large"></i>
												<h3>Puntos</h3>
										</div> <!-- /widget-header -->
										<div class="widget-content">
											<div class="tabbable">
												<div class="widget-content">
													<a href="<?php echo base_url(); ?>admin/addPoint/3"  class="right btn btn-medium btn-success pull-right">
														<i class="btn-icon-only icon-plus"> </i>
														Agregar
													</a>
													<br />
													<br />
													<table class="table table-striped table-bordered">
														<thead>
															<tr>
																<th></th>
																<th> Descripción </th>
																<th class="td-actions"> </th>
															</tr>
														</thead>
														<tbody>
															<?php if (count($puntos_3) > 0) {?>
																<?php foreach ($puntos_3 as $key => $value):?>
																<tr>
																	<td><?php echo $key + 1 ?></td>
																	<td><?php echo $value->descripcion ?></td>
																	<td width="100" class="td-actions">
																		<a href="<?php echo base_url(); ?>admin/editPoint/<?php echo $value->id_punto ?>" class="btn btn-small btn-success">
																			<i class="btn-icon-only icon-pencil"> </i>
																		</a>
																		<a href="#" class="btn btn-danger btn-small delete-point" data-id="<?php echo $value->id_punto ?>">
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
</div>

