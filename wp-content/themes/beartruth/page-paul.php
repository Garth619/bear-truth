<?php
/**
 * Template Name: Paul Page
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
	
	<?php if(get_field('paul_top_banner')): ?>
	
		<img src="<?php the_field('paul_top_banner');?>"/>
		
		
		<?php else :?>
		
		<img src="<?php bloginfo('template_directory');?>/images/placeholder.png"/>
		
	
	<?php endif; ?>
	
</div><!-- inner_banner -->

<div class="inner_content">
	
	<div id="content">

	<h1><?php the_title(); ?></h1>
	<?php the_field('paul_content');?>
	
	
	</div><!-- #content -->
	
	
	
	
</div><!-- innner_content -->


<div class="video_link_wrapper">

<div class="paul_video">
		
		<div class='embed-container'>
			<iframe src='https://www.youtube.com/embed/<?php the_field('paul_youtube_video');?>' frameborder='0' allowfullscreen></iframe>
		</div>
		
	</div><!-- paul_video -->
	
	<div class="paul_link">
		
	<img src="<?php the_field('flipbook_graphic');?>"/>
	
	</div><!-- paul_link -->
	
</div><!-- video_link_wrapper -->

<div class="inner_banner">
	
	<?php if(get_field('middle_banner')): ?>
	
		<img src="<?php the_field('middle_banner');?>"/>
		
		
		<?php else :?>
		
		<img src="<?php bloginfo('template_directory');?>/images/placeholder.png"/>
		
	
	<?php endif; ?>
	
</div><!-- inner_banner -->
	
	<div class="characters">
		
		<h1>Characters</h1>
		
		
		
		
		
		
		<?php if(get_field('characters')): ?>
		
		<?php $count=1; ?>
 
			<?php while(has_sub_field('characters')): ?>
		
			
		
	
					<div class="single_character">
						
						<div class="charater_img_wrapper">
							
							<img class="character_image character_image_<?php echo $count;?>" src="<?php the_sub_field('image');?>">
						
						</div><!-- charater_img_wrapper -->
						
						<div class="charater_content_wrapper">
							
						<h1><?php the_sub_field('character_title');?></h1>
						
						<p><?php the_sub_field('bio');?></p>
							
						</div><!-- charater_content_wrapper -->
						
					</div><!-- single_character -->
 
					<?php $count++; ?>
    	
    	<?php endwhile; ?>
 
		<?php endif; ?>
		
</div><!-- characters -->
	
	

<div class="paul_boxes">
	
	<a href=""><img src="<?php bloginfo('template_directory');?>/images/square.jpg"></a>
	<a href=""><img src="<?php bloginfo('template_directory');?>/images/square.jpg"></a>
	<a href=""><img class="last_box" src="<?php bloginfo('template_directory');?>/images/square.jpg"></a>
	
</div><!-- paul_boxes -->


<div class="main_feed">


</div><!-- main_feed -->







<?php get_footer(); ?>
