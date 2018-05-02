<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12"> 
					

					<div class="widget ">
						<div class="widget-header">
								<i class="icon-th-large"></i>
								<h3>Categoría</h3>
						</div> <!-- /widget-header -->
						<div class="widget-content">
							<div class="tabbable">
								<form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/submitCategoria">
									<fieldset>	
										<div class="control-group">											
											<label class="control-label" for="descripcion_categoria">Descripción (*)</label>
											<div class="controls">
												<input type="text" name="descripcion_categoria" class="span6" id="descripcion_categoria" value="" >
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
								<h3>Categorías</h3>
						</div> <!-- /widget-header -->
						<div class="widget-content">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th width="40"></th>
										<th> Titulo </th>
										<th class="td-actions"> </th>
									</tr>
								</thead>
								<tbody>
									<?php if (count($categorias) > 0) {?>
									<?php foreach ($categorias as $key => $value):?>
									<tr>
										<td><?php echo $key + 1 ?></td>
										<td><?php echo $value->descripcion_categoria ?></td><td width="100" class="td-actions">
											<a href="#" class="btn btn-danger btn-small delete-categoria" data-id="<?php echo $value->id_categoria ?>">
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
