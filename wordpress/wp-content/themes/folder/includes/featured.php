<?php if ( get_option('ansimuz_featured_display') != 'true'): ?>


	<?php
	
	// The Query Args
	$args = array(
		'post_type' => get_option('ansimuz_featured_post_type', 'post' ),
		'posts_per_page'=> get_option('ansimuz_featured_nposts', 6 )
	);
	
	
		
	// do the query
	$the_query = new WP_Query( $args );
	
	?>

	<!-- featured -->
	<div class="home-featured">
	
		<?php get_template_part('includes/categories-filter') ?>
		
		<!-- Filter container -->
		<div id="filter-container" class="cf">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
				<?php
				if(get_option('ansimuz_featured_post_type') == 'post'){
					$taxonomy = 'category';		// for posts
				}else{
					$taxonomy = 'work_category';	// for work posts
				}
				
				$the_categories = get_the_terms($post->ID, $taxonomy);
				?>
			
				<figure class="<?php foreach($the_categories as $cat) {  echo $cat->slug . ' ';} ?>" >
					<?php get_template_part('includes/featured-thumbnail') ?>
					<figcaption>
						<a href="<?php the_permalink() ?>"><h3 class="heading"><?php the_title() ?></h3></a>
						<?php the_excerpt() ?>
					</figcaption>
				</figure>
			<?php endwhile ?>
			
			
		</div><!-- ENDS Filter container -->
		
	</div>
	<!-- ENDS featured -->

<?php 
	wp_reset_postdata();
endif
?>
