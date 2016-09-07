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




	
	<?php if(! is_page(9)):?>
	
	
		
		
		
		
		
		<?php if(!is_mobile()):?>
	
			<div class="inner_banner">
	
	
				<?php if(get_field('banner')): ?>
	
					<img src="<?php the_field('banner');?>"/>
		
		
				<?php endif;?><!-- banner -->
	
			</div><!-- inner_banner -->
	
	
		<?php endif;?><!-- desktop -->
		
		
		
		<?php if(is_mobile()):?>
	
			<div class="inner_banner mobile">
	
	
				<?php if(get_field('banner_mobile')): ?>
	
					<img src="<?php the_field('banner_mobile');?>"/>
		
		
				<?php endif;?><!-- banner -->
	
			</div><!-- inner_banner -->
	
	
		<?php endif;?><!-- desktop -->
		
		
		
	
	
	<?php endif; ?><!-- all inner pages except id 9 -->
	


<div class="inner_content">
	
	<div id="content">

			<?php get_template_part( 'loop', 'page' );?>


	
	</div><!-- #content -->
	
	<?php if(is_page(array(11,13,15))):?>
	
	
	<div class="inner_video">
		<div class='embed-container'>
			<iframe src='https://www.youtube.com/embed/<?php the_field('youtube_video');?>' frameborder='0' allowfullscreen></iframe>
		</div>
	</div><!-- inner_video -->
	
	<?php endif;?>
	
	
</div><!-- innner_content -->

<?php if(is_page(array(11,13,15))):?><!-- this is for the sidbear -->


<div class="main_feed">

<?php if(is_page(11)):?>


	
	<h2>Blog Awesomeness</h2>
	
	
	

<?php 
  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query('showposts=8&post_type=main_blog'.'&paged='.$paged); 

  while ($wp_query->have_posts()) : $wp_query->the_post(); 
?>




<?php include('myloop.php');?>


  
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


	
	<h2>Recent Posts</h2>
	
	
	

<?php 
  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query('showposts=8&post_type=operation_creation'.'&paged='.$paged); 

  while ($wp_query->have_posts()) : $wp_query->the_post(); 
?>




<?php include('myloop.php');?>


  
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


	
	<h2>Recent Posts</h2>
	
	
	

<?php 
  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query('showposts=8&post_type=freebies_contests'.'&paged='.$paged); 

  while ($wp_query->have_posts()) : $wp_query->the_post(); 
?>




<?php include('myloop.php');?>

  
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
