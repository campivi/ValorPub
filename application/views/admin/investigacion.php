<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12">   
					

					<div class="widget ">
						<div class="widget-header">
								<i class="icon-th-large"></i>
								<h3>Investigación</h3>
						</div> <!-- /widget-header -->
						<div class="widget-content">
							<div class="tabbable">
								<form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/edit_investigacion">
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
							<a href="<?php echo base_url(); ?>admin/blogInvestigacion"  class="right btn btn-medium btn-success pull-right">
								<i class="btn-icon-only icon-plus"> </i>
								Agregar
							</a>
							<br />
							<br />
							<table id="tb_investigacion" class="table table-striped table-bordered sorted_table">
								<thead>
									<tr>
										<th></th>
										<th> Titulo </th>
										<th> Categoría</th>
										<th> Tipo</th>
										<th> Estado</th>
										<th width="140px"> Imagen</th>
										<th class="td-actions"> </th>
									</tr>
								</thead>
								<tbody>
									<?php if (count($blogs) > 0) {?>
										<?php foreach ($blogs as $key => $value):?>
										<tr data-id="<?php echo $value->id_investigacion ?>">
											<td><?php echo $key + 1 ?></td>
											<td><?php echo $value->titulo_investigacion ?></td>
											<?php
											$category = ""; 
											$type = ""; 
											foreach ($categorias as $i => $v) {
												if ($value->id_categoria == $v->id_categoria) {
													$category = $v->descripcion_categoria;
												}
											}
											foreach ($tipos as $i => $v) {
												if ($value->id_tipo == $v->id_tipo) {
													$type = $v->descripcion_tipo;
												}
											}
											?>
											<td><?php echo $category ?></td>
											<td><?php echo $type ?></td>
											<td><?php echo ($value->estado_investigacion === 1)?'Pendiente':'Publicado' ?></td>
											<td><img style="width:140px" src="<?php echo base_url(); ?>uploads/<?php echo $value->imagen_investigacion ?>"></td>
											<td width="100" class="td-actions">
												<a href="<?php echo base_url(); ?>admin/editBlogInvestigacion/<?php echo $value->id_investigacion ?>" class="btn btn-small btn-success">
													<i class="btn-icon-only icon-pencil"> </i>
												</a>
												<a href="#" class="btn btn-danger btn-small delete-investigacion" data-id="<?php echo $value->id_investigacion ?>">
													<i class="btn-icon-only icon-remove"> </i>
												</a>
											</td>
										</tr>
										<?php endforeach; ?>
									<?php }else{ ?>
									<tr>
										<td colspan="7"> <center>No hay registros.</center></td>
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

