<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">   
          

          <div class="widget ">
            <div class="widget-header">
                <i class="icon-th-large"></i>
                <h3>Capacitación - Editar</h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
              <div class="tabbable">
                <form id="edit-profile" class="form-horizontal"  enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/editCapacitacion/<?php echo $id ?>">
                  <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                  <fieldset>  
                    <div class="control-group">                     
                      <label class="control-label" for="titulo_capacitacion">Título (*)</label>
                      <div class="controls">
                        <input type="text" name="titulo_capacitacion" class="span6" id="titulo_capacitacion" value="<?php echo $capacitacion->titulo_capacitacion ?>" >
                      </div> <!-- /controls -->
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="descripcion_capacitacion">Descripción (*)</label>
                      <div class="controls">
                        <textarea class="span6 ckeditor" name="descripcion_capacitacion" id="descripcion_capacitacion"><?php echo $capacitacion->descripcion_capacitacion ?></textarea>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="tipo">Tipo de capacitación</label>
                      <div class="controls">
                        <select class="span6" name="tipo" id="tipo">
                          <?php foreach ($categorias as $key => $value) {?>
                            <option <?php echo ($capacitacion->categoria === $value->id_category)?"selected":"" ?> value="<?php echo $value->id_category ?>"><?php echo $value->descripcion_categoria ?></option>
                          <?php } ?>
                        </select>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="categoria">Tipo de capacitación</label>
                      <div class="controls">
                        <select class="span6" name="categoria" id="categoria">
                          <?php foreach ($tipos as $key => $value) {?>
                            <option <?php echo ($capacitacion->tipo === $value->id_type_cap)?"selected":"" ?> value="<?php echo $value->id_type_cap ?>"><?php echo $value->descripcion ?></option>
                          <?php } ?>
                        </select>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="dia_capacitacion">Día (*)</label>
                      <div class="controls">
                        <input type="text" name="dia_capacitacion" class="span3 datepicker" id="dia_capacitacion" value="<?php if ($capacitacion->dia_capacitacion !== "31/12/1969") {echo $capacitacion->dia_capacitacion;}?>" >
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="hora_capacitacion">Hora (*)</label>
                      <div class="controls">
                        <input type="text" name="hora_capacitacion" class="span3" id="hora_capacitacion" value="<?php echo $capacitacion->hora_capacitacion ?>" >
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="lugar_capacitacion">Lugar (*)</label>
                      <div class="controls">
                        <input type="text" name="lugar_capacitacion" class="span4" id="lugar_capacitacion" value="<?php echo $capacitacion->lugar_capacitacion ?>" >
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="imagen_capacitacion">Imagen (*)</label>
                      <div class="controls">
                        <input type="file" name="imagen_capacitacion" id="imagen_capacitacion" />
                        <br />
                        <br />
                        <img style="width:40%" src="<?php echo base_url(); ?>uploads/<?php echo $capacitacion->imagen_capacitacion ?>">
                        <br />
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="titulo_fuente">Titulo fuente</label>
                      <div class="controls">
                        <input type="text" name="titulo_fuente" class="span4" id="titulo_fuente" value="<?php echo $capacitacion->titulo_fuente ?>" >
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="fuente">Fuente</label>
                      <div class="controls">
                        <input type="text" name="fuente" class="span4" id="fuente" value="<?php echo $capacitacion->fuente ?>" >
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="estado">Estado</label>
                      <div class="controls">
                        <select class="span6" name="estado" id="estado">
                          <option value="1" <?php echo ($capacitacion->estado === "1")?"selected":"" ?>>Pendiente</option>
                          <option value="2" <?php echo ($capacitacion->estado === "2")?"selected":"" ?>>Publicar</option>
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

