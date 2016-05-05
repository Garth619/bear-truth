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
	
	<?php $mymain_query = new WP_Query( array( 'post_type' => array ( 'main_blog', 'art', 'freebies_contests' ),'posts_per_page' => '3', 'order' => 'DSC' ) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
	
	
	<div class="my_entry">
		
		<div class="my_entry_content">
		
			<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</span>
			<a class="learn_more" href="<?php the_permalink();?>">Learn More</a>
		
		</div><!-- my_entry_content -->
		
		<a href="<?php the_permalink();?>"><img class="entry_image" src="<?php bloginfo('template_directory');?>/images/entry.jpg"/></a>
		
		
	</div><!-- my_entry -->
 
 
 <?php endwhile; ?>
 <?php wp_reset_postdata(); // reset the query ?>

	
</div><!-- main_feed -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
