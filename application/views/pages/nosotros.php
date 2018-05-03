<!-- QUIENES SOMOS -->
<section>
  <div class="container">
    <div id="somos" class="somos">
      <div class="somos-inner">
        <div class="s-title">
          <h3>¿Quienes</h3><h3>somos?</h3>
        </div>
        <div class="s-desc">
          <h4><?php echo $nosotros->descripcion_nosotros ?></h4>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MISION -->
<section>
  <div class="container">
    <div id="mision" class="mision">
      <div class="mision-inner">
        <div class="m-card">
          <div class="m-title">
            <h3>Nuestra Misión</h3>
            <hr>
          </div>
          <div class="m-desc">
            <h4><?php echo $nosotros->descripcion_misional ?></h4>
          </div>
          <div class="m-link">
            <a href="<?php echo base_url(); ?>nuestro_enfoque" class="button">Nuestro enfoque</a>
          </div>
        </div>
        <div class="m-img">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- VALORES -->
<section>
  <div class="container">
    <div id="valores" class="valores">
      <div class="valores-inner">
        <div class="v-title">
          <span>Nuestros valores</span>
        </div>
        <div class="valores">
          <div class="v-card">
            <p>Compromiso</p>
          </div>
          <div class="v-card">
            <p>Perseverancia</p>
          </div>
          <div class="v-card">
            <p>Integridad</p>
          </div>
          <div class="v-card">
            <p>Diversidad</p>
          </div>
          <div class="v-card">
            <p>Colaboración</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MIEMBROS -->
<section>
  <div class="container">
    <div id="miembros" class="miembros">
      <div class="miembros-inner">
        <div class="m-title">
          <h3>Nuestro</h3><h3>equipo</h3>
        </div>
        <div class="fotos">
          <?php foreach ($equipo as $key => $value) {?>
          <div class="m-card">
            <img src="<?php echo base_url() ?>uploads/<?php echo $value->imagen_equipo ?>" alt="">
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
