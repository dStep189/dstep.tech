<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * This theme was generated with Lubith - The Wordpress Theme Generator: http://www.lubith.com
 * It is based on Twenty Ten (Wordpress 3.x default theme).
 *
 */
 
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Aclonica|Cagliostro">
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style-ie8.css" />
<![endif]-->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">

	<div id="header" role="banner"><a id="headlink" href="<?php echo home_url( '/' ); ?>"></a>
				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
				<<?php echo $heading_tag; ?> id="site-title">
					<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</<?php echo $heading_tag; ?>>
				<a id="logo" href="<?php echo home_url( '/' ); ?>"></a>
			<div id="site-description"><?php bloginfo( 'description' ); ?></div>
	
		<div id="access" role="navigation">
			<?php /*  hidden div to preload the hover image */ ?>
			<div id="preloader"></div>
		  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
			<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
			<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</div><!-- #access -->
	
	</div><!-- #header -->
	
	<div id="main">
	