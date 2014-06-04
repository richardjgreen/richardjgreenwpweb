<?php
/*
 * The loop.
 * This page contains all of the code which makes WordPress tick.
 & It is the code which makes WordPress run to the database and grab the single requested post.
 * *
 * @package WordPress
 * @subpackage Metro
 */
?>

<?php get_header(); ?>

		<div id="container">
			<div id="content">

			<?php
			/* Run the loop to output the post.
			 * If you want to overload this in a child theme then include a file
			 * called loop-single.php and that will be used instead.
			 */
			get_template_part( 'loop', 'single' );
			?>

			</div><!-- #content -->
			<?php get_sidebar(); ?>
		</div><!-- #container -->

<?php get_footer(); ?>