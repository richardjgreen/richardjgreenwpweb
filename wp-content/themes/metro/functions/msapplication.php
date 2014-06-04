<?php
/*
 * Add support for Internet Explorer 9 Pinned Sites in Windows 7.
 * Dynamically displays the 3 most recent posts and static links to about and contact pages, along with Twitter and LinkedIn links.
 */
?>

<meta name="application-name" content="<?php bloginfo( 'name' ); ?>" />
<meta name="msapplication-tooltip" content="<?php bloginfo( 'description' ); ?>" />
<meta name="msapplication-starturl" content="<?php bloginfo( 'wpurl' ); ?>" />
<meta name="msapplication-window" content="width=1280;height=768" />
<meta name="msapplication-navbutton-color" content="#ff0094" />
<meta name="msapplication-task" content="name=Me;action-uri=<?php bloginfo( 'wpurl' ); ?>/me;icon-uri=http://theme.richardjgreen.net/images/ie9pin-about.ico" />
<meta name="msapplication-task" content="name=Contact;action-uri=<?php bloginfo( 'wpurl' ); ?>/contact;icon-uri=http://theme.richardjgreen.net/images/msapplication-contact-all.ico" />
<meta name="msapplication-task" content="name=Twitter;action-uri=http://twitter.com/richardjgreen;icon-uri=http://theme.richardjgreen.net/images/msapplication-twitter-all.ico" />
<meta name="msapplication-task" content="name=LinkedIn;action-uri=http://www.linkedin.com/in/richardjgreen;icon-uri=http://theme.richardjgreen.net/images/msapplication-linkedin-all.ico" />

<script type="text/javascript">
function AddJumpList() {
	try	{
		if (window.external.msIsSiteMode())	
			{
			window.external.msSiteModeClearJumpList();
			window.external.msSiteModeCreateJumplist("Recent Posts");

			<?php
				$featuredPosts = new wp_query();
				$featuredPosts->query("showposts=3");

				while ($featuredPosts->have_posts()) : $featuredPosts->the_post(); ?>
					window.external.msSiteModeAddJumpListItem("<?php the_title(); ?>", "<?php the_permalink() ?>", "http://theme.richardjgreen.net/images/msapplication-post-all.ico");

			<?php endwhile; ?>

			window.external.msSiteModeShowJumplist();
			}
		}
	catch (error)
	{
	}
}

AddJumpList();
</script>
