<?php

	/*
	 * The functions file, contains all of the functions and new routines to be added to the blog specific to this theme.
	 * largely used for managing the admin options page which allows you to configure your Twitter and LinkedIn accounts and setup your
	 * colour preference. 
	 * *
	 * @package WordPress
	 * @subpackage Metro
	 */

/* Repair Site URLs After a Host Migration */
/* update_option('siteurl','http://richardjgreen.net'); */
/* update_option('home','http://richardjgreen.net'); */

/* Defer All JavaScript Loaded with the wp_enqueue_script Function */
add_filter( 'clean_url', function( $url )
{
    if ( FALSE === strpos( $url, '.js' ) )
    { // not our file
        return $url;
    }
    // Must be a ', not "!
    return "$url' defer='defer";
}, 11, 1 );

/* Redirect Author Archive to About Me Page */
add_action( 'template_redirect', 'my_redirect_author_archive' );

function my_redirect_author_archive() {
	if ( is_author() ) {
		wp_redirect( home_url( 'me' ), 301 );
		exit;
	}
}

/* Apply Custom Smilies */
add_filter('smilies_src','metro_smilies_src', 1, 10);
function metro_smilies_src($img_src, $img, $siteurl){
	return $siteurl.'/wp-content/themes/metro/images/smilies/'.$img;
}

/* Fix XHTML Role Attribute for Search Box */
function valid_search_form ($form) {
    return str_replace('role="search" ', '', $form);
}
add_filter('get_search_form', 'valid_search_form');

/* Load External Functions */
require_once(TEMPLATEPATH . '/functions/admin-menu.php');

function metro_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case '' :
		?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
			<div id="comment-<?php comment_ID(); ?>">
				<div class="comment-author vcard">
					<?php echo get_avatar( $comment, 40 ); ?>
					<?php printf( __( '%s <span class="says">says:</span>', 'metro' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
				</div><!-- .comment-author .vcard -->
				<?php if ( $comment->comment_approved == '0' ) : ?>
				<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'metro' ); ?></em>
				<br />
				<?php endif; ?>

			<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
				<?php printf( __( '%1$s at %2$s', 'metro' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'metro' ), ' ' );
				?>
			</div><!-- .comment-meta .commentmetadata -->

			<div class="comment-body"><?php comment_text(); ?></div>
	
			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</div><!-- #comment-##  -->

		<?php
				break;
			case 'pingback'  :
			case 'trackback' :
		?>
		<li class="post pingback">
			<p><?php _e( 'Pingback:', 'metro' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'metro' ), ' ' ); ?></p>
		<?php
				break;
		endswitch;
	}

	/*
	 * Register the sidebar to permit the application of widgets.
	 */

	if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name' => 'First Sidebar Widget Area',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<div class="metro-smallcube"><h2>',
			'after_title' => '</h2></div>',
		));
 
	if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name' => 'Second Sidebar Widget Area',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<div class="metro-smallcube"><h2>',
			'after_title' => '</h2></div>',
		));
	 
	if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name' => 'First Footer Widget Area',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		));

	if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name' => 'Second Footer Widget Area',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		));
?>