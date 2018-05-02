<!DOCTYPE html><!--[if IE 9]><html lang="es" class="no-js lt-ie10"><![endif]--><!--[if IE 8]><html lang="es" class="no-js lt-ie9"><![endif]-->
<!-- [if gt IE 9]><!-->
<html lang="es" class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <?php if(isset($compartir) && $compartir){ ?>
  <title><?php echo $detalle->titulo_investigacion ?> - Valor Público</title>
  <meta property="og:title" content="<?php echo $detalle->titulo_investigacion ?>">
  <meta property="og:description" content="<?php echo $detalle->titulo_investigacion ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo base_url() ?>investigacion/d/<?php echo $detalle->uri ?>">
  <meta property="og:image" content="<?php echo base_url() ?>uploads/<?php echo $detalle->imagen_investigacion ?>">
  <?php }else{ ?>
  <title>Valor Público</title>
  <meta property="og:title" content="Valor Público">
  <meta property="og:description" content="Somos una asociación que promueve la transformación de la gestión pública con la finalidad de contar con gobiernos y organizaciones públicas que produzcan los resultados que esperan los ciudadanos. Buscamos conectar los esfuerzos y energías de todas las personas que desean un verdadero cambio en la gestión pública en el gobierno en su conjunto y en cada una de las instituciones que la componen">
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://valorpublico.org.pe/">
  <meta property="og:image" content="<?php echo base_url(); ?>assets/images/fb.png">
  <?php } ?>	
  <meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/files/favicon.ico">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles2018.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins.css">
  <!--CARROUSEL-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php if(isset($compartir) && $compartir){ ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.share.css">
  <?php } ?>  
  <script>
      //- (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      //- (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      //- m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      //- })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      //- ga('create', 'UA-XXXXXXXX-1', 'auto');
      
      
      </script>
      <script src="<?php echo base_url(); ?>assets/js/modernizr-2.7.1.min.js" type="text/javascript"></script>
    </head>
    <body>
     <main>
      <header>
        <div class="container header">
          <a href="<?php echo base_url(); ?>" class="logo"></a>
          <div class="language">
            <a href="#" class="lang">EN</a>|<a href="#" class="lang">ES</a>
          </div>
          <a href="#" class="btn_mobile">&nbsp;</a>
          
            <!--<ul class="nav_social">
              <li><a href="#" class="ico_lupa"></a>
                <form method="post"  action="<?php echo base_url(); ?>search">
                  <input type="text" name="word" class="search_txt hide" value="">
                </form>
              </li>
              <li><a href="https://www.facebook.com/AValorPublico" target="_blank" class="ico_facebook"></a></li>
              <li><a href="http://www.twitter.com/avalorpublico" target="_blank" class="ico_twitter"></a></li>
              <li><a href="#" class="ico_in"></a></li>
              <li><a href="#" class="ico_youtube"></a></li>
            </ul> -->
          </div>
        </header>
        <div class="container">
          <section class="content_nav">
            <div class="nav">
              <ul>
                <li><a class="<?php echo ($nav === "nosotros")?'active':'' ?>" href="<?php echo base_url(); ?>nosotros">Nosotros</a></li>
                <li><a class="<?php echo ($nav === "enfoque")?'active':'' ?>" href="<?php echo base_url(); ?>nuestro_enfoque">Nuestro enfoque</a></li>
                <li><a class="<?php echo ($nav === "cambio")?'active':'' ?>" href="<?php echo base_url(); ?>se_parte_del_cambio">Sé parte del cambio</a></li>            
                <li><a class="<?php echo ($nav === "consultoria")?'active':'' ?>" href="<?php echo base_url(); ?>consultoria">Nuestros servicios</a></li>
                <li><a class="<?php echo ($nav === "capacitacion")?'active':'' ?>" href="<?php echo base_url(); ?>capacitacion">Nuestro blog</a></li>
              </ul>
            </div>
          </section>
        </div>