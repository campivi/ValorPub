<?php
header('Content-Type: text/html; charset=UTF-8'); 
?>
<section id="investigacion" class="block">
  <section class="row_main">
    <h2 class="title t_a_l"><?php echo $page->titulo ?></h2>
    <ul class="list_des" id="cat_filtro">
      <li><a href="#" class="label">Categoría</a>
        <ul>
          <li><a href="#" data-tit="Todos" data-cat="0">Todos</a></li>
          <?php 
            foreach ($categorias as $key => $value) {
          ?>
          <li><a href="#" data-tit="<?php echo $value->descripcion_categoria ?>" data-cat="<?php echo $value->id_categoria ?>">
            <?php echo $value->descripcion_categoria ?></a></li>
          <?php
            }
          ?>
        </ul>
      </li>
    </ul>
    <ul class="list_des" id="tip_filtro">
      <li><a href="#" class="label">Tipo</a>
        <ul>
          <li><a href="#" data-tit="Todos" data-cat="0">Todos</a></li>
          <?php 
            foreach ($tipos as $key => $value) {
          ?>
          <li><a href="#" data-tit="<?php echo $value->descripcion_tipo ?>" data-cat="<?php echo $value->id_tipo ?>">
            <?php echo $value->descripcion_tipo ?></a></li>
          <?php
            }
          ?>
        </ul>
      </li>
    </ul>
    <section class="block_investigacion">
      <section class="list_investigacion left">
        <?php foreach ($blogs as $key => $value) { ?>
        <div class="item <?php echo (($key + 1) % 3 == 0)?'no_margin_right':'' ?>">
        <a href="<?php echo base_url() ?>investigacion/d/<?php echo $value->uri ?>" class="img_item">
          <img src="<?php echo base_url() ?>uploads/<?php echo $value->imagen_investigacion ?>" alt="">
        </a>
        <div class="detail_item">
          <?php 
            $day = strtotime($value->fecha_investigacion);
          ?>
          <span class="time_item"><?php echo date('d-m-Y',$day) ?></span>
          <?php 
            $tit = strip_tags($value->titulo_investigacion);
            if (strlen($tit) > 50) {
                $tit = substr($tit, 0, 50 - 3) . ' ...';
            } else {
                $tit = $tit;
            }
          ?>
          <a href="<?php echo base_url() ?>investigacion/d/<?php echo $value->uri ?>" class="title_item"><?php echo htmlspecialchars($tit) ?></a>
          <?php 
            $det_capacitacion = strip_tags($value->descripcion_investigacion);
            if (strlen($det_capacitacion) > 130) {
                $det_capacitacion = substr($det_capacitacion, 0, 130) . ' ...';
            } else {
                $det_capacitacion = $det_capacitacion;
            }
          ?>
          <div class="text_item"><?php echo utf8_decode($det_capacitacion) ?></div>
        </div>
      </div>
        <?php } ?>
      </section>
      <section class="block_more right"><a href="#" class="btnLeidos active">más leído<span></span></a><a href="#" class="btnComentados">más valorados<span></span></a>
        <div class="block_aj loader" id="more_block">
        </div>
      </section>
    </section>
  </section>
</section>
<footer>