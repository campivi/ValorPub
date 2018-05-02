<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Administrador - Valor Público</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/admin/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
				rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/admin/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/admin/css/pages/dashboard.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/admin/js/jqueryui/jquery-ui.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container"> 
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
			</a>
			<a class="brand" href="<?php echo base_url(); ?>admin">Administrador Valor Público </a>
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i> Administrador <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url(); ?>admin/offline">Cerrar Sesión</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!--/.nav-collapse --> 
		</div>
		<!-- /container --> 
	</div>
	<!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
	<div class="subnavbar-inner">
		<div class="container">
			<ul class="mainnav">
				<li class="<?php echo ($nav_admin === "home")?"active":"" ?>"><a href="<?php echo base_url(); ?>admin/home_admin"><i class="icon-chevron-up"></i><span>Home</span> </a> </li>
				<li class="<?php echo ($nav_admin === "nosotros")?"active":"" ?>"><a href="<?php echo base_url(); ?>admin/nosotros_admin"><i class="icon-briefcase"></i><span>Nosotros</span> </a> </li>
				<li class="<?php echo ($nav_admin === "enfoque")?"active":"" ?>"><a href="<?php echo base_url(); ?>admin/enfoque_admin"><i class="icon-eye-open"></i><span>Enfoque</span> </a> </li>
				<li class="<?php echo ($nav_admin === "cambio")?"active":"" ?>"><a href="<?php echo base_url(); ?>admin/cambio_admin"><i class="icon-random"></i><span>Parte del cambio</span> </a></li>
				<li class="<?php echo ($nav_admin === "consultoria")?"active":"" ?>"><a href="<?php echo base_url(); ?>admin/consultoria_admin"><i class="icon-th-large"></i><span>Consultoría</span> </a> </li>
				<li class="<?php echo ($nav_admin === "capacitacion")?"active":"" ?>"><a href="<?php echo base_url(); ?>admin/capacitacion_admin"><i class="icon-upload"></i><span>Capacitación</span> </a> </li>
				<li class="<?php echo ($nav_admin === "investigacion")?"active":"" ?>"><a href="<?php echo base_url(); ?>admin/investigacion_admin"><i class="icon-folder-open"></i><span>Investigación</span> </a> </li>
				<li class="<?php echo ($nav_admin === "herramientas")?"active":"" ?>"><a href="<?php echo base_url(); ?>admin/herramienta_admin"><i class="icon-wrench"></i><span>Herramientas</span> </a> </li>
				<li class="<?php echo ($nav_admin === "categoria")?"active":"" ?>"><a href="<?php echo base_url(); ?>admin/categoria_admin"><i class="icon-list-alt"></i><span>Categoría</span> </a> </li>
				<li class="<?php echo ($nav_admin === "tipo")?"active":"" ?>"><a href="<?php echo base_url(); ?>admin/tipo_admin"><i class="icon-tasks"></i><span>Tipo investig.</span> </a> </li>
				<!--<li class="<?php echo ($nav_admin === "tipo_c")?"active":"" ?>"><a href="<?php echo base_url(); ?>admin/tipoc_admin"><i class="icon-th"></i><span>Tipo consult.</span> </a> </li>-->
			</ul>
		</div>
		<!-- /container --> 
	</div>
	<!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->