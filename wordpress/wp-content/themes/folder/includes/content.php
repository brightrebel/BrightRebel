<?php
/**
 * Standard Post Format
 */
?>

<!-- Standard -->
<article <?php post_class(); ?>>
	<div class="feature-image">
		<a href="<?php the_permalink(); ?>">
			<?php get_template_part('includes/post-thumbnail') ?>
		</a>
	</div>
	<div class="box cf">
		<?php get_template_part('includes/post-date') ?>
		
		<div class="excerpt">
			<a href="<?php the_permalink(); ?>" class="post-heading" ><?php the_title() ?></a>
			<?php the_excerpt() ?>
			
			<p><a href="<?php the_permalink(); ?>" class="learnmore"><?php _e('Learn More','ansimuz'); ?></a></p>
		</div>
		
		<?php get_template_part('includes/post-meta') ?>
			
	</div>
</article>
<!-- ENDS  Standard -->

