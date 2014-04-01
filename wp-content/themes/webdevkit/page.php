<?php get_header(); ?>
<div class="header">
	<h2> <?php echo get_the_title(); ?></h2>
</div>

<div class="clearfix content">
<div class="form">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	    <?php the_content(); ?>
	<?php endwhile; ?>
</div>
	<?php the_widget('WP_Widget_Tag_Cloud'); ?>
</div>
<?php get_footer(); ?>