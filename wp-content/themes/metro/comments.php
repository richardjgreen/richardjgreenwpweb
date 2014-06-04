<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to twentyten_comment which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php comment_form(array(
	'title_reply' => 'What Do You Think, Leave Your Comments.',
	'comment_notes_before' => 'Your name and email address are required, however the web address is optional if you have one. Comments are held for moderation until approved to combat spam.',
	'comment_form_comments_closed' => 'Sorry, but comments on this post have been disabled.',
)); 
?>