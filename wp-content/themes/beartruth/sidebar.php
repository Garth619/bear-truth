<?php
/**
 * Sidebar template containing the primary and secondary widget areas
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

		<div class="sidebar">
			
			
			
		<div class="sidebar_img">
			
			<img src="<?php bloginfo('template_directory');?>/images/join.jpg"/>
			
		</div><!-- sidebar_img -->
 
	  <div class="form">
		  <?php gravity_form( 2, false, false, false, '', true );?>
		 </div><!-- form -->
	

			
			
			
		</div><!-- sidebar -->