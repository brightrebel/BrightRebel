<?php
/**
 * Standard Post Format
 */
?>

<!-- Standard -->
<article <?php post_class(); ?>>
	<div class="feature-image">
		<?php get_template_part('includes/post-thumbnail') ?>
	</div>
	<div class="box cf">
		<?php get_template_part('includes/post-date') ?>
		
		<div class="excerpt">
			<div class="post-heading" ><?php the_title() ?></div>
			<?php the_content() ?>
		</div>
		
		<?php get_template_part('includes/post-meta') ?>
			
	</div>
</article>
<!-- ENDS  Standard -->

