<section id="capacitacion" class="block">
  <section class="row_main">
    <h2 class="title t_a_l">TAGS</h2>
    <section class="list_capacitacion">
      <?php foreach ($list as $key => $value): ?>
      <div class="item <?php echo (($key + 1) % 3 == 0)?'no_margin_right':'' ?>">
        <a href="<?php echo base_url() ?>investigacion/d/<?php echo $value->uri ?>" class="img_item">
          <img src="<?php echo base_url() ?>uploads/<?php echo $value->imagen_investigacion ?>" alt="">
        </a>
        <div class="detail_item">
          <?php 
            $day = strtotime($value->fecha_investigacion);
          ?>
          <?php 
            $tit = strip_tags($value->titulo_investigacion);
            if (strlen($tit) > 50) {
                $tit = substr($tit, 0, 50 - 3) . ' ...';
            } else {
                $tit = $tit;
            }
          ?>
          <span class="time_item"><?php echo date('d-m-Y',$day) ?></span>
          <a href="<?php echo base_url() ?>capacitacion/d/<?php echo $value->uri ?>" class="title_item"><?php echo $tit ?></a>
          <?php 
            $det_capacitacion = strip_tags($value->descripcion_investigacion);
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