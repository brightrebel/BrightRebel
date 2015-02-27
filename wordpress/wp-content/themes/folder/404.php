<?php 
/*
* Not Found Page
*
*/
?>

<?php get_header() ?>
	<?php the_post() ?>
	<!-- page-content -->
	<div id="page-content" class="cf">        	
    		
    	<!-- entry-content -->	
    	<div class="entry-content cf">
			<?php echo get_option('ansimuz_404') ?>
		</div>
		<!-- ENDS entry-content -->
		
	</div>
	<!-- ENDS page-content -->	
<?php get_footer() ?>