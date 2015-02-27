<?php
	// Renders the image for the related work posts
	$image_url = ansimuz_post_image();
	if(!$image_url) 
		return;
	$image_url = ansimuz_build_image($image_url, 440, 170);
?>		
<img src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>" />