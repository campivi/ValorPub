			<div class="container">
			<footer>
				<div class="container">
					<section>
						<div class="data">
							<div class="redes-sociales">
								<h3>Síguenos en: </h3>								
								<div class="contactanos-mobile">
									<img src="<?php echo base_url(); ?>assets/images/icon_facebook.png">
									<img src="<?php echo base_url(); ?>assets/images/icon_linkedin.png">
								</div>
							</div>
							<div class="contactanos">
								<h3>Contáctanos: </h3>
								<div class="contactanos-mobile">
									<img src="<?php echo base_url(); ?>assets/images/icon_email.png">
									<h4>info@valorpublico.com</h4>
								</div>
							</div>
						</div>
					</section>
				</div>
				<div class="container">
					<section>
						<div class="firma">
							<hr>
							<h4>© 2017 Asociación Valor Público</h4>
						</div>
					</section>
				</div>
			</footer>
			</div
		</main>
		<input type="hidden" id="uri" value="<?php echo base_url(); ?>">
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
		<script>
		window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"><\/script>')

		</script>
		<script src="<?php echo base_url(); ?>assets/js/plugins.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/js/vendor/owl.carousel.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.waypoints.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.parallax-1.1.3.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/scripts.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/js/home.script.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/js/enfoque.script.js" type="text/javascript"></script>
		<?php if(isset($compartir) && $compartir){ ?>
		<script src="<?php echo base_url(); ?>assets/js/jquery.share.js" type="text/javascript"></script>
		<script type="text/javascript">
		$('#share').share({
			networks: ['facebook','googleplus','twitter'],
			theme: 'square'
		});
		</script>
		<?php } ?>
	</body>
	</html>