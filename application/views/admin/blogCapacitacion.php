<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">   
          

          <div class="widget ">
            <div class="widget-header">
                <i class="icon-th-large"></i>
                <h3>Capacitación - Agregar</h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
              <div class="tabbable">
                <form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/addBlogCapacitacion">
                  <input type="hidden" name="id" id="id" value="<?php echo $page->id_page ?>">
                  <fieldset>  
                    <div class="control-group">                     
                      <label class="control-label" for="titulo_capacitacion">Título (*)</label>
                      <div class="controls">
                        <input type="text" name="titulo_capacitacion" class="span6" id="titulo_capacitacion" value="" >
                      </div> <!-- /controls -->
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="descripcion_capacitacion">Descripción (*)</label>
                      <div class="controls">
                        <textarea class="span6 ckeditor" name="descripcion_capacitacion" id="descripcion_capacitacion"></textarea>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="categoria">Categoría de capacitación</label>
                      <div class="controls">
                        <select class="span6" name="categoria" id="categoria">
                          <?php foreach ($categorias as $key => $value) {?>
                            <option value="<?php echo $value->id_category ?>"><?php echo $value->descripcion_categoria ?></option>
                          <?php } ?>
                        </select>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="tipo">Tipo de<br> capacitación</label>
                      <div class="controls">
                        <select class="span6" name="tipo" id="tipo">
                          <?php foreach ($tipos as $key => $value) {?>
                            <option value="<?php echo $value->id_type_cap ?>"><?php echo $value->descripcion ?></option>
                          <?php } ?>
                        </select>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="dia_capacitacion">Día (*)</label>
                      <div class="controls">
                        <input type="text" name="dia_capacitacion" class="span3 datepicker" id="dia_capacitacion" value="" >
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="hora_capacitacion">Hora (*)</label>
                      <div class="controls">
                        <input type="text" name="hora_capacitacion" class="span3" id="hora_capacitacion" value="" >
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="lugar_capacitacion">Lugar (*)</label>
                      <div class="controls">
                        <input type="text" name="lugar_capacitacion" class="span4" id="lugar_capacitacion" value="" >
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="imagen_capacitacion">Imagen (*)</label>
                      <div class="controls">
                        <input type="file" name="imagen_capacitacion" id="imagen_capacitacion" />
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
                      <label class="control-label" for="estado">Estado</label>
                      <div class="controls">
                        <select class="span6" name="estado" id="estado">
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
                      <strong>Genial!</strong> Se agregó un nuevo proyecto.
                    </div>
                    <?php } ?>
                      <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Guardar</button> 
                        <a href="<?php echo base_url(); ?>admin/capacitacion_admin" class="btn">Cancelar Cambios</a>
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

