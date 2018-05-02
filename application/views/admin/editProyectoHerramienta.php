<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">   
          

          <div class="widget ">
            <div class="widget-header">
                <i class="icon-th-large"></i>
                <h3>Herramienta - Editar proyecto</h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
              <div class="tabbable">
                <form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/editarProyectoHerramienta/<?php echo $id ?>">
                  <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                  <fieldset>  
                    <div class="control-group">                     
                      <label class="control-label" for="titulo_proyecto">Título (*)</label>
                      <div class="controls">
                        <input type="text" name="titulo_proyecto" class="span6" id="titulo_proyecto" value="<?php echo $proyecto->titulo_proyecto ?>" >
                      </div> <!-- /controls -->
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="descripcion_proyecto">Descripción (*)</label>
                      <div class="controls">
                        <textarea class="span6 ckeditor" name="descripcion_proyecto" id="descripcion_proyecto"><?php echo $proyecto->descripcion_proyecto ?></textarea>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="tipo_proyecto">Tipo de proyecto</label>
                      <div class="controls">
                        <select class="span6" name="tipo_proyecto" id="tipo_proyecto">
                          <option value="1" <?php echo ($proyecto->tipo_proyecto == "1")?"selected":"" ?> >Proyectos en desarrollo</option>
                          <option value="2" <?php echo ($proyecto->tipo_proyecto == "2")?"selected":"" ?>>Nuevos proyectos</option>
                        </select>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="web_proyecto">Web</label>
                      <div class="controls">
                        <input type="text" name="web_proyecto" <?php echo ($proyecto->tipo_proyecto == "1")?"readonly":"" ?> class="span6" id="web_proyecto" value="<?php echo $proyecto->web_proyecto ?>" >
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="banner_proyecto">Imagen (*)</label>
                      <div class="controls">
                        <input type="file" name="banner_proyecto" id="banner_proyecto" />
                        <br />
                        <br />
                        <img style="width:40%" src="<?php echo base_url(); ?>uploads/<?php echo $proyecto->banner_proyecto ?>">
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
                      <strong>Genial!</strong> Se guardo la edición el proyecto.
                    </div>
                    <?php } ?>
                      <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Guardar</button> 
                        <a href="<?php echo base_url(); ?>admin/herramienta_admin" class="btn">Cancelar Cambios</a>
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

