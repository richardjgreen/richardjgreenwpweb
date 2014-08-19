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
<title><?php if (function_exists('is_tag') && is_tag()) { echo 'Tag Archive for &quot;'.$tag.'&quot; | '; } elseif (is_archive()) { wp_title(''); echo ' Archive | '; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' | '; } elseif (is_404()) { echo 'Not Found | '; } if (is_home()) { bloginfo('name'); echo ' | '; bloginfo('description'); } else { bloginfo('name'); } ?></title>

<link rel="stylesheet" type="text/css" href="http://themecdn.richardjgreen.net/css/metro.css" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta name="description" content="<?php if ( is_single() ) { single_post_title('', true); } else { bloginfo('name'); echo " - "; bloginfo('description'); } ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>"/>
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>"/>

<meta name="application-name" content="Richard J Green" />
<meta name="msapplication-TileImage" content="http://themecdn.richardjgreen.net/images/msapplication-tileimage.png" />
<meta name="msapplication-TileColor" content="#d80073" />
<link rel="shortcut icon" href="http://themecdn.richardjgreen.net/images/favicon.ico" />
<link rel="apple-touch-icon" sizes="57x57" href="http://themecdn.richardjgreen.net/images/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="114x114" href="http://themecdn.richardjgreen.net/images/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="72x72" href="http://themecdn.richardjgreen.net/images/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="144x144" href="http://themecdn.richardjgreen.net/images/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="60x60" href="http://themecdn.richardjgreen.net/images/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon" sizes="120x120" href="http://themecdn.richardjgreen.net/images/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="76x76" href="http://themecdn.richardjgreen.net/images/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="152x152" href="http://themecdn.richardjgreen.net/images/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="http://themecdn.richardjgreen.net/images/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="http://themecdn.richardjgreen.net/images/favicon-160x160.png" sizes="160x160" />
<link rel="icon" type="image/png" href="http://themecdn.richardjgreen.net/images/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="http://themecdn.richardjgreen.net/images/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="http://themecdn.richardjgreen.net/images/favicon-32x32.png" sizes="32x32" />

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
	<div id="background"></div><!-- #background -->
	<div id="wrapper">
		<header id="masthead" role="banner">
		<div id="header">
			<div id="maintitle">
				<div class="left maintitle-left">

					<?php         
					if ( is_single() OR is_page()) { ?>
						<h2 id="site-title"><div class="maintitle-left-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div><!-- #maintitle-left-title --></h2>
						<h3 id="site-description"><div class="maintitle-left-subtitle"><?php bloginfo( 'description' ); ?></div><!-- #maintitle-left-subtitle --></h3>		
					<?php } else { ?>
						<h1 id="site-title"><div class="maintitle-left-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div><!-- #maintitle-left-title --></h1>
						<h2 id="site-description"><div class="maintitle-left-subtitle"><?php bloginfo( 'description' ); ?></div><!-- #maintitle-left-subtitle --></h2>
					<?php } ?>

					<div class="maintitle-left-livebox">
						<div class="left maintitle-left-date">
							<span><?php echo date("D"); ?></span>
							<span class="day"><?php echo date("j"); ?></span>
						</div><!-- #maintitle-left-date -->
						<div class="maintitle-left-twitterlink"><a href="http://twitter.com/richardjgreen">latest tweet</a></div><!-- #maintitle-left-twitterlink -->
						<div class="maintitle-left-tweet"><?php echo do_shortcode('[get_tweet_timeline username="richardjgreen" number="1" showlinks="true" newwindows="true" nofollow="false" avatar="false"]'); ?></div><!-- #maintitle-left-tieet -->
					</div>
					
				</div><!-- #maintitle-left -->
				
				<nav id="navigation" role="navigation">
				<div class="right mainnav-right">
					<ul>
						<li><a href="<?php bloginfo( 'rss2_url' ); ?>"><div class="metro-cube metro-cube-rss"><img src="http://themecdn.richardjgreen.net/images/metrocube-rss.png" alt="Follow richardjgreen.net via RSS" /><p>rss feed</p></div></a></li>
						<li><div class="blank-metro-cube"></div></li>
						<li><a href="http://twitter.com/richardjgreen"><div class="metro-cube metro-cube-twitter"><img src="http://themecdn.richardjgreen.net/images/metrocube-twitter.png" alt="Follow Richard Green @richardjgreen on Twitter" /><p>Twitter</p></div></a></li>
						<li><a href="http://linkedin.com/in/richardjgreen"><div class="metro-cube metro-cube-linkedin"><img src="http://themecdn.richardjgreen.net/images/metrocube-linkedin.png" alt="Connect with Richard Green on LinkedIn" /><p>LinkedIn</p></div></a></li>
						<li><a href="<?php bloginfo( 'wpurl' ); ?>/me"><div class="metro-cube metro-cube-me"><p>me</p><img src="http://themecdn.richardjgreen.net/images/metrocube-mepicture.png" alt="Read About Richard Green on richardjgreen.net" /></div></a></li>
						<li><a href="<?php bloginfo( 'wpurl' ); ?>/contact"><div class="metro-cube metro-cube-contact"><img src="http://themecdn.richardjgreen.net/images/metrocube-contact.png" alt="Contact Richard Green" /><p>contact</p></div></a></li>
					</ul>

			</div><!-- #mainnav-right --></nav><!-- nav -->
			</div><!-- #maintitle -->
		</div><!-- #header --></header><!-- header -->
		<div id="main">
