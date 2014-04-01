<!doctype html>
<!-- Custom Web Dev Theme by Amy Allen : http://amyallen.ca -->

<html lang="en">
<head>
	<title><?php wp_title(); ?></title>
	<!--[if !IE 7]>
		<style type="text/css">
			#wrap {display:table;height:100%}
		</style>
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> 
	<?php if(!is_front_page()): ?>
		<div class="navbar">
			<div class="full innerwrapper">
				<a href="#" class="dropDown">&#9776;</a>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => 'nav' ) ); ?>
				<h2 class="smallLogo"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
	<?php endif; ?>
			</div><!-- full -->
		</div><!-- navbar -->

		<div class="full innerwrapper clearfix">

