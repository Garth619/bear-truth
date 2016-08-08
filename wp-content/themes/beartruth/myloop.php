<div class="my_entry">
		
		<div class="my_entry_content">
		
			<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			<span><?php the_field('blog_excerpt');?></span>
			<a class="learn_more" href="<?php the_permalink();?>">Learn More</a>
		
		</div><!-- my_entry_content -->
		
				<?php $blogimage = wp_get_attachment_image_src(get_field('blog_featured_image'), 'blogimage'); ?>
        <a href="<?php the_permalink();?>"><img class="entry_image" src="<?php echo $blogimage[0]; ?>"/></a>
        <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
		
	</div><!-- my_entry -->