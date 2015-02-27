<script>
// Jquery with no conflict
jQuery(document).ready(function($) {
	
	//##########################################
	// GOOGLE MAP
	//##########################################
	
	map = new GMaps({
		div: '#map',
		lat: <?php echo get_post_meta($post->ID, 'ansimuz_map_lat', true); ?>,
		lng: <?php echo get_post_meta($post->ID, 'ansimuz_map_lng', true); ?>
	});
      
	map.addMarker({
		lat: <?php echo get_post_meta($post->ID, 'ansimuz_marker_lat', true); ?>,
		lng: <?php echo get_post_meta($post->ID, 'ansimuz_marker_lng', true); ?>
	});
});
</script>

<div id="map-holder">
	<div id="map"></div>
	<?php if(get_post_meta($post->ID, 'ansimuz_map_content', true)): ?>
	<div id="map-content">
		<?php echo get_post_meta($post->ID, 'ansimuz_map_content', true) ?>
	</div>
	<?php endif ?>
</div>