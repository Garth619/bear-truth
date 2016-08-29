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
	
	
	<?php if(!is_mobile()):?>
	
	
	<?php if(get_field('paul_top_banner')): ?>
	
		<a href="<?php the_field('top_banner_link');?>" target="_blank">
			<img src="<?php the_field('paul_top_banner');?>"/>
		</a>
		
	<?php endif; ?>
	
	<?php endif; ?>
	
	
	
	<?php if(is_mobile()):?>
	
	
	<?php if(get_field('top_banner_mobile')): ?>
	
		<a href="<?php the_field('top_banner_link');?>" target="_blank">
			<img src="<?php the_field('top_banner_mobile');?>"/>
		</a>
		
	<?php endif; ?>
	
	<?php endif; ?>
	
	
	
</div><!-- inner_banner -->

<div class="inner_main">

<div class="inner_content">
	
	<div id="content">

	<h1><?php the_title(); ?></h1>
	
	<img class="bar_titles" src="<?php the_field('bar_title_1');?>"/>
	
	<?php the_field('paul_content');?>
	
	
	<?php if(!is_mobile()):?>
	
		<img class="bullets" src="<?php the_field('bullets_img');?>"/>
	
	<?php endif; ?>
	
	<?php if(is_mobile()):?>
	
		<img class="bullets" src="<?php the_field('bullets_image_mobile');?>"/>
	
	<?php endif; ?>
	
	<img class="macedonia" src="<?php bloginfo('template_directory');?>/images/macedonia-1.jpg"/>
	
	</div><!-- #content -->
	
	
</div><!-- innner_content -->


<img class="bar_titles" src="<?php the_field('bar_title_2');?>"/>


<div class="video_link_wrapper">

<div class="paul_video">
		
		<div class='embed-container'>
			<iframe src='https://www.youtube.com/embed/<?php the_field('paul_youtube_video');?>' frameborder='0' allowfullscreen></iframe>
		</div>
		
	</div><!-- paul_video -->
	
	<div class="paul_link">
		
		<?php echo do_shortcode('[flipbook-popup id="paul"]<img src="' . get_field('flipbook_graphic') . '"/>[/flipbook-popup]'); ?>
	
	</div><!-- paul_link -->
	
</div><!-- video_link_wrapper -->




<?php if(!is_mobile()):?>
	
		
		<?php if(get_field('caption_slideshow')): ?>
	
			<div class="slideshow_wrapper">
 
				<div class="slideshow cycle-slideshow" data-cycle-prev=".prev" data-cycle-next=".next" data-cycle-pager=".my_pager" data-cycle-swipe=true data-cycle-swipe-fx=scrollHorz>
 
				<?php while(has_sub_field('caption_slideshow')): ?>
 
    		<img class="slide" src="<?php the_sub_field('image');?>"/>
 
				<?php endwhile; ?>
 
			</div><!-- cycle-slideshow -->
	
			<div class="slide_controls">
	
				<div class="prev slide_buttons"><img src="<?php bloginfo('template_directory');?>/images/left.png"/></div>
				<div class="next slide_buttons"><img src="<?php bloginfo('template_directory');?>/images/right.png"/></div>
				<div class="my_pager"></div>
   
			</div><!-- slide_controls -->
	
		</div><!-- slideshow -->
 
	<?php endif; ?><!-- repeater -->


<?php endif;?><!-- desktop -->



<?php if(is_mobile()):?>
	
		
		<?php if(get_field('caption_slideshow_mobile')): ?>
	
			<div class="slideshow_wrapper" style="margin:0 auto; display:block;max-width:700px;">
 
				<div class="slideshow cycle-slideshow"  data-cycle-pager=".my_pager" data-cycle-swipe=true data-cycle-swipe-fx=fade>
 
				<?php while(has_sub_field('caption_slideshow_mobile')): ?>
 
    		<img class="slide" src="<?php the_sub_field('image');?>"/>
 
				<?php endwhile; ?>
 
			</div><!-- cycle-slideshow -->
	
				
		</div><!-- slideshow -->
 
	<?php endif; ?><!-- repeater -->


<?php endif;?><!-- desktop -->

<div class="free_wrapper">

	<img class="free" src="<?php bloginfo('template_directory');?>/images/free.jpg"/>
	
	<div class="free_form">
		
		<div class="free_form_inner">
		
		<?php gravity_form( 3, false, false, false, '', true );?>
		
		</div><!-- free_form_inner -->
		
		<p class="form_disclaimer">Your free full color PDF download will be sent to your e-mail shortly. Signing up will also automatically make you a new member you a new member  of the <span>Beartruth Fanclub</span>. You will receive additional freebies, contests, and other awesomeness in the future!!! No SPAM!</p>
		
		
	
	</div><!-- free_form -->

</div>


<div class="inner_banner">
	
	<?php if(get_field('middle_banner')): ?>
	
		<a href="<?php the_field('middle_banner_link');?>" target="_blank">
			<img src="<?php the_field('middle_banner');?>"/>
		</a>
		
		
				
	
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
	
	<a href="<?php the_field('box1_link');?>">
		<img src="<?php the_field('box_1');?>">
	</a>
	<a href="<?php the_field('box2_link');?>">
		<img src="<?php the_field('box_2');?>">
	</a>
	
	<a href="<?php the_field('box3_link');?>">
		<img class="last_box" src="<?php the_field('box_3');?>">
	</a>
	
</div><!-- paul_boxes -->


<div class="main_feed">


</div><!-- main_feed -->



</div><!-- inner_main -->



<?php get_footer(); ?>
