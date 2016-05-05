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

<?php if(is_page(array(11,13,15))):?><!-- this is for the sidbear -->


<div class="main_feed">

<?php if(is_page(11)):?>


	
	<h2>Some Title For the Feed</h2>
	
	
	

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



<?php endif;?>



<?php if(is_page(13)):?>


	
	<h2>Some Title For the Feed</h2>
	
	
	

<?php 
  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query('showposts=8&post_type=art'.'&paged='.$paged); 

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



<?php endif;?>


<?php if(is_page(15)):?>


	
	<h2>Some Title For the Feed</h2>
	
	
	

<?php 
  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query('showposts=8&post_type=freebies_contests'.'&paged='.$paged); 

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



<?php endif;?>

</div><!-- main_feed -->


<?php get_sidebar(); ?>

<?php endif;?>


<?php get_footer(); ?>
