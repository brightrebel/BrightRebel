<?php
/*
*
* Renders the categories filter 
*
*/
?>

<ul id="filter-buttons" class="filter-buttons">
	<li><a href="#" data-filter="*" class="selected"><?php _e('All','ansimuz'); ?></a></li>
	<?php
	if(get_option('ansimuz_featured_post_type') == 'post'){
		$taxonomy = 'category';	// for posts
	}else{
		$taxonomy = 'work_category';	// for work posts
	}
	$args = array( 'taxonomy' => $taxonomy );
	$categories = get_categories( $args );
	foreach($categories as $cat){
		echo '<li><a href="#" data-filter=".'.$cat->slug.'">'.$cat->name.'</a></li>';
	} ?>
</ul>

