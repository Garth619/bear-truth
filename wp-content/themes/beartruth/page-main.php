<?php
/**
 * Template Name: Main Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>


<div class="slideshow">
	
	
	<img class="slide" src="<?php bloginfo('template_directory');?>/images/slide.jpg"/>
	
</div><!-- slideshow -->

<div class="boxes">
	
	<img class="box" src="<?php bloginfo('template_directory');?>/images/box1.jpg"/>
	<img class="box" src="<?php bloginfo('template_directory');?>/images/box2.jpg"/>
	<img class="box" src="<?php bloginfo('template_directory');?>/images/box3.jpg"/>
	
</div><!-- boxes -->

<div class="main_feed">
	
	<h2>Some Title For the Feed</h2>
	
</div><!-- main_feed -->

<?php get_footer(); ?>
