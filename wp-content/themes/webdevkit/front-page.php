<?php get_header(); ?>
		<div class="container home clearfix">
			<div class="title">
				<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				<h5 class="white">All of your favourite resources for web development in one place.</h5>
				<a class="website" href="index.php?page_id=13">Submit a Website</a>
			</div><!-- title -->
			
			<div class="imageHovers clearfix" id="imageHovers">
				<?php wp_list_categories('title_li=&hide_empty=0'); ?>
			</div><!-- imageHover -->

			<div class="caption">
				<p>The Dev Kit - Created by <a href="http://www.amyallen.ca" target="_blank">Amy Allen</a></p>
			</div>

		</div><!-- container -->

		<div class="background cat-item-3"></div>
		<div class="background cat-item-6"></div>
		<div class="background cat-item-7"></div>
		<div class="background cat-item-8"></div>
		<div class="background cat-item-9"></div>
		<div class="background cat-item-23 current"></div>


<!-- 	</body>
</html> -->
<?php get_footer(); ?>
