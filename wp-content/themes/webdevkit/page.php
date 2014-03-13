<?php get_header(); ?>
<div class="header">
	<h2><?php wp_title(''); ?></h2>
	<h5 class="black"></h5>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	    <?php the_content(); ?>
	<?php endwhile; ?>

</div>

<?php get_footer(); ?>