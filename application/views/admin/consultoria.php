<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12">   
					

					<div class="widget ">
						<div class="widget-header">
								<i class="icon-th-large"></i>
								<h3>Consultoria</h3>
						</div> <!-- /widget-header -->
						<div class="widget-content">
							<div class="tabbable">
								<ul class="nav nav-tabs">
									<li  class="<?php echo ($active === 'consultoria')?'active':'' ?>">
										<a href="#consultoria" data-toggle="tab">Página de Consultoria</a>
									</li>
									<li  class="<?php echo ($active === 'tipo')?'active':'' ?>"><a href="#tipos" data-toggle="tab">Tipos</a></li>
								</ul>
								<br />
								<div class="tab-content">
									
									<div class="tab-pane <?php echo ($active === 'consultoria')?'active':'' ?>" id="consultoria">
										<div class="tabbable">
											<div class="widget ">
												<div class="widget-content">
												<form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/edit_consultoria">
													<input type="hidden" name="id" id="id" value="<?php echo $page->id_page ?>">
													<fieldset>	
														<div class="control-group">											
															<label class="control-label" for="titulo">Título (*)</label>
															<div class="controls">
																<input type="text" name="titulo" class="span6" id="titulo" value="<?php echo $page->titulo ?>" >
															</div> <!-- /controls -->				
														</div> <!-- /control-group -->

														<div class="control-group">											
															<label class="control-label" for="descripcion">Descripción (*)</label>
															<div class="controls">
																<textarea class="span6 ckeditor" name="descripcion" id="descripcion"><?php echo $page->descripcion ?></textarea>
															</div> <!-- /controls -->				
														</div> <!-- /control-group -->

														<div class="control-group">											
															<label class="control-label" for="banner">Imagen</label>
															<div class="controls">
																<input type="file" name="banner" id="banner" />
																<br />
																<br />
																<img style="width:70%" src="<?php echo base_url(); ?>uploads/<?php echo $page->banner ?>">
																<br />
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
											<div class="widget ">
												<div class="widget-header">
														<i class="icon-list"></i>
														<h3>Proyectos</h3>
												</div> <!-- /widget-header -->
												<div class="widget-content">
													<a href="<?php echo base_url(); ?>admin/proyectoConsultoria"  class="right btn btn-medium btn-success pull-right">
														<i class="btn-icon-only icon-plus"> </i>
														Agregar
													</a>
													<br />
													<br />
													<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th></th>
									<th> Titulo </th>
									<th> Tipo</th>
									<th> Web</th>
									<th width="140px"> Imagen</th>
									<th class="td-actions"> </th>
								</tr>
							</thead>
							<tbody>
								<?php if (count($proyectos) > 0) {?>
								<?php foreach ($proyectos as $key => $value):?>
								<tr>
									<td><?php echo $key + 1 ?></td>
									<td><?php echo $value->titulo_proyecto ?></td>
									<td><?php echo ($value->tipo_proyecto === "1")?"Proyecto en desarrollo":"Nuevo Proyecto" ?></td>
									<td><?php echo $value->web_proyecto ?></td>
									<td><img style="width:140px" src="<?php echo base_url(); ?>uploads/<?php echo $value->banner_proyecto ?>"></td>
									 <td width="100" class="td-actions">
										<a href="<?php echo base_url(); ?>admin/editProyectoConsultoria/<?php echo $value->id_proyecto ?>" class="btn btn-small btn-success">
											<i class="btn-icon-only icon-pencil"> </i>
										</a>
										<a href="#" class="btn btn-danger btn-small delete-proyecto" data-id="<?php echo $value->id_proyecto ?>">
											<i class="btn-icon-only icon-remove"> </i>
										</a>
									 </td>
								</tr>
							 <?php endforeach; ?>
							<?php }else{ ?>
							<tr>
								<td colspan="6"> <center>No hay registros.</center></td>
							</tr>
							<?php } ?>
							</tbody>
						 </table>
												</div>
											</div>
										</div>
									</div>


									<div class="tab-pane <?php echo ($active === 'tipo')?'active':'' ?>" id="tipos">
										<div class="tabbable">
											<div class="tabbable">
												<div class="widget ">
													<div class="widget-header">
															<i class="icon-th-large"></i>
															<h3>Tipo Consultoría</h3>
													</div> <!-- /widget-header -->
													<div class="widget-content">
														<div class="tabbable">
															<form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/submitTipoc">
																<fieldset>	
																	<div class="control-group">											
																		<label class="control-label" for="titulo_tipoc">Titulo (*)</label>
																		<div class="controls">
																			<input type="text" name="titulo_tipoc" class="span6" id="titulo_tipoc" value="" >
																		</div> <!-- /controls -->
																	</div>

																	<div class="control-group">											
																		<label class="control-label" for="descripcion_tipoc">Descripción (*)</label>
																		<div class="controls">
																			<textarea class="span6" name="descripcion_tipoc" id="descripcion_tipoc"></textarea>
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
																		<strong>Genial!</strong> Se agregó la nueva categoría.
																	</div>
																	<?php } ?>
																		<div class="form-actions">
																			<button type="submit" class="btn btn-primary">Agregar</button> 
																		</div>
																</fieldset>
															</form>
														</div>
													</div>
												</div>
												<div class="widget ">
													<div class="widget-header">
															<i class="icon-list"></i>
															<h3>Tipos</h3>
													</div> <!-- /widget-header -->
													<div class="widget-content">
														<table class="table table-striped table-bordered">
															<thead>
																<tr>
																	<th width="40"></th>
																	<th> Titulo </th>
																	<th> Descripción </th>
																	<th class="td-actions"> </th>
																</tr>
															</thead>
															<tbody>
																<?php if (count($tipos) > 0) {?>
																<?php foreach ($tipos as $key => $value):?>
																<tr>
																	<td><?php echo $key + 1 ?></td>
																	<td><?php echo $value->titulo_tipoc ?></td>
																	<td><?php echo $value->descripcion_tipoc ?></td>
																	<td width="100" class="td-actions">
																		<a href="#" class="btn btn-danger btn-small delete-tipoc" data-id="<?php echo $value->id_tipoc ?>">
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
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>