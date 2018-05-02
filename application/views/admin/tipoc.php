<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12"> 
					

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
										</div> <!-- /control-group -->

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

