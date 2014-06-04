<?php
/**
 * The template displaying Page Not Found (HTTP 404) error pages.
 *
 * @package WordPress
 * @subpackage Metro
 */
?>

<?php get_header(); ?>

		<div id="container">
			<div id="content">

				<div id="post" class="post error404 not-found">
					<h1 class="post-title"><?php _e( 'Not Found', 'metro' ); ?></h1>
					<div class="post-content">
						<p><?php _e( "Sorry, but the page you requested either cannot be found or is currently unavilable.", 'metro' ); ?></p>
						<p><?php _e( "You can try using the post archives in the sidebar to the right to explore the posts on the site, or you can use the search field to find what you are looking for.", 'metro' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-0 -->
			
			</div><!-- #content -->
			<?php get_sidebar(); ?>
		</div><!-- #container -->
		
	<script type="text/javascript">
		// Set the focus to the search field on the page to allow the user faster access to search.
		document.getElementById('s') && document.getElementById('s').focus();
	</script>


<?php get_footer(); ?>