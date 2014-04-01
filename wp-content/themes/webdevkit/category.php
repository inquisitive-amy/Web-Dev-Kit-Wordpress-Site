<?php get_header(); ?>
		<div class="header">
			<h2><?php single_cat_title(); ?></h2>
			<h5><?php echo category_description(); ?></h5>
		</div><!-- header -->
		<div class="list clearfix">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="sitePost">
	        	<h3><a href="<?php the_field('website_url');  ?>"target="_blank"><?php the_title(); ?></a></h3>
	        	<h6><?php the_tags(" ", " – "); ?></h6>
			</div><!-- sitePost -->
				<?php endwhile; // end the loop?>
		</div><!-- list clearfix-->
	</div><!-- .container -->
<?php get_footer(); ?>