</div><!-- .container in header-->
<?php if(!is_front_page()):  ?>
	<footer>
		<div class="innerwrapper full">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
			<p>The Dev Kit - Created by <a href="http://www.amyallen.ca" target="_blank">Amy Allen</a></p>
		</div><!-- innerwrapper -->
	</footer>

<?php endif; ?>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/script.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/isotope-master/jquery.isotope.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
