<?php
/*
 * Add support for Windows 8 Pinned Site Badge.
 * Provides a notification icon to users with the site pinned to the Start screen that a post has been created in the last 48 hours.
 * The polling value 360 specifies that Windows should check every six hours for updates.
 */
?>

<meta name="msapplication-badge" content="frequency=360;polling-uri=<?php bloginfo( 'stylesheet_directory' ); ?>/functions/win8badge.xml" />

<!-- <script type="text/javascript">
function AddBadge() {
	try	{
		if (window.external.msIsSiteMode())	
			{
			window.external.msSiteModeClearBadge();
			}
		}
	catch (error)
	{
	}
}
</script> -->
