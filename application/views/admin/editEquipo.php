<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12"> 
					

					<div class="widget ">
						<div class="widget-header">
								<i class="icon-th-large"></i>
								<h3>Equipo</h3>
						</div> <!-- /widget-header -->
						<div class="widget-content">
							<div class="tabbable">
								<form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/editSubmitEquipo/<?php echo $id ?>">
									<fieldset>	
										<div class="control-group">											
											<label class="control-label" for="nombre">Nombre (*)</label>
											<div class="controls">
												<input type="text" name="nombre" class="span6" id="nombre" value="<?php echo $equipo->nombre ?>" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="cargo">Cargo (*)</label>
											<div class="controls">
												<input type="text" name="cargo" class="span6" id="cargo" value="<?php echo $equipo->cargo ?>" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="descripcion">Descripción (*)</label>
											<div class="controls">
												<textarea class="span6 ckeditor" name="descripcion" id="descripcion"><?php echo $equipo->descripcion ?></textarea>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">                     
											<label class="control-label" for="imagen_equipo">Imagen (*)</label>
											<div class="controls">
												<input type="file" name="imagen_equipo" id="imagen_equipo" />
                        <br />
                        <br />
                        <img style="width:120px" src="<?php echo base_url(); ?>uploads/<?php echo $equipo->imagen_equipo ?>">
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
											<strong>Genial!</strong> Se agregó la nueva categoría.
										</div>
										<?php } ?>
											<div class="form-actions">
												<button type="submit" class="btn btn-primary">Guardar</button> 
                        <a href="<?php echo base_url(); ?>admin/nosotros_admin" class="btn">Cancelar Cambios</a>
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

