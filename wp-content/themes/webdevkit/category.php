	<?php get_header(); ?>
		<div class="header">
		<h2><?php single_cat_title(); ?></h2>
			<h5 class="black"><?php echo category_description(); ?></h5>
			
		</div>
		
		<div class="collage container clearfix">

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div class="sitePost">
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
		</div>

      <?php endwhile; // end the loop?>

		</div><!-- .collage -->
	</div><!-- .container -->
<?php get_footer(); ?>