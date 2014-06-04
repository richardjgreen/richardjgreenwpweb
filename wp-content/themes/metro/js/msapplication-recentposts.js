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
					window.external.msSiteModeAddJumpListItem("<?php the_title(); ?>", "<?php the_permalink() ?>", "<?php echo get_bloginfo('stylesheet_directory') ?>/images/msapplication-post-all.ico");

			<?php endwhile; ?>

			window.external.msSiteModeShowJumplist();
			}
		}
	catch (error)
	{
	}
}

AddJumpList();