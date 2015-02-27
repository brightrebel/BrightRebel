<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		
			
		<title><?php wp_title( '|', true, 'right'); ?><?php bloginfo('name'); ?> </title>
		
		<!-- Mobile viewport optimized: h5bp.com/viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		
		<?php /* Always have wp_head() just before the closing </head> */ wp_head() ?>  
		
	</head>
	
	
	<body <?php body_class() ?> >
	
		<!-- Options panel Appearance -->
		<?php get_template_part('includes/appearance') ?>
	
		<!-- HEADER -->
		<header>
			<div class="wrapper cf">
				<?php get_template_part('includes/logo') ?>
				<?php get_template_part('includes/nav') ?>
				<?php get_template_part('includes/slider') ?>
			</div>
		</header>
		<!-- ENDS HEADER -->
		
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
