			<footer>
				<section class="row">
					<div class="footer_facebook"><iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FAValorPublico&amp;width=300&amp;height=300&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=1377151809261628" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:300px;" allowTransparency="true"></iframe></div>
					<div class="block_footer block_footer_contacto">
						<h3 class="title_contacto title_contacto_footer"><span></span>contáctanos</h3>
						<form method="post" action="" id="contact_form">
							<table border="0" cellspacing="0" cellpadding="0" class="tb_contacto">
								<tr>
									<td>
										<input type="text" name="nombre" placeholder="nombres y apellido" class="txt">
									</td>
								</tr>
								<tr>
									<td>
										<input type="text" name="email" placeholder="e-mail" class="txt">
									</td>
								</tr>
								<tr>
									<td>
										<textarea placeholder="Mensaje" name="mensaje" class="txta"></textarea>
									</td>
								</tr>
								<tr>
									<td>
										<a href="#" class="btn_enviar" id="send_contact">Enviar</a>
										<p class="contact_confirm">Gracias por contactarse con nosotros.</p>
									</td>
								</tr>
							</table>
						</form>
					</div>
					<div class="block_footer block_footer_twitter">
						<h3 class="title_contacto title_twitter_footer"><span></span>últimos tweets</h3>
						<ul>
							<?php foreach ($twiites as $key => $value) {?>
							<li><?php echo $value->text ?> <a target="_blank" href="https://twitter.com/Avalorpublico">@Avalorpublico</a></li>
							<?php } ?>
						</ul>
					</div>
				</section>
				<section class="row">
					<p class="copy">&copy; 2014 Asociación Valor Público</p>
				</section>
			</footer>
		</main>
		<input type="hidden" id="uri" value="<?php echo base_url(); ?>">
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"><\/script>')
			
		</script>
		<script src="<?php echo base_url(); ?>assets/js/plugins.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/js/scripts.js" type="text/javascript"></script>
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