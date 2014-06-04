<?php
/**
 * The footer file, containing the footers and the closing html tag.
 * *
 * @package WordPress
 * @subpackage Metro
 */
?>

	</div><!-- #main -->
	
	<div class="clear-float"></div><!-- #clear-float -->
	
	<footer id="footer" role="contentinfo">
	<div class="clear-float"></div><!-- #clear-float -->
	
	<div id="footer">

	<?php
	/* Add support for the footer based sidebar.
	 * The footer supports up to four sidebar zones.
	 */
	get_sidebar( 'footer' );
	?>

	<div class="footnav">
		<ul>
			<li><a href="<?php bloginfo( 'wpurl' ); ?>">Home</a></li>
			<li><a href="<?php bloginfo( 'wpurl' ); ?>/me/">Me</a></li>
			<li><a href="<?php bloginfo( 'rss2_url' ); ?>">RSS Feed</a></li>
			<li><a href="http://twitter.com/richardjgreen">Twitter</a></li>
			<li><a href="http://linkedin.com/in/richardjgreen">LinkedIn</a></li>
			<li><a href="<?php bloginfo( 'wpurl' ); ?>/contact/">Contact</a></li>
		</ul>
	</div><!-- #footnav -->
	
	<div class="footer-copyright">
		<p>&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?></p>
	</div><!-- #footer-copyright -->
	
	</div><!-- #footer -->
	</footer><!-- footer -->

	<div class="clear-float"></div><!-- #clear-float -->
	
	<?php
	/*
	 * Close the footer section with wp_footer to ensure correct function
	 * of plug-ins and JavaScript objects which try to append to the footer.
	 */
	 wp_footer();
	?>
	
	</div><!-- #wrapper -->
	</div><!-- #wrapperframe -->	

<!-- This page was loaded from the <?php getenv('maws_sitename'); ?> web site. -->

</body>
</html>