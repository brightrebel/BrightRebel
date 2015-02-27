<?php

/*
*
* Displays the post related to this category a these posts
*
*/

$custom_post = 'work';
$args = array(
	'fields' => 'ids'
); 
$tags = wp_get_post_terms($post->ID, 'work_tags', $args);
$cats = wp_get_post_terms($post->ID, 'work_category', $args);

 
    $related_query = new wp_query(array(
        'tax_query'         => array(
        						'relation' => 'OR',
                                array(
                                    'taxonomy'  => 'work_category',
                                    'field'     => 'id',
                                    'terms'     => $tags
                                ),
                                 array(
                                    'taxonomy'  => 'work_tags',
                                    'field'     => 'id',
                                    'terms'     => $cats
                                )
                            ),
        'post_type'         => $custom_post, 
        'post__not_in'      => array($post->ID), 
    //  'order'             => 'ASC', 
        'orderby'           => 'rand', 
        'showposts'         => 4, 
        'caller_get_posts'  => 1
    ));

?>

<?php if($related_query->have_posts()): ?>


<!-- related -->
<div class="related-projects">
	<h4 class="related-heading"><?php _e('Related Projects','ansimuz'); ?></h4>
	<div class="related-list cf">
		<?php while($related_query->have_posts()) : $related_query->the_post();?>
        
        <figure>
			<a href="<?php the_permalink() ?>" class="thumb"><?php get_template_part('includes/related-thumbnail')?></a>
				<a href="<?php the_permalink() ?>" class="heading"><?php the_title() ?></a>
		</figure>
		
		<?php endwhile ?>
	</div>
</div>
<!-- ENDS related -->
				
				
				
<?php endif ?>


<?php wp_reset_query() ?>