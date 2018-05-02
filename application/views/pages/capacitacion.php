<section id="capacitacion" class="block">
  <section class="row_main">
    <h2 class="title t_a_l"><?php echo $page->titulo ?></h2>
    <hr class="clear" />
    <ul class="list_des" id="cat_filtro_cap">
      <li><a href="#" class="label">Categoría</a>
        <ul>
          <li><a href="#" data-tit="Todos" data-cat="0">Todos</a></li>
          <?php 
            foreach ($categorias as $key => $value) {
          ?>
          <li><a href="#" data-tit="<?php echo $value->descripcion_categoria ?>" data-cat="<?php echo $value->id_category ?>">
            <?php echo $value->descripcion_categoria ?></a></li>
          <?php
            }
          ?>
        </ul>
      </li>
    </ul>
    <ul class="list_des" id="tip_filtro_cap">
      <li><a href="#" class="label">Tipo</a>
        <ul>
          <li><a href="#" data-tit="Todos" data-cat="0">Todos</a></li>
          <?php 
            foreach ($tipos as $key => $value) {
          ?>
          <li><a href="#" data-tit="<?php echo $value->descripcion ?>" data-cat="<?php echo $value->id_type_cap ?>">
            <?php echo $value->descripcion ?></a></li>
          <?php
            }
          ?>
        </ul>
      </li>
    </ul>
    <hr class="clear" />
    <section class="list_capacitacion">
      <?php foreach ($blogs as $key => $value): ?>
      <div class="item item_cap <?php echo (($key + 1) % 3 == 0)?'no_margin_right':'' ?>">
        <a href="<?php echo base_url() ?>capacitacion/d/<?php echo $value->uri ?>" class="img_item">
          <img src="<?php echo base_url() ?>uploads/<?php echo $value->imagen_capacitacion ?>" alt="">
        </a>
        <div class="detail_item">
          <?php 
            $cat = "";
            foreach ($categorias as $k => $v) {
              if ($v->id_category == $value->categoria) {
                $cat = $v->descripcion_categoria;
              }
            }
          ?>
          <span class="category_item"><?php echo $cat ?></span>
          <?php 
            $day = strtotime($value->dia_capacitacion);
          ?>
          <?php 
            $tit = strip_tags($value->titulo_capacitacion);
            if (strlen($tit) > 50) {
                $tit = substr($tit, 0, 50 - 3) . ' ...';
            } else {
                $tit = $tit;
            }
          ?>
          <span class="time_item"><?php echo date('d-m-Y',$day) ?></span>
          <a href="<?php echo base_url() ?>capacitacion/d/<?php echo $value->uri ?>" class="title_item"><?php echo $tit ?></a>
          <?php 
            $det_capacitacion = strip_tags($value->descripcion_capacitacion);
            if (strlen($det_capacitacion) > 130) {
                $det_capacitacion = substr($det_capacitacion, 0, 130 - 3) . ' ...';
            } else {
                $det_capacitacion = $det_capacitacion;
            }
          ?>
          <div class="text_item"><?php echo $det_capacitacion ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </section>
  </section>
</section>