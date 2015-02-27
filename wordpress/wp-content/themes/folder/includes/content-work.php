<?php
/*
* Content for the work archives, tags and categories
*
*/
?>


<!-- portfolio content-->
<div id="portfolio-content" class="cf">

	<?php get_template_part('includes/work-categories-links') ?>
	
	<!-- Filter container -->
	<div id="filter-container" class="cf">
		
		<?php if(have_posts()) : while( have_posts() ): the_post();  ?>
			
			<?php $the_categories = get_the_terms($post->ID, 'work_category'); ?>				
		
			<figure class="<?php foreach($the_categories as $cat) {  echo $cat->slug . ' ';} ?>" >
				<?php get_template_part('includes/featured-thumbnail') ?>		<figcaption>
					<a href="<?php the_permalink() ?>"><h3 class="heading"><?php the_title() ?></h3></a>
					<div class="portfolio-cat">
						<?php the_terms($post->ID, 'work_category', '',', ',''); ?>
					</div>
				</figcaption>
			</figure>
		
		
		<?php endwhile; else:  ?>	
			<?php get_template_part('includes/woops') ?>
		<?php endif; ?> 
	</div>
	<!-- ENDS Filter container -->

</div>
<!-- ENDS portfolio content-->


<?php get_template_part('includes/pager') ?>