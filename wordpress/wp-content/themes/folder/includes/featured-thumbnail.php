<?php
	// Renders the image for the front page featured posts
	
	$image_url = ansimuz_post_image();	
	
	if(!$image_url) return;

	$image_url = ansimuz_build_image($image_url, 500);
?>		
		
<a href="<?php the_permalink() ?>"  class="thumb">
	<img src="<?php echo $image_url ?>" alt="<?php the_title() ?>" />
</a>
