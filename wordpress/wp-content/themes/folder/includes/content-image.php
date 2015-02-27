<?php
/**
 * Image Post Format
 */
?>

<!-- Image -->
<article <?php post_class(); ?>>
	<div class="feature-image">
		<?php 
			// Get the paths for the thumnbail and the image
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
		?>
		<a href="<?php echo $image[0] ?>" data-rel="prettyPhoto" title="<?php the_title() ?>">
			<?php get_template_part('includes/post-thumbnail') ?>
		</a>
	</div>
	<div class="box cf">
		<?php get_template_part('includes/post-date') ?>
		
		<div class="excerpt">
			<a href="<?php echo $image[0] ?>" data-rel="prettyPhoto" class="post-heading" title="<?php the_title() ?>" ><?php the_title() ?></a>
			<?php the_content() ?>
		</div>
		
		<?php get_template_part('includes/post-meta') ?>
			
	</div>
</article>
<!-- ENDS Image -->

