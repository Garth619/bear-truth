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
	
	<img src="<?php bloginfo('template_directory');?>/images/banner.png"/>
	
</div><!-- inner_banner -->

		<div class="inner_content">
			<div id="content" role="main">

			<?php get_template_part( 'loop', 'single' );?>

			</div><!-- #content -->
		</div><!-- inner_content -->

<!-- <div class="sidebar"></div> --><!-- sidebar -->
<?php get_footer(); ?>
