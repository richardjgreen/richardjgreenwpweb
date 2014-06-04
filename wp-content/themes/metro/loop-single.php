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

<?php 
/*
 * Look to see if there are posts in the database to retrieve, and if so, retrieve them.
 **
 *
 * If WordPress came back with posts, place anything post related into the post container div.
 * This isolates each post from another and keeps the XHTML tidy.
 **
 * Once all of the posts have been retrieved, the loop will 'stop'.
 * If no posts were returned, then display the following message to that effect.
 */
 ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div id="post" <?php post_class(); ?>>
		<?php the_title('<h1 class="post-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h2>'); ?>
		<?php edit_post_link(__('Edit this Post', 'metro'), ' <span class="edit">', '</span> '); ?>
		
		<div class="post-content">
		<?php the_content(__('Continue Reading', 'metro')); ?>
		<?php wp_link_pages('before=<p class="pages">' . __('Pages:','metro') . '&after=</p>'); ?>
		</div>
		
		<p class="post-byline">
		<span class="author vcard">by <?php the_author_posts_link(); ?> on </span> 
		<abbr class="published" title="<?php the_date(__('l, F jS, Y, g:i a', 'metro')); ?>"><?php the_time(__('F j, Y', 'metro')); ?></abbr>
		</p>
		
		<p class="post-tags">
		<?php the_tags('<span class="tags">' . __('tagged in', 'metro') . ' ', ', ', '</span>'); ?>
		</p>

	<?php /* Add Thumbs Up and Down Voting Buttons to Single Posts */ ?>
	<?=function_exists('thumbs_rating_getlink') ? thumbs_rating_getlink() : ''?>
		
	<?php if ( get_the_author_meta( 'description' ) ) : ?>
					<div class="post-author-info">
						<div class="post-author-title">
							<h2><?php printf( esc_attr__( 'About %s', 'metro' ), get_the_author() ); ?></h2>
						</div><!-- #post-author-title -->
						<div class="post-author-content">
						<div class="post-author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'metro_author_bio_avatar_size', 65 ) ); ?>
						</div><!-- #post-author-avatar -->
						
						<div class="post-author-description">
							<?php the_author_meta( 'description' ); ?>
							<p>Why not connect with  Richard on <a href="https://plus.google.com/101535370426257917208?rel=author">Google+</a> or follow him on <a href="http://twitter.com/richardjgreen">Twitter</a>?</p>
						</div><!-- #post-author-content -->
							
						</div><!-- #post-author-description -->
					</div><!-- #post-author-info -->
	<?php endif; ?>

	<?php wp_related_posts()?>

				</div><!-- #post-## -->

	<?php comments_template( '', true ); ?>
	<?php endwhile; ?>	
	
<?php else: ?>
	<p class="no-posts"><?php _e("Sorry but we couldn't find anything which matched what you were looking for. Try checking the page address you used, or alternatively, try using the links on the right to find what you were looking for.", 'metro'); ?></p>
<?php endif; ?>