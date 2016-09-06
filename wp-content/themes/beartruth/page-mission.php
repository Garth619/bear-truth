<?php
/**
 * Template Name: Mission
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



	<div class="inner_content">
	
		<div id="content">

			<h2><?php the_title();?></h2>
			<?php the_field('mission_content');?>
			
			<?php if(!is_mobile()):?>
			
				<img class="mission_desktop" src="<?php the_field('mission_title_banner');?>"/>
			
			<?php endif;?>
			
			<?php if(is_mobile()):?>
			
				<img class="mission_mobile" src="<?php the_field('mission_title_banner_mobile');?>"/>
			
			<?php endif;?>
			
			
			<?php if(get_field('team_members')):?>
			
				<div class="team_member_wrapper">
			
			<?php while(has_sub_field('team_members')):?>
			
				<div class="single_member_wrapper">
					
					<div class="team_img_wrapper">
					
						<img src="<?php the_sub_field('bio_picture');?>"/>
					
					</div><!-- team_img_wrapper -->
					
					<div class="team_content_wrapper">
						
						<span class="team_title"><?php the_sub_field('bio_title');?></span><!-- team_title -->
						
						<?php the_sub_field('bio_text');?>
						
					</div><!-- team_content_wrapper -->
					
				</div><!-- single_member_wrapper -->
				
			<?php endwhile;?>
			
			</div><!-- team_member_wrapper -->
			
			<?php endif;?>
			
			<img src="<?php the_field('what_we_belive_banner');?>"/>
			
			<div class="bottom_mission_content">
			
				<?php the_field('bottom_mission_content');?>
			
			</div>
			
			
			
			
			

		</div><!-- #content -->
	
	</div><!-- innner_content -->


<?php get_footer(); ?>
