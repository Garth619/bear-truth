<?php
/**
 * Template Name: Interior Page
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



<div class="inner_banner">
	
	<img src="<?php bloginfo('template_directory');?>/images/banner.png"/>
	
</div><!-- inner_banner -->

<div class="inner_content">
	
	<div id="content">

			<?php get_template_part( 'loop', 'page' );?>

		</div><!-- #content -->
	
	
</div><!-- innner_content -->
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
