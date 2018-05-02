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
								<form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/submit_cambio">
									<fieldset>	
										<div class="control-group">											
											<label class="control-label" for="titulo_cambio">Título de página (*)</label>
											<div class="controls">
												<input type="text" name="titulo_cambio" class="span6" id="titulo_cambio" value="<?php echo $cambio->titulo_cambio ?>" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="descripcion_cambio">Descripción de la página (*)</label>
											<div class="controls">
												<textarea class="span6 ckeditor" name="descripcion_cambio" id="descripcion_cambio"><?php echo $cambio->descripcion_cambio ?></textarea>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="url_video">Url de video (*)</label>
											<div class="controls">
												<input type="text" name="url_video" class="span6" id="url_video" value="<?php echo $cambio->url_video ?>" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="titulo_como">Título sección ¿como? (*)</label>
											<div class="controls">
												<input type="text" name="titulo_como" class="span6" id="titulo_como" value="<?php echo $cambio->titulo_como ?>" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="descripcion_como">Descripción sección ¿como? (*)</label>
											<div class="controls">
												<textarea class="span6 ckeditor" name="descripcion_como" id="descripcion_como"><?php echo $cambio->descripcion_como ?></textarea>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="titulo_colaborando">Título colaborando (*)</label>
											<div class="controls">
												<input type="text" name="titulo_colaborando" class="span6" id="titulo_colaborando" value="<?php echo $cambio->titulo_colaborando ?>" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="descripcion_colaborando">Descripción colaborando (*)</label>
											<div class="controls">
												<input type="text" name="descripcion_colaborando" class="span6" id="descripcion_colaborando" value="<?php echo $cambio->descripcion_colaborando ?>" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="titulo_difundiendo">Título difundiendo (*)</label>
											<div class="controls">
												<input type="text" name="titulo_difundiendo" class="span6" id="titulo_difundiendo" value="<?php echo $cambio->titulo_difundiendo ?>" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="descripcion_difundiendo">Descripción difundiendo (*)</label>
											<div class="controls">
												<input type="text" name="descripcion_difundiendo" class="span6" id="descripcion_difundiendo" value="<?php echo $cambio->descripcion_difundiendo ?>" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="titulo_aplicando">Título aplicando (*)</label>
											<div class="controls">
												<input type="text" name="titulo_aplicando" class="span6" id="titulo_aplicando" value="<?php echo $cambio->titulo_aplicando ?>" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="descripcion_aplicando">Descripción aplicando (*)</label>
											<div class="controls">
												<input type="text" name="descripcion_aplicando" class="span6" id="descripcion_aplicando" value="<?php echo $cambio->descripcion_aplicando ?>" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="titulo_unete">Título únete (*)</label>
											<div class="controls">
												<input type="text" name="titulo_unete" class="span6" id="titulo_unete" value="<?php echo $cambio->titulo_unete ?>" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="descripcion_unete">Descripción únete (*)</label>
											<div class="controls">
												<input type="text" name="descripcion_unete" class="span6" id="descripcion_unete" value="<?php echo $cambio->descripcion_unete ?>" >
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
					</div>  


				</div>
			</div>
		</div>
	</div>
</div>

