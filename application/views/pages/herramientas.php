<section id="consultoria" class="block">
  <section class="row_main block">
    <h2 class="title t_a_l"><?php echo $page->titulo ?></h2>
    <div class="text_consultoria"><?php echo $page->descripcion ?></div>
    <div class="banner_consultoria">
      <img src="<?php echo base_url() ?>uploads/<?php echo $page->banner ?>" alt="">
    </div>


    <ul class="nav_consultoria">
      <li><a href="#" data-categoria="1" data-page="2" class="active">PROYECTOS EN DESARROLLO</a></li>
      <li><a href="#" data-categoria="2" data-page="2">NUEVOS PROYECTOS</a></li>
    </ul>
    <div id="consultoria_list">
      <?php foreach ($proyectos as $key => $value): ?>
      <div class="block_consultoria">
        <div class="img_consultoria left">
          <img src="<?php echo base_url() ?>uploads/<?php echo $value->banner_proyecto ?>" alt="">
        </div>
        <div class="detail_consultoria">
          <h4><?php echo $value->titulo_proyecto ?></h4>
          <div class="text_consultoria"><?php echo $value->descripcion_proyecto ?></div>
          <?php if ($value->tipo_proyecto == "1") { ?>
          <p class="t_desarrollo">Proyecto en desarrollo </p>
          <?php } else { ?>
          <a href="<?php echo $value->web_proyecto ?>" class="link_web"><?php echo $value->web_proyecto ?></a>
          <?php } ?>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </section>
</section>