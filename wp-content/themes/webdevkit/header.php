<!doctype html>
<!-- Custom Web Dev Theme by Amy Allen : http://amyallen.ca -->

<html lang="en">
<head>
	<title><?php wp_title(); ?></title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/script.js"></script>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>

	<body <?php body_class(); ?> > 
	<div class="innerwrapper clearfix">
	<a href="#" class="dropDown">☰</a>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => 'nav' ) ); ?>

	<?php if(!is_front_page()): ?>
	<h2 class="smallLogo"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
	<?php endif; ?>
