<?php
	/*
	 * The header file, containing all of the opening meta tags.
	 * *
	 * @package WordPress
	 * @subpackage Metro
	 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html dir="<?php bloginfo( 'text_direction' ); ?>" xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="content-language" content="en-UK,en" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=yes" />

<meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />

<?php require_once(TEMPLATEPATH . '/functions/win8badge.php'); ?>
<?php require_once(TEMPLATEPATH . '/functions/msapplication.php'); ?>

<link rel="stylesheet" type="text/css" href="http://theme.richardjgreen.net/css/style.css" />
<link rel="stylesheet" type="text/css" href="http://theme.richardjgreen.net/css/metro-light.css" />
<link rel="stylesheet" type="text/css" href="http://theme.richardjgreen.net/css/metro-magenta.css" />
<link rel="icon" type="image/ico" href="http://themecdn.richardjgreen.net/images/favicon.ico" />
<link rel="shortcut icon" type="image/ico" href="http://themecdn.richardjgreen.net/images/favicon.ico" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>"/>
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>"/>


<!--[if lte IE 8]>
	<script src="http://themecdn.richardjgreen.net/javascript/upgrade-ie6.js" defer="defer"></script>
	<script>window.onload=function(){e("http://themecdn.richardjgreen.net/javascript/images/")}</script>
<![endif]-->

<title><?php if (function_exists('is_tag') && is_tag()) { echo 'Tag Archive for &quot;'.$tag.'&quot; | '; } elseif (is_archive()) { wp_title(''); echo ' Archive | '; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' | '; } elseif (is_404()) { echo 'Not Found | '; } if (is_home()) { bloginfo('name'); echo ' | '; bloginfo('description'); } else { bloginfo('name'); } ?></title>

<?php
	/*
	 * Add support for threaded comments JavaScript source.
	 */
	 if ( is_singular() && get_option( 'thread_comments' ) )
	 wp_enqueue_script( 'comment-reply' );

	/*
	 * Close the header section with wp_head to ensure correct function
	 * of plug-ins and JavaScript objects which try to append to the header
	 */
	 wp_head();
?>
</head>

<body <?php body_class(); ?>>

<div id="wrapperframe">
	<div id="wrapper">
		<header id="masthead" role="banner">
		<div id="header">
			<div id="maintitle">
				<div class="maintitle-left">

					<?php         
					if ( is_single() OR is_page()) { ?>
						<h2 id="site-title"><div class="maintitle-left-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div><!-- #maintitle-left-title --></h2>
						<h3 id="site-description"><div class="maintitle-left-subtitle"><?php bloginfo( 'description' ); ?></div><!-- #maintitle-left-subtitle --></h3>		
					<?php } else { ?>
						<h1 id="site-title"><div class="maintitle-left-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div><!-- #maintitle-left-title --></h1>
						<h2 id="site-description"><div class="maintitle-left-subtitle"><?php bloginfo( 'description' ); ?></div><!-- #maintitle-left-subtitle --></h2>
					<?php } ?>

					<div class="maintitle-left-livebox">
						<div class="maintitle-left-date">
							<span><?php echo date("D"); ?></span>
							<span class="day"><?php echo date("j"); ?></span>
						</div><!-- #maintitle-left-date -->
						<div class="maintitle-left-twitterlink"><a href="http://twitter.com/richardjgreen">latest tweet</a></div><!-- #maintitle-left-twitterlink -->
						<div class="maintitle-left-tweet"><?php echo do_shortcode('[get_tweet_timeline username="richardjgreen" number="1" showlinks="true" newwindows="true" nofollow="false" avatar="false"]'); ?></div><!-- #maintitle-left-tieet -->
					</div>
					
				</div><!-- #maintitle-left -->
				
				<nav id="navigation" role="navigation">
				<div class="mainnav-right">
					<ul>
						<li><a href="<?php bloginfo( 'rss2_url' ); ?>"><div class="metro-cube"><img src="http://themecdn.richardjgreen.net/images/metrocube-rss.png" alt="Follow richardjgreen.net via RSS" /><p>rss feed</p></div></a></li>
						<li><div class="blank-metro-cube"></div></li>
						<li><a href="http://twitter.com/richardjgreen"><div class="metro-cube-twitter"><img src="http://themecdn.richardjgreen.net/images/metrocube-twitter.png" alt="Follow Richard Green @richardjgreen on Twitter" /><p>Twitter</p></div></a></li>
						<li><a href="http://linkedin.com/in/richardjgreen"><div class="metro-cube-linkedin"><img src="http://themecdn.richardjgreen.net/images/metrocube-linkedin.png" alt="Connect with Richard Green on LinkedIn" /><p>LinkedIn</p></div></a></li>
						<li><a href="<?php bloginfo( 'wpurl' ); ?>/me"><div class="metro-cube-me"><p>me</p><img src="http://themecdn.richardjgreen.net/images/metrocube-mepicture.png" alt="Read About Richard Green on richardjgreen.net" /></div></a></li>
						<li><a href="<?php bloginfo( 'wpurl' ); ?>/contact"><div class="metro-cube"><img src="http://themecdn.richardjgreen.net/images/metrocube-contact.png" alt="Contact Richard Green" /><p>contact</p></div></a></li>
					</ul>

			</div><!-- #mainnav-right --></nav><!-- nav -->

			</div><!-- #maintitle -->
		</div><!-- #header --></header><!-- header -->
		
		<div id="main">
