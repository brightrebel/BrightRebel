<?php 
/*
* Displays the single work/portfolio entry
*
*/
?>

<?php get_header() ?>
<?php the_post() ?>

	<?php 
	// Get post meta data
	$work_name = get_post_meta($post->ID, 'ansimuz_work_name', true);
	$work_date = get_post_meta($post->ID, 'ansimuz_work_date', true);
	$work_url = get_post_meta($post->ID, 'ansimuz_work_url', true);
	?>
	
<!-- portfolio content-->
<div id="portfolio-content" class="cf">        	


	<!-- pager -->
	<div class="project-pager cf">
		<div class="previous-project" ><?php next_post_link('&#8592; %link '); ?></div>
		<div class="next-project" ><?php previous_post_link('%link &#8594;'); ?></div>
	</div><!-- ENDS pager -->

	
	
	<!-- project box -->
	<div id="project-box" class="cf">
		
		<?php get_template_part('includes/work-slider') ?>
	
		<h2 class="heading"><?php the_title() ?></h2>
		
		<!-- Project info -->
		<div class="info">
			<?php if(!empty($work_name)): ?>
				<p><strong><?php _e('Client','ansimuz'); ?></strong><?php echo $work_name ?></p>
			<?php endif  ?>
			<?php if(!empty($work_date)): ?>
				<p><strong><?php _e('Date','ansimuz'); ?></strong><?php echo $work_date ?></p>
			<?php endif  ?>
			<?php if(!empty($work_url)): ?>
				<p><a href="<?php echo $work_url ?>" target="_blank" ><?php _e('Launch Project','ansimuz'); ?></a></p>
			<?php endif  ?>
		</div>
		<!-- ENDS Project info -->
		
		<!-- entry-content -->
		<div class="entry-content"><?php the_content() ?></div>
		<!-- ENDS entry content -->
		
	</div>
	<!-- ENDS project box -->
	
	<?php get_template_part('includes/related-projects') ?>

</div>
<!-- ENDS portfolio content-->
							
<?php get_footer() ?>