<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<!--
<div class="inner_banner">
	
	<?php if(get_field('banner')): ?>
	
		<img src="<?php the_field('banner');?>"/>
		
		
		<?php else :?>
		
		
		<?php if(get_field('banner', 13)):?>
		
			<img src="<?php the_field('banner', 13); ?>"/>
		
		<?php endif;?>
		
	
	<?php endif; ?>

	
</div>
-->

		<div class="inner_content">
			<div id="content" role="main">

			<?php get_template_part( 'loop', 'single' );?>

			</div><!-- #content -->
		</div><!-- inner_content -->


<div class="main_feed">


<h2>Related Posts</h2>
	
<?php 
	$currentID = get_the_ID();
	$freebie_query = new WP_Query( array( 'post__not_in' => array($currentID), 'post_type' => 'operation_creation','posts_per_page' => '40', 'order' => 'DSC' ) ); 
	while($freebie_query->have_posts()) : $freebie_query->the_post(); ?>


<?php include('myloop.php');?>
                	


<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>
	



</div><!-- main_feed -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
