<?php 
/*
Template name: Google Map Page
*/
?>

<?php get_header() ?>
	<?php the_post() ?>
	<!-- page content-->
	<div id="page-content" class="cf">        	
    		
    	<!-- entry-content -->	
    	<div class="entry-content cf">
			<h2 class="heading"><?php the_title() ?></h2>
			<?php get_template_part('includes/google-map') ?>
			<?php the_content() ?>
		</div>
	</div>
	<!-- ENDS page-content -->	
			
<?php get_footer() ?>