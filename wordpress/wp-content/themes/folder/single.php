<?php 
/*
* Displays the single post entry
*
*/
?>

<?php get_header() ?>
	<?php the_post() ?>
	
	
	<!-- posts list -->
	<div id="posts-list" class="cf">        	
    		
    		
		<?php get_template_part('includes/single-content') ?>
		<?php comments_template(); ?>
		<?php comment_form(); ?>
	</div>
	<!-- ENDS posts list -->
	
	
	
				
	<?php  get_sidebar() ?>			
	
<?php get_footer() ?>