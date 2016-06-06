<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=3" />
<link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
	<header>
		
		<div class="inner_header">
		
		<a href="<?php bloginfo('url');?>"><img class="logo" src="<?php bloginfo('template_directory');?>/images/beartruth.png"/></a>
<!-- 		<img class="sc" src="<?php bloginfo('template_directory');?>/images/sc.png"/> -->

		<div class="mobile_menu_wrapper">
			
			<div class="menu_bar"></div><!-- menu_bar -->
			<div class="menu_bar"></div><!-- menu_bar -->
			<div class="menu_bar"></div><!-- menu_bar -->
			
			
			
		</div><!-- mobile_menu_wrapper -->
		
		
		<div class="header_right">
		
			<div class="social_media_wrapper">
				
				<a href="" target="_blank"><img class="social_icon" src="<?php bloginfo('template_directory');?>/images/icon.jpg"/></a>
				<a href="" target="_blank"><img class="social_icon" src="<?php bloginfo('template_directory');?>/images/icon.jpg"/></a>
				<a href="" target="_blank"><img class="social_icon" src="<?php bloginfo('template_directory');?>/images/icon.jpg"/></a>
				<a href="" target="_blank"><img class="social_icon" src="<?php bloginfo('template_directory');?>/images/icon.jpg"/></a>
				
			
				
			</div><!-- social_media_wrapper -->
			
			<div style="display:none" class="sc_desktop_wrapper">
			
				<img class="sc_desktop" src="<?php bloginfo('template_directory');?>/images/sc.png"/>
				<span>Shopping Cart | Checkout</span>
				
			</div><!-- sc_desktop_wrapper -->
			
			<div class="signup">
				
				<span>Sign Up for Latest Updates!</span>
				
				
			</div><!-- signup -->
			
		</div><!-- header_right -->
		
		</div><!-- inner_header -->
		
		<div class="my_nav">
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			
		</div><!-- nav -->
		
		<div class="desktop_nav">
			
			<div class="top_nav_bar">
			
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		
			</div><!-- top_nav_bar -->
			
		</div><!-- desktop_nav -->
		
		
		
	</header>
	

				
				
<div id="main">
