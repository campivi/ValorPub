<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12"> 
					

					<div class="widget ">
						<div class="widget-header">
								<i class="icon-th-large"></i>
								<h3>Texto del Home</h3>
						</div> <!-- /widget-header -->
						<div class="widget-content">
							<div class="tabbable">
								<form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/updateHome">
									<fieldset>	

										<div class="control-group">											
											<label class="control-label" for="descripcion">Descripción (*)</label>
											<div class="controls">
												<textarea class="span6" name="descripcion" id="descripcion"><?php echo $page->descripcion ?></textarea>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="titulo">Título botón (*)</label>
											<div class="controls">
												<input type="text" name="titulo" class="span6" id="titulo" value="<?php echo $page->titulo ?>" >
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">                     
											<label class="control-label" for="banner">link botón (*)</label>
											<div class="controls">
												<input type="text" name="banner" class="span6" id="banner" value="<?php echo $page->banner ?>" >
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
											<strong>Genial!</strong> Se actualizó correctamente.
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
								<i class="icon-th-large"></i>
								<h3>PDF</h3>
						</div> <!-- /widget-header -->
						<div class="widget-content">
							<div class="tabbable">
								<form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/updatePdf">
									<fieldset>	

										<div class="control-group">											
											<label class="control-label" for="banner">PDF (*)</label>
											<div class="controls">
												<input type="hidden" name="id_page" value="6">
												<input type="file" class="span6" name="banner" id="banner" />
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" for="banner">Archivo actual (*)</label>
											<div class="controls">
												<a href="<?php echo base_url(); ?>uploads/<?php echo $pdf->banner ?>" target="_blank">Link de PDF</a>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<?php if(isset($error) && $error){ ?>
										<div class="alert">
											<button type="button" class="close" data-dismiss="alert">×</button>
											<strong>Alerta!</strong> <?php echo $error; ?>
										</div>
										<?php }?>

										<?php if(isset($success_pdf) && $success_pdf){?>
										<div class="alert alert-success">
											<button type="button" class="close" data-dismiss="alert">×</button>
											<strong>Genial!</strong> Se actualizó correctamente.
										</div>
										<?php } ?>
											<div class="form-actions">
												<button type="submit" class="btn btn-primary">Actualizar</button> 
											</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>  

					<div class="widget ">
						<div class="widget-header">
								<i class="icon-list"></i>
								<h3>Lista</h3>
						</div> <!-- /widget-header -->
						<div class="widget-content">
							<a href="<?php echo base_url(); ?>admin/banner"  class="right btn btn-medium btn-success pull-right">
								<i class="btn-icon-only icon-plus"> </i>
								Agregar
							</a>
							<br />
							<br />
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th width="40"></th>
										<th> Titulo </th>
										<th> Detalle </th>
										<th> link </th>
										<th> Imagen </th>
										<th class="td-actions"> </th>
									</tr>
								</thead>
								<tbody>
									<?php if (count($banner) > 0) {?>
									<?php foreach ($banner as $key => $value):?>
									<tr>
										<td><?php echo $key + 1 ?></td>
										<td><?php echo $value->titulo ?></td>
										<td><?php echo $value->detalle ?></td>
										<td><?php echo $value->link ?></td>
										<td><img style="width:240px" src="<?php echo base_url(); ?>uploads/<?php echo $value->imagen ?>"></td>
										<td width="100" class="td-actions">
                    	<a href="<?php echo base_url(); ?>admin/editBanner/<?php echo $value->id_banner ?>" class="btn btn-small btn-success">
                    		<i class="btn-icon-only icon-pencil"> </i>
                    	</a>
											<a href="#" class="btn btn-danger btn-small delete-banner" data-id="<?php echo $value->id_banner ?>">
												<i class="btn-icon-only icon-remove"> </i>
											</a>
										</td>
									</tr>
								<?php endforeach; ?>
								<?php }else {?>
								<tr>
									<td colspan="6"><center>No hay registros.</center></td>
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

