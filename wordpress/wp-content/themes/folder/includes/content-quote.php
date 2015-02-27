<?php
/**
 * Quote Post Format
 */
?>

<!-- Quote -->
<article <?php post_class(); ?>>
	<div class="box cf">
		<?php get_template_part('includes/post-date') ?>
		
		<div class="excerpt">
			<div class="post-heading" ><?php the_content() ?></div>
		</div>
		
		<?php get_template_part('includes/post-meta') ?>
			
	</div>
</article>
<!-- ENDS Quote -->

