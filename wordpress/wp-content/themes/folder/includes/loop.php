<!-- Feeds all the posts for the blog page -->

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part('includes/content', get_post_format() ) ?>
<?php endwhile; else:  ?>	
	<?php get_template_part('includes/woops') ?>
<?php endif; ?>
