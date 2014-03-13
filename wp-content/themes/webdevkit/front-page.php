<?php get_header(); ?>
		<div class="container home clearfix">
			<div class="title">
				<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				<h5 class="bold">All of your favourite resources for web development in one place. </h5>
				<a class="website" href="index.php?page_id=13">Submit a Website</a>
			</div><!-- title -->
			<div class="imageHovers clearfix" id="imageHovers">
				<?php wp_list_categories('title_li=&hide_empty=0'); ?>
			</div><!-- imageHover -->
		</div><!-- innerwrapper -->

		<div class="background cat-item-3"></div>
		<div class="background cat-item-6"></div>
		<div class="background cat-item-7"></div>
		<div class="background cat-item-8 current"></div>
		<div class="background cat-item-9"></div>
		<div class="background cat-item-10"></div>

<!-- 	</body>
</html> -->
<?php get_footer(); ?>
