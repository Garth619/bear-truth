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
			
			<span class="copy">&copy; 2016 Bear Truth Collective, LLC. All Rights Reserved</span>
		</div><!-- inner_footer -->
	</div><!-- footer -->

<?php wp_footer();?>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/cycle2.js"></script>
<script type="text/javascript">
	
	jQuery(document).ready(function(){
		
		
		jQuery('.mobile_menu_wrapper').click(function(){
			
			jQuery('.my_nav').slideToggle(200);
			
			jQuery('.mobile_menu_wrapper').toggleClass('open');
			
		});
		
		
		
					
		
		
		
	});
	
</script>

</body>
</html>
