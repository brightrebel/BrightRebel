<?php
/*
*
* Renders the work categories filter 
*
*/
?>

<ul id="filter-buttons">
	<li><a href="#" data-filter="*" class="selected"><?php _e('All','ansimuz'); ?></a></li>
	<?php
	$taxonomy = 'work_category';	// for work posts
	$args = array( 'taxonomy' => $taxonomy );
	$categories = get_categories( $args );
	foreach($categories as $cat){
		echo '<li><a href="#" data-filter=".'.$cat->slug.'">'.$cat->name.'</a></li>';
	} ?>
</ul>

