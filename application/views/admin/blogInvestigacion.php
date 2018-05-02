<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12">   
					

					<div class="widget ">
						<div class="widget-header">
								<i class="icon-th-large"></i>
								<h3>Investigación - Agregar</h3>
						</div> <!-- /widget-header -->
						<div class="widget-content">
							<div class="tabbable">
								<form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/addBlogInvestigacion">
									<input type="hidden" name="id" id="id" value="<?php echo $page->id_page ?>">
									<fieldset>  
										<div class="control-group">                     
											<label class="control-label" for="titulo_investigacion">Título (*)</label>
											<div class="controls">
												<input type="text" name="titulo_investigacion" class="span6" id="titulo_investigacion" value="" >
											</div> <!-- /controls -->
										</div> <!-- /control-group -->

										<div class="control-group">                     
											<label class="control-label" for="descripcion_investigacion">Descripción (*)</label>
											<div class="controls">
												<textarea class="span6 ckeditor" name="descripcion_investigacion" id="descripcion_investigacion"></textarea>
											</div> <!-- /controls -->       
										</div> <!-- /control-group -->

										<div class="control-group">                     
											<label class="control-label" for="id_categoria">Categoría</label>
											<div class="controls">
												<select class="span6" name="id_categoria" id="id_categoria">
													<option value="0">------------------------</option>
													<?php foreach ($categorias as $key => $value): ?>
													<option value="<?php echo $value->id_categoria ?>"><?php echo $value->descripcion_categoria ?></option>
													<?php endforeach; ?>
												</select>
											</div> <!-- /controls -->       
										</div> <!-- /control-group -->

										<div class="control-group">                     
											<label class="control-label" for="id_tipo">Tipo</label>
											<div class="controls">
												<select class="span6" name="id_tipo" id="id_tipo">
													<option value="0">------------------------</option>
													<?php foreach ($tipos as $key => $value): ?>
													<option value="<?php echo $value->id_tipo ?>"><?php echo $value->descripcion_tipo ?></option>
													<?php endforeach; ?>
												</select>
											</div> <!-- /controls -->       
										</div> <!-- /control-group -->

										<div class="control-group">                     
											<label class="control-label" for="imagen_investigacion">Imagen (*)</label>
											<div class="controls">
												<input type="file" name="imagen_investigacion" id="imagen_investigacion" />
											</div> <!-- /controls -->       
										</div> <!-- /control-group -->

										<div class="control-group">                     
											<label class="control-label" for="tags">Tags (*)</label>
											<div class="controls">
												<input type="text" name="tags" class="span6" placeholder="Ejemplo : tags1, tags2 .... tags10" id="tags" value="" >
											</div> <!-- /controls -->
										</div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="titulo_fuente">Titulo fuente</label>
                      <div class="controls">
                        <input type="text" name="titulo_fuente" class="span4" id="titulo_fuente" value="" >
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="fuente">Fuente</label>
                      <div class="controls">
                        <input type="text" name="fuente" class="span4" id="fuente" value="" >
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

										<div class="control-group">                     
											<label class="control-label" for="estado_investigacion">Estado</label>
											<div class="controls">
												<select class="span6" name="estado_investigacion" id="estado_investigacion">
													<option value="1">Pendiente</option>
													<option value="2">Publicar</option>
												</select>
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
											<strong>Genial!</strong> Se agregó un nuevo articulo.
										</div>
										<?php } ?>
											<div class="form-actions">
												<button type="submit" class="btn btn-primary">Guardar</button> 
												<a href="<?php echo base_url(); ?>admin/investigacion_admin" class="btn">Cancelar Cambios</a>
											</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</div>

 