<?php
	/*
	*
	* Retrieve and displays all images 
	* in the gallery from this work post as a slider
	*
	*/ 
	
	$args = array( 
		'post_type' => 'attachment', 
		'numberposts' => -1, 
		'post_status' => null, 
		'post_parent' => $post->ID,
		'post_mime_type' => 'image'
	); 
	$attachments = get_posts($args);
	
	if ($attachments) :
?>
		
	<!-- slider -->
	<div class="project-slider">
	    <div class="flexslider">
		  <ul class="slides">
		    <?php
			foreach ( $attachments as $attachment ) :
				$img_attributes = wp_get_attachment_image_src( $attachment->ID, 'full');
				$this_image = ansimuz_build_image($img_attributes[0], 940);
			?>
				<li><img src="<?php echo $this_image ?>" alt="Image" /></li>
			<?php endforeach ?>
		  </ul>
		</div>
	</div>
	<!-- ENDS slider -->

<?php endif ?>


