	<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12"> 
					

					<div class="widget ">
						<div class="widget-header">
								<i class="icon-th-large"></i>
								<h3>Puntos</h3>
						</div> <!-- /widget-header -->
						<div class="widget-content">
							<div class="tabbable">
								<form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/submitEditPoint/<?php echo $id ?>">
									<fieldset>	
										<div class="control-group">											
											<label class="control-label" for="descripcion">Descripcion (*)</label>
											<div class="controls">
												<textarea name="descripcion" class="span6 ckeditor" id="descripcion"><?php echo $punto->descripcion ?></textarea>
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
												<button type="Guardar" class="btn btn-primary">Guardar</button> 
                        <a href="<?php echo base_url(); ?>admin/enfoque_admin" class="btn">Cancelar Cambios</a>
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

