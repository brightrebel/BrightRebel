<?php

/*
* Video (Either vimeo or youtube) Widget by ansimuz
*
*/

class Ansimuz_Video extends WP_Widget{

	// Constructor
	function Ansimuz_Video(){
		$widget_ops = array(
			'classname' => 'video',
			'description' => 'Shows a youtube or vimeo widget. Enter the URL to the video from the browser address bar.'
		);
		$this->WP_Widget('ansimuz_video', 'Ansimuz Video', $widget_ops);	
	}// Constructor
	
	
	
	// Widget
	function widget($args, $instance){
		extract($args);
		
		$title = apply_filters('widget_title', $instance['title']);
		if(empty($title)) $title = false;
		
		echo $before_widget;

		if($title):
			echo $before_title;
			echo $title;
			echo $after_title;
		endif; 
		
		
		// VIdeo URL
		$videoURL = ansimuz_parse_video($instance['video']);
		?>
		<div class="video-holder">
			<iframe  src="<?php echo $videoURL ?>" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<?php
	}// Widget
	
	
	
	// Form
	function form($instance){
			
		$title = esc_attr($instance['title']);
		$video = esc_attr($instance['video']);
		
		?>
		
		<p>
			<label for="<?php echo $this->get_field_id('title') ?>">Title: </label>
			<input class="widefat" id="<?php echo $this->get_field_id('title') ?>" name="<?php echo $this->get_field_name('title') ?>" type="text" value="<?php echo $title ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('video') ?>">Video URL: </label>
			<input class="widefat" id="<?php echo $this->get_field_id('video') ?>" name="<?php echo $this->get_field_name('video') ?>" type="text" value="<?php echo $video ?>" />
		</p>
		
		
		<?php
	
	} // Form 
	
	
	
	// Update
	function update($new_instance, $old_instance){
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['video'] = strip_tags($new_instance['video']);
		
		return $instance;
	}// Update
	
	

}// class





















