</div><!-- .container in header-->
<?php if(!is_front_page()):  ?>
	<div class="innerwrapper">
	<footer>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
	</footer>
	</div><!-- innerwrapper -->

<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
