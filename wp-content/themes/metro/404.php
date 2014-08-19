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
					<h1 class="post-title"><?php _e( 'Uh Oh (404)', 'metro' ); ?></h1>
					<div class="post-content">
						<p><?php _e( "Seems like you either found a dead link out in the wild or you typed an address which doesn't exist here. ", 'metro' ); ?></p>
						<p><?php _e( "Try using the explore and archive areas in the sidebar over on the right to find what you are looking for or try getting in touch with me if you are after something in particular.", 'metro' ); ?></p>
					</div><!-- .entry-content -->
				</div><!-- #post-0 -->
			
			</div><!-- #content -->
			<?php get_sidebar(); ?>
		</div><!-- #container -->

<?php get_footer(); ?>