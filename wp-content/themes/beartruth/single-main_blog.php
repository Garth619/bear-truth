<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div class="inner_banner">
	
	<?php if(get_field('banner')): ?>
	
		<img src="<?php the_field('banner');?>"/>
		
		
		<?php else :?>
		
		
		<?php if(get_field('banner', 11)):?>
		
			<img src="<?php the_field('banner', 11); ?>"/>
		
		<?php endif;?>
		
	
	<?php endif; ?>

	
</div><!-- inner_banner -->

		<div class="inner_content">
			<div id="content" role="main">

			<?php get_template_part( 'loop', 'single' );?>

			</div><!-- #content -->
		</div><!-- inner_content -->

<div class="main_feed">




	
	<h2>Related Posts</h2>
	
	
	

<?php 
  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query('showposts=8&post_type=main_blog'.'&paged='.$paged); 

  while ($wp_query->have_posts()) : $wp_query->the_post(); 
?>




<div class="my_entry">
		
		<div class="my_entry_content">
		
			<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</span>
			<a class="learn_more" href="<?php the_permalink();?>">Learn More</a>
		
		</div><!-- my_entry_content -->
		
		<a href="<?php the_permalink();?>"><img class="entry_image" src="<?php bloginfo('template_directory');?>/images/entry.jpg"/></a>
		
		
	</div><!-- my_entry -->


  
<?php endwhile; ?>

<nav>
    <?php previous_posts_link('&laquo; Newer') ?>
    <?php next_posts_link('Older &raquo;') ?>
</nav>

<?php 
  $wp_query = null; 
  $wp_query = $temp;  // Reset
?>





</div><!-- main_feed -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
