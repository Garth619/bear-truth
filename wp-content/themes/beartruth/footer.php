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
		
		<img class="logo_footer" src="<?php bloginfo('template_directory');?>/images/beartruth.png"/>
		
		<div class="footer_col">
		<h2>Follow Us</h2>
		<ul>
			<li>Facebook</li>
			<li>Twitter</li>
			<li>Instagram</li>
			<li>Google Plus</li>
		</ul>
		</div><!-- footet_col1 -->
		
		<div class="footer_col">
		<h2>Company</h2>
		<ul>
			<li>Facebook</li>
			<li>Twitter</li>
			<li>Instagram</li>
			<li>Google Plus</li>
		</ul>
		</div><!-- footet_col1 -->
		
		<span class="copy">&copy; 2016 Bear Truth Collective, LLC. All Rights Reserved</span>
		
	</div><!-- footer -->

<?php wp_footer();?>
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
