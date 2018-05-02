<?php setlocale(LC_ALL,"es_ES"); ?>
<section id="investigacion" class="block">
	<section class="row_main" id="detalle_capacitacion" data-id="<?php echo $detalle->id_capacitacion ?>">
		<h2 class="title t_a_l title_detail"><?php echo $detalle->titulo_capacitacion ?></h2>
		<ul class="list_cat">
			<?php
      $category = ""; 
      foreach ($categorias as $i => $v) {
        if ($detalle->categoria == $v->id_category) {
          $category = $v->descripcion_categoria;
        }
      }
      ?>
      <li><a href="<?php echo base_url() ?>capacitacion/cat/<?php echo $detalle->categoria ?> " class="btn_category"><?php echo $category ?></a></li>
    	
			<?php
      $type = ""; 
      foreach ($tipos as $i => $v) {
        if ($detalle->tipo == $v->id_type_cap) {
          $type = $v->descripcion;
        }
      }
      ?>
      <li><a href="<?php echo base_url() ?>capacitacion/tip/<?php echo $detalle->tipo ?> " class="btn_category"><?php echo $type ?></a></li>
    	
    </ul>
		<section class="block_investigacion">
			<section class="detail_page left">
				<img src="<?php echo base_url() ?>uploads/<?php echo $detalle->imagen_capacitacion ?>" alt="" class="img_detail">
				<section class="detail_block">
					<?php 
						$day = strtotime($detalle->fecha);
						$mes= date('F',$day);
						if ($mes=="January") $mes="Enero";
						if ($mes=="February") $mes="Febrero";
						if ($mes=="March") $mes="Marzo";
						if ($mes=="April") $mes="Abril";
						if ($mes=="May") $mes="Mayo";
						if ($mes=="June") $mes="Junio";
						if ($mes=="July") $mes="Julio";
						if ($mes=="August") $mes="Agosto";
						if ($mes=="September") $mes="Setiembre";
						if ($mes=="October") $mes="Octubre";
						if ($mes=="November") $mes="Noviembre";
						if ($mes=="December") $mes="Diciembre";
					?>
					<div class="time"><?php echo $mes.' '.date('d',$day).', '.date('Y',$day) ?></div>
					<div class="wrap_text"><?php echo $detalle->descripcion_capacitacion ?></div>
					<?php if ($detalle->fuente != "") {?>
					<p class="fuente_link">FUENTE: <a href="<?php echo $detalle->fuente ?>" target="_blank"><?php echo $detalle->titulo_fuente ?></a></p>
					<?php } ?>
					<div class="block_event">
						<?php 
							$day = strtotime($detalle->dia_capacitacion);
							$mes= date('F',$day);
							if ($mes=="January") $mes="Enero";
							if ($mes=="February") $mes="Febrero";
							if ($mes=="March") $mes="Marzo";
							if ($mes=="April") $mes="Abril";
							if ($mes=="May") $mes="Mayo";
							if ($mes=="June") $mes="Junio";
							if ($mes=="July") $mes="Julio";
							if ($mes=="August") $mes="Agosto";
							if ($mes=="September") $mes="Setiembre";
							if ($mes=="October") $mes="Octubre";
							if ($mes=="November") $mes="Noviembre";
							if ($mes=="December") $mes="Diciembre";
						?>
						<p><span>Día:</span><?php echo date('d',$day).' - '.$mes.' - '.date('Y',$day) ?></p>
						<p><span>Hora:</span><?php echo $detalle->hora_capacitacion ?></p>
						<p><span>Lugar:</span><?php echo $detalle->lugar_capacitacion ?></p>
						<div class="aside-social">
							<h3 class="title_interes">VALORA ESTE POST</h3>
	            <ul class="stars" id="stars-<?php echo $detalle->id_capacitacion ?>">
	          		<input type="hidden" id="video_rating" value="0">
	              <li class="left">
								  <a id="star-points-1" class="star"></a>
								</li>
								<li class="left">
								  <a id="star-points-2" class="star"></a>
								</li>
								<li class="left">
								  <a id="star-points-3" class="star"></a>
								</li>
								<li class="left">
								  <a id="star-points-4" class="star"></a>
								</li>
								<li class="left">
								  <a id="star-points-5" class="star"></a>
								</li>
	            </ul>   
	            <br />  
	            <br />  
	        	</div>
					</div>
					<div class="block_interes">
						<h3 class="title_interes">TAMBIÉN TE PUEDE INTERESAR</h3>
						<?php foreach ($intereses as $key => $value): ?>
						<?php 
							$day = strtotime($value->dia_capacitacion);
							$mes= date('F',$day);
							if ($mes=="January") $mes="Enero";
							if ($mes=="February") $mes="Febrero";
							if ($mes=="March") $mes="Marzo";
							if ($mes=="April") $mes="Abril";
							if ($mes=="May") $mes="Mayo";
							if ($mes=="June") $mes="Junio";
							if ($mes=="July") $mes="Julio";
							if ($mes=="August") $mes="Agosto";
							if ($mes=="September") $mes="Setiembre";
							if ($mes=="October") $mes="Octubre";
							if ($mes=="November") $mes="Noviembre";
							if ($mes=="December") $mes="Diciembre";
						?>
						<div class="item_small <?php echo ($key == 2)?'no_margin_right':'' ?>">
							<a href="<?php echo base_url() ?>capacitacion/d/<?php echo $value->uri ?>" class="img_interes">
								<img src="<?php echo base_url() ?>uploads/<?php echo $value->imagen_capacitacion ?>" alt=""><span></span>
							</a>
							<div class="time_item"><?php echo $mes.' '.date('d',$day).', '.date('Y',$day) ?></div>
							<a href="<?php echo base_url() ?>capacitacion/d/<?php echo $value->uri ?>" class="link_interes"><?php echo $value->titulo_capacitacion ?> </a>
						</div>
					<?php endforeach; ?>

					</div>
					<div class="block_comentario">
						<h3 class="title_comentario">DEJA UN COMENTARIO</h3>
						<div class="btnComentario">&nbsp;</div>
						<form action="" method="post" id="frm_comentarios">
							<table cellspacing="0" cellpadding="0" border="0" class="tb_comentario">
								<tr>
									<td>
										<input type="hidden" name="id" id="id" value="<?php echo $detalle->id_capacitacion ?>">
										<input type="text" placeholder="NOMBRE" name="nombre" id="nombre" class="txt">
									</td>
								</tr>
								<tr>
									<td>
										<input type="text" placeholder="EMAIL" name="email" id="email" class="txt">
									</td>
								</tr>
								<tr>
									<td>
										<textarea placeholder="MENSAJE" name="mensaje" id="mensaje" class="txt txta"></textarea>
									</td>
								</tr>
							</table>
							<a href="#" class="btnEnviar btnEnviarComentario">&nbsp;</a>
						</form>
					</div>
				</section>
			</section>
			<section class="block_more right"><a href="#" class="btnLeidos active">más leído<span></span></a><a href="#" class="btnComentados">más comentados<span></span></a>
				<div class="block_aj loader" id="more_block">
					<!--<div class="item_aj"><a href="#" class="img_aj left"><img src="http://localhost:8080/valor_publico//assets/source/images/img_top.jpg" alt=""></a>
						<div class="text_aj left"><span>5.</span><a href="#" class="link_aj">Lorem ipsum dolor sit amet.</a></div>
					</div>-->
				</div>
			</section>
		</section>
	</section>
</section>