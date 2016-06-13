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
		
		
		<?php if(get_field('banner', 13)):?>
		
			<img src="<?php the_field('banner', 13); ?>"/>
		
		<?php endif;?>
		
	
	<?php endif; ?>

	
</div><!-- inner_banner -->

		<div class="inner_content">
			<div id="content" role="main">

			<?php get_template_part( 'loop', 'single' );?>

			</div><!-- #content -->
		</div><!-- inner_content -->

<!-- <div class="sidebar"></div> --><!-- sidebar -->
<?php get_footer(); ?>
