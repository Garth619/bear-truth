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


<div class="slideshow_wrapper">
		
	
	
	
	<div class="slideshow cycle-slideshow" data-cycle-prev=".prev" data-cycle-next=".next" data-cycle-pager=".my_pager">
	
		<img class="slide" src="<?php bloginfo('template_directory');?>/images/slide.jpg"/>
		<img class="slide" src="<?php bloginfo('template_directory');?>/images/slide.jpg"/>
		<img class="slide" src="<?php bloginfo('template_directory');?>/images/slide.jpg"/>
		<img class="slide" src="<?php bloginfo('template_directory');?>/images/slide.jpg"/>
	
	</div><!-- cycle-slideshow -->
	
	<div class="slide_controls">
	
		<div class="prev slide_buttons"><img src="<?php bloginfo('template_directory');?>/images/left.png"/></div>
		<div class="next slide_buttons"><img src="<?php bloginfo('template_directory');?>/images/right.png"/></div>
		<div class="my_pager"></div>
   
	</div><!-- slide_controls -->
	
	
</div><!-- slideshow -->

<div class="boxes">
	
	<a href=""><img class="box" src="<?php bloginfo('template_directory');?>/images/box1.jpg"/></a>
	<a href=""><img class="box" src="<?php bloginfo('template_directory');?>/images/box2.jpg"/></a>
	<a href=""><img class="box" src="<?php bloginfo('template_directory');?>/images/box3.jpg"/></a>
	
</div><!-- boxes -->

<div class="main_feed">
	
	<h2>Some Title For the Feed</h2>
	
		<div class="my_entry">
		
		<div class="my_entry_content">
		
			<h3><a href="">Title</a></h3>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</span>
			<a class="learn_more" href="">Learn More</a>
		
		</div><!-- my_entry_content -->
		
		<a href=""><img class="entry_image" src="<?php bloginfo('template_directory');?>/images/entry.jpg"/></a>
		
		
	</div><!-- my_entry -->
	
	<div class="my_entry">
		
		<div class="my_entry_content">
		
			<h3><a href="">Title</a></h3>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</span>
			<a class="learn_more" href="">Learn More</a>
		
		</div><!-- my_entry_content -->
		
		<a href=""><img class="entry_image" src="<?php bloginfo('template_directory');?>/images/entry.jpg"/></a>
		
		
	</div><!-- my_entry -->
	
	<div class="my_entry">
		
		<div class="my_entry_content">
		
			<h3><a href="">Title</a></h3>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</span>
			<a class="learn_more" href="">Learn More</a>
		
		</div><!-- my_entry_content -->
		
		<a href=""><img class="entry_image" src="<?php bloginfo('template_directory');?>/images/entry.jpg"/></a>
		
		
	</div><!-- my_entry -->
	
	

	

	
</div><!-- main_feed -->

<div class="sidebar"></div><!-- sidebar -->

<?php get_footer(); ?>
