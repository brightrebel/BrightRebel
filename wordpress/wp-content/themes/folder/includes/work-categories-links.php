<?php
/*
*
* Renders the work categories links
*
*/
?>




<ul class="filter-buttons">
	<?php
$taxonomy = 'work_category'; 
$args = array(
    		'taxonomy' => $taxonomy
    		);
$categories = get_categories( $args );
foreach($categories as $cat){
	$sel = ($cat->slug == getCurrentTaxSlug() ) ? 'class="current"' : '';
	echo '<li '.$sel.' ><a href="'.get_term_link($cat->slug, $taxonomy).'">'.$cat->name.'</a></li>';
} ?>
</ul>

