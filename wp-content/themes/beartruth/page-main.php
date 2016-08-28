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






<?php if(is_mobile()):?>


<div class="slideshow_wrapper">
		
	<?php if(get_field('mobile_slideshow')): ?>
 
		<div class="slideshow cycle-slideshow" data-cycle-pager=".my_pager" data-cycle-swipe=true data-cycle-swipe-fx=fade data-cycle-slides="> .slide_section">
 
		<?php while(has_sub_field('mobile_slideshow')): ?>
 
    	<a class="slide_section" href="<?php the_sub_field('link');?>">
    		<img class="slide" src="<?php the_sub_field('image');?>"/>
    	</a>
 
			<?php endwhile; ?>
 
		</div><!-- cycle-slideshow -->
	
	<?php endif; ?>
	
	
</div><!-- slideshow -->


<?php endif;?><!-- mobile -->




<?php if(!is_mobile()):?>


<div class="slideshow_wrapper">
		
	<?php if(get_field('slideshow')): ?>
 
		<div class="slideshow cycle-slideshow" data-cycle-prev=".prev" data-cycle-next=".next" data-cycle-pager=".my_pager" data-cycle-swipe=true data-cycle-swipe-fx=scrollHorz data-cycle-slides="> .slide_section">
 
		<?php while(has_sub_field('slideshow')): ?>
 
    	<a class="slide_section" href="<?php the_sub_field('link');?>">
    		<img class="slide" src="<?php the_sub_field('image');?>"/>
    	</a>
 
			<?php endwhile; ?>
 
		</div><!-- cycle-slideshow -->
	
	<div class="slide_controls">
	
		<div class="prev slide_buttons"><img src="<?php bloginfo('template_directory');?>/images/left.png"/></div>
		<div class="next slide_buttons"><img src="<?php bloginfo('template_directory');?>/images/right.png"/></div>
		<div class="my_pager"></div>
   
	</div><!-- slide_controls -->
 
<?php endif; ?>
	
	
</div><!-- slideshow -->


<?php endif;?><!-- desktop -->


<div class="boxes">
	
	<a href="<?php the_field('box_1_link');?>"><img class="box" src="<?php the_field('boxe1');?>"/></a>
	<a href="<?php the_field('box_2_link');?>"><img class="box" src="<?php the_field('boxe2');?>"/></a>
	<a href="<?php the_field('box_3_link');?>"><img class="box" src="<?php the_field('boxe3');?>"/></a>
	
	
</div><!-- boxes -->

<div class="main_feed">
	
	<h2>Some Title For the Feed</h2>
	
	<?php $mymain_query = new WP_Query( array( 'post_type' => array ( 'main_blog', 'operation_creation', 'freebies_contests' ),'posts_per_page' => '6', 'order' => 'DSC' ) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
	
	
<?php include('myloop.php');?>
	
	<?php endwhile; ?>
 <?php wp_reset_postdata(); // reset the query ?>

	
</div><!-- main_feed -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
