<section id="enfoque" class="block block_no_p_b">
  <section class="block_ef_first">
    <section class="row_main">
      <h2 class="title_an"><?php echo $enfoque->titulo ?></h2>
      <div id="text_enfoque" class="text_an"><?php echo $enfoque->descripcion ?></div>
      <div class="block_video_enfoque">
        <h2 id="title_enfoque_2" class="title_an"><?php echo $enfoque->titulo_video ?></h2>
        <div id="text_enfoque_2" class="text_an"><?php echo $enfoque->descripcion_video ?></div>
      </div>
      <div class="block_enfoque">
        <div class="enfoque ef1"></div>
        <div class="enfoque ef2"></div>
        <div class="enfoque ef3"></div>
      </div>
      <?php if(trim($enfoque->url_video) != ""){ ?>
      <div class="block_video_enfoque">
        <div class="video_enfoque">
          <?php $vimeo   = array("http://vimeo.com/", "https://vimeo.com/"); ?> 
          <iframe src="//player.vimeo.com/video/<?php echo str_replace($vimeo, "", $enfoque->url_video) ?>" width="500" height="367" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
        </div>
      </div>
      <?php } ?>
    </section>
  </section>
  <section id="block_ef_1" class="block_ef_second">
    <section class="row_main">
      <h2 class="title_an"><?php echo $enfoque->titulo_block_1 ?></h2>
      <div class="block_ef_second_ll"><span class="left_ll"></span><span class="right_ll"></span>
        <?php echo $enfoque->descripcion_1 ?>
      </div>
      <div class="block_enfoque_int">
        <h2 class="title_an title_an_block_enf"><?php echo $enfoque->titulo_1 ?></h2>
        <?php foreach ($puntos_1 as $key => $value) {?>
        <div class="ef_1_point_<?php echo $key + 1 ?>">
          <div class="point point_<?php echo $key + 1 ?>"></div>
          <div class="text_an text_enf"><?php echo $value->descripcion ?></div>
      </div>
      <?php } ?>
    </section>
  </section>
  <section id="block_ef_2" class="block_ef_three">
    <section class="row_main">
      <h2 class="title_an"><?php echo $enfoque->titulo_block_2 ?></h2>
      <div class="block_ef_second_ll"><span class="left_ll"></span><span class="right_ll"></span>
         <?php echo $enfoque->descripcion_2 ?>
      </div>
      <div class="block_enfoque_int">
        <h2 class="title_an title_an_block_enf"><?php echo $enfoque->titulo_2 ?></h2>
        <?php foreach ($puntos_2 as $key => $value) {?>
        <div class="ef_2_point_<?php echo $key + 1 ?>">
          <div class="point point_<?php echo $key + 1 ?>"></div>
          <div class="text_an text_enf"><?php echo $value->descripcion ?></div>
        </div>
        <?php } ?>
      </div>
    </section>
  </section>
  <section id="block_ef_3" class="block_ef_four">
    <section class="row_main">
      <h2 class="title_an"><?php echo $enfoque->titulo_block_3 ?></h2>
      <div class="block_ef_second_ll"><span class="left_ll"></span><span class="right_ll"></span>
        <p><?php echo $enfoque->descripcion_3 ?></p>
      </div>
      <div class="block_enfoque_int">
        <h2 class="title_an title_an_block_enf"><?php echo $enfoque->titulo_3 ?></h2>
        <?php foreach ($puntos_3 as $key => $value) {?>
        <div class="ef_3_point_<?php echo $key + 1 ?>">
          <div class="point point_<?php echo $key + 1 ?>"></div>
          <div class="text_an text_enf"><?php echo $value->descripcion ?></div>
      </div>
      <?php } ?>
      </div>
    </section>
  </section>
</section>