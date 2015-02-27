<?php
/**
 * Video Post Format
 */
?>


<!-- Video -->
<article <?php post_class(); ?>>
	<div class="video-container">
		<iframe  src="<?php echo ansimuz_parse_video(get_the_content()) ?>" ></iframe>
	</div>
	<div class="box cf">
		<?php get_template_part('includes/post-date') ?>
		
		<div class="excerpt">
			<a href="<?php echo get_the_content() ?>" class="post-heading" ><?php the_title() ?></a>
		</div>
		
		<?php get_template_part('includes/post-meta') ?>
			
	</div>
</article>
<!-- ENDS Video -->

