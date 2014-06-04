<?php
/*
 * The loop.
 * This page contains all of the code which makes WordPress tick.
 & It is the code which makes WordPress run to the database and grab all of the posts, pages etc.
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
		<?php the_title('<h2 class="post-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h2>'); ?>
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
		
	</div><!-- #post- -->

	<?php endwhile; ?>

	<?php if (  $wp_query->max_num_pages > 1 ) : ?>
		<div id="nav-below" class="post-navigation">
					<div class="post-nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older Posts', 'metro' ) ); ?></div>
					<div class="post-nav-next"><?php previous_posts_link( __( 'Newer Posts <span class="meta-nav">&rarr;</span>', 'metro' ) ); ?></div>
		</div><!-- #nav-below -->
	<?php endif; ?>

<?php else: ?>
	<p class="no-posts"><?php _e("We're sorry, but nothing was returned for the criteria you requested. You could try using the search, or you could use the tags and categories to find what you were looking for.", 'metro'); ?></p>
<?php endif; ?>
	