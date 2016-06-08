<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->
	
	<div class="footer">
		
		<div class="inner_footer">
			<img class="logo_footer" src="<?php bloginfo('template_directory');?>/images/beartruth.png"/>
			
			<div class="footer_col">
			<h2>Follow Us</h2>
			<?php wp_nav_menu( array( 'container_class' => 'menu-header2', 'theme_location' => 'footer1' ) ); ?>
			</div><!-- footet_col1 -->
			
			<div class="footer_col">
			<h2>Company</h2>
			<?php wp_nav_menu( array( 'container_class' => 'menu-header3', 'theme_location' => 'footer2' ) ); ?>
			</div><!-- footet_col1 -->
			
			<span class="copy">&copy; 2016 Beartruth Collective, LLC. All Rights Reserved</span>
		</div><!-- inner_footer -->
	</div><!-- footer -->
	
	
<div id="my-welcome-message">
	
	<?php if(is_page(4)) { ?>
	
		<img class="overlay_logo" src="<?php bloginfo('template_directory');?>/images/beartruth.png"/>
		<h2>Join the Beartruth Collective Fan Club for freebies, contests, and other awesomeness!</h2>
		<div class="overlay_form">
	  	<?php gravity_form( 2, false, false, false, '', true );?>
	 	</div><!-- overlay_form -->
	 
	 <?php }?>
	 
	 
	 <?php if(is_page(44)) { ?>
	 
	 
	 		<img class="overlay_logo" width="200" src="<?php bloginfo('template_directory');?>/images/book.jpg"/>
	 		<h2>Paul Book Verbiage</h2>
	 		<div class="overlay_form">
	  		<?php gravity_form( 2, false, false, false, '', true );?>
			</div><!-- overlay_form -->
	 	
	 	
	 <?php }?>
	 
</div><!-- my-welcome-message -->




<?php wp_footer();?>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/cycle2.js"></script>
<?php if(is_page(array(4,44))) { ?>
	
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/jquery.firstVisitPopup.min.js"></script>
	
	<script type="text/javascript">
	
	
	jQuery(document).ready(function(){
		
		jQuery('#my-welcome-message').firstVisitPopup({

	  cookieName : 'homepage',
		showAgainSelector: '#show-message'

	});
		
		
	});
	
	
	
	
	</script>
	
	
	
<?php }?>
<script type="text/javascript">
	
	jQuery(document).ready(function(){
		
		
		jQuery('.mobile_menu_wrapper').click(function(){
			
			jQuery('.my_nav').slideToggle(200);
			
			jQuery('.mobile_menu_wrapper').toggleClass('open');
			
		});
		
		
		jQuery('body').delay(800).queue(function(){
			jQuery(this).addClass('fadein').clearQueue();
		});
		
		
	});
	
</script>

</body>
</html>
