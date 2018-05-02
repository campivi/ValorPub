<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12"> 
					

					<div class="widget ">
						<div class="widget-header">
								<i class="icon-th-large"></i>
								<h3>Banner del Home</h3>
						</div> <!-- /widget-header -->
						<div class="widget-content">
							<div class="tabbable">
								<form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/submitBanner">
									<fieldset>	
										<div class="control-group">											
											<label class="control-label" for="titulo">titulo (*)</label>
											<div class="controls">
												<input type="text" name="titulo" class="span6" id="titulo" value="" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="detalle">Detalle (*)</label>
											<div class="controls">
												<textarea name="detalle" class="span6" id="detalle"></textarea>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="link">Link (*)</label>
											<div class="controls">
												<input type="text" name="link" class="span6" id="link" value="" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">                     
											<label class="control-label" for="imagen">Imagen (*)</label>
											<div class="controls">
												<input type="file" name="imagen" id="imagen" />
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
											<strong>Genial!</strong> Se agregó un nuevo banner en el home.
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

				</div>
			</div>
		</div>
	</div>
</div>

