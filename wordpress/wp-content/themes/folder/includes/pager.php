<?php

// Pagination ----------------------------------------------//

	$range = 2;
	$pages = '';
	
	// Fake post nav to avoid warning
	$foo = '';
	if($foo) posts_nav_link();
	
	$showitems = ($range * 2)+1;  
	
	global $paged;
	if(empty($paged)) $paged = 1;
	
	if($pages == ''){
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages){
		 $pages = 1;
	 	}
	} 
?>  

<!-- Pager -->	
<ul class="pager cf">
	<li class="paged"><?php _e('Page','ansimuz'); ?> <?php echo $paged ?> <?php _e('of','ansimuz'); ?> <?php echo $pages ?> </li>
	<?php	
		if(1 != $pages){
			
			// First page
			if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class='first-page'><a href='".get_pagenum_link(1)."'>&laquo;</a></li>";
			// Prev page
			if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a></li>";
			
			// page links
			for ($i=1; $i <= $pages; $i++){
				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
					echo ($paged == $i)? "<li class='active'><a href='#'>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."'  >".$i."</a></li>";
				}
		 	}
			
			// Next page	
			if ($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";  
			
			// Last page
			if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li class='last-page'><a href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
			
		}
	?>


</ul>
