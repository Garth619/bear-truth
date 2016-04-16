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
	
	<div class="my_entry">
		
		<h3>Title</h3>
		<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</span>
		<a class="learn_more" href="">Learn More</a>
		
		<img class="box" src="<?php bloginfo('template_directory');?>/images/entry.jpg"/>
		
		
	</div><!-- my_entry -->
	
</div><!-- main_feed -->

<?php get_footer(); ?>
