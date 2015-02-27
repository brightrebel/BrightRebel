<?php
	// Renders the image for the posts
	$image_url = ansimuz_post_image();
	if(!$image_url) 
		return;
	$image_url = ansimuz_build_image($image_url, 643);
?>		
<img src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>" />
