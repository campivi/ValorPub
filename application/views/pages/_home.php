     
      <!-- BANNER HOME -->
      <!--<a target="_blank" href="<?php echo base_url(); ?>uploads/<?php echo $pdf->banner ?>" class="pdf">&nbsp;</a>-->
      <?php if(count($banner) > 0){ ?>
      <section class="block_banner">
        <div id="slides">
          <?php foreach ($banner as $key => $value): ?>
          <div class="item_slides" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $value->imagen ?>')">
            <section class="row">
              <h3><?php echo $value->titulo ?></h3>
              <?php if ($value->link != "") {?>
              <a href="<?php echo $value->link ?>"><?php echo $value->detalle ?><span>(+)</span></a>
              <?php }else{ ?>
              <p><?php echo $value->detalle ?></p>
              <?php }?>
            </section>
          </div>
        <?php endforeach; ?>
        </div>
      </section>
      <?php } ?>


      <!-- INVESTIGACION HOME -->
      <?php if(count($investigaciones) > 0){ ?>
      <section class="block h_investigacion">
        <h2 class="title"><?php echo $page_investigacion->titulo ?></h2>
        <section class="row">
          <?php  foreach ($investigaciones as $key => $value) :?>
          <div class="list_h_investigacion <?php echo ($key % 2 === 0)?'left':'right' ?>">
            <a href="<?php echo base_url().'investigacion/d/'.$value->uri ?>" class="img_list_h_investigacion left">
              <img src="<?php echo base_url()?>uploads/<?php echo $value->imagen_investigacion ?>" alt="">
            </a>
            <div class="text_h_investigacion left">
              <?php 
                $tit = strip_tags($value->titulo_investigacion);
                if (strlen($tit) > 50) {
                    $tit = substr($tit, 0, 50 - 3) . ' ...';
                } else {
                    $tit = $tit;
                }
              ?>
              <a href="<?php echo base_url().'investigacion/d/'.$value->uri ?>" class="title_h_investigacion"><?php echo $tit ?></a>

              <?php 
                $det_inves = strip_tags($value->descripcion_investigacion);
                if (strlen($det_inves) > 100) {
                    $det_inves = substr($det_inves, 0, 100 - 3) . ' ...';
                } else {
                    $det_inves = $det_inves;
                }
              ?>
              <div class="wrap_text"><?php echo $det_inves ?></div>
              <ul class="list_cat">
                <?php if($value->id_categoria != ""){ ?>
                <?php
                $category = ""; 
                foreach ($categorias as $i => $v) {
                  if ($value->id_categoria == $v->id_categoria) {
                    $category = $v->descripcion_categoria;
                  }
                }
                ?>
                <li><a href="<?php echo base_url().'investigacion/cat/'.$value->id_categoria ?>" class="btn_category"><?php echo $category ?></a></li>
                <?php } if($value->id_tipo != ""){?>
                <?php
                $type = ""; 
                foreach ($tipos as $i => $v) {
                  if ($value->id_tipo == $v->id_tipo) {
                    $type = $v->descripcion_tipo;
                  }
                }
                ?>
                <li><a href="<?php echo base_url().'investigacion/tip/'.$value->id_tipo ?>" class="btn_t"><?php echo $type ?></a></li>
                <?php } ?>
              </ul>
            </div>
          </div>
          <?php endforeach; ?>
          <a href="<?php echo base_url()?>investigacion" class="btn_mas">Ver más</a>
        </section>
      </section>

      <?php } ?>


      <section class="block h_conocenos">
        <section class="row">
          <p><?php echo $page_home->descripcion ?></p><a href="<?php echo $page_home->banner?>" class="btn_mas"><?php echo $page_home->titulo ?></a>
        </section>
      </section>


      
      <?php if (count($proyecto_herramientas) != 0 || count($proyecto_consultoria) != 0) { ?>
      <section class="block h_herr_consul">
        <?php if (count($proyecto_herramientas) > 0) { ?>
          <section class="h_herramientas">
            <div class="block_middle right">
              <h2 class="title"><?php echo $page_herramienta->titulo?></h2>
              <ul>
                <? foreach ($proyecto_herramientas as $key => $value):?>
                <li>
                  <a href="<?php echo base_url()?>herramientas" class="img_herr_consul">
                    <img src="<?php echo base_url()?>uploads/<?php echo $value->banner_proyecto?>" alt="">
                  </a>
                  <a href="<?php echo base_url()?>herramientas" class="title_herr_consul"><?php echo $value->titulo_proyecto?></a>
                  <?php 
                  $det_proyecto = strip_tags($value->descripcion_proyecto);
                  if (strlen($det_proyecto) > 100) {
                      $det_proyecto = substr($det_proyecto, 0, 150 - 3) . ' ...';
                  } else {
                      $det_proyecto = $det_proyecto;
                  }
                ?>
                  <div class="wrap_text"><?php echo $det_proyecto ?></div>
                </li>
                <? endforeach; ?>
              </ul>
              <a href="<?php echo base_url()?>herramientas" class="btn_mas">Ver más</a>
            </div>
          </section>
        <?php } ?>

        <?php if (count($proyecto_consultoria) > 0) { ?>
          <section class="h_consultoria">
            <div class="block_middle left">
              <h2 class="title"><?php echo $page_consultoria->titulo?></h2>
              <ul>
                <? foreach ($proyecto_consultoria as $key => $value):?>
                <li>
                  <a href="<?php echo base_url()?>consultoria" class="img_herr_consul">
                    <img src="<?php echo base_url()?>uploads/<?php echo $value->banner_proyecto?>" alt="">
                  </a>
                  <a href="<?php echo base_url()?>consultoria" class="title_herr_consul"><?php echo $value->titulo_proyecto?></a>
                  <?php 
                  $det_proyecto = strip_tags($value->descripcion_proyecto);
                  if (strlen($det_proyecto) > 150) {
                      $det_proyecto = substr($det_proyecto, 0, 150 - 3) . ' ...';
                  } else {
                      $det_proyecto = $det_proyecto;
                  }
                  ?>
                  <div class="wrap_text"><?php echo $det_proyecto ?></div>
                </li>
                <? endforeach; ?>
              </ul>
              <a href="<?php echo base_url()?>consultoria" class="btn_mas">Ver más</a>
            </div>
          </section>
        <?php } ?>
      </section>
      <?php } ?>


      <?php if (count($lista_capacitacion) > 0) { ?>
      <section class="block h_capacitacion">
        <h2 class="title"><?php echo $page_capacitacion->titulo ?></h2>
        <section class="row">
          <ul>
            <? foreach ($lista_capacitacion as $key => $value):?>
            <li>
              <a href="<?php echo base_url()?>capacitacion/d/<?php echo $value->uri?>" class="img_herr_consul">
                <img src="<?php echo base_url()?>uploads/<?php echo $value->imagen_capacitacion?>" alt="">
              </a>
              <a href="<?php echo base_url()?>capacitacion/d/<?php echo $value->uri?>" class="title_herr_consul">
                <?php echo $value->titulo_capacitacion?>
              </a>
              <?php 
              $det_capacitacion = strip_tags($value->descripcion_capacitacion);
              if (strlen($det_capacitacion) > 150) {
                  $det_capacitacion = substr($det_capacitacion, 0, 150 - 3) . ' ...';
              } else {
                  $det_capacitacion = $det_capacitacion;
              }
              ?>
              <div class="wrap_text"><?php echo $det_capacitacion ?></div>
            </li>
            <? endforeach; ?>
          </ul>
          <a href="<?php echo base_url()?>capacitacion" class="btn_mas">Ver más</a>
        </section>
      </section>
      <?php } ?>