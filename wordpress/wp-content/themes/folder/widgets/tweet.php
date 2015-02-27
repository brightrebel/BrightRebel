<?php

/*
* Twitter Feed Widget by ansimuz
*
*/

class Ansimuz_Tweet extends WP_Widget{

	// Constructor
	function Ansimuz_Tweet(){
		$widget_ops = array(
			'classname' => 'tweet',
			'description' => 'Feed latest entries from twitter.'
		);
		$this->WP_Widget('ansimuz_tweet', 'Ansimuz Tweets', $widget_ops);	
	}// Constructor
	
	
	
	// Widget
	function widget($args, $instance){
		extract($args);
		
		$title = apply_filters('widget_title', $instance['title']);
		if(empty($title)) $title = false;
		
		echo $before_widget;
	?>
	
			<script>
				jQuery(document).ready(function($) {
					//##########################################
					// Tweet feed
					//##########################################
					
					$("#tweets").tweet({
				        count: <?php echo $instance['number'] ?>,
				        username: "<?php echo $instance['user'] ?>"
				    });
				});
			</script>
			
			<div id="tweets" class="footer-col tweet">
				<?php
					if($title):
						echo $before_title;
						echo $title;
						echo $after_title;
					endif; 
				?>
			</div>
		
	<?php
		echo $after_widget;
	}// Widget
	
	
	
	// Form
	function form($instance){
	
		$instance = wp_parse_args( (array) $instance, array('number' => 3, 'user' => 'ansimuz', 'title' => 'Recent Tweets') );
		
		$title = esc_attr($instance['title']);
		$user = esc_attr($instance['user']);
		$number = absint( $instance['number'] );
		
		?>
		
		<p>
			<label for="<?php echo $this->get_field_id('title') ?>">Title: </label>
			<input class="widefat" id="<?php echo $this->get_field_id('title') ?>" name="<?php echo $this->get_field_name('title') ?>" type="text" value="<?php echo $title ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('user') ?>">Twitter User Name: </label>
			<input class="widefat" id="<?php echo $this->get_field_id('user') ?>" name="<?php echo $this->get_field_name('user') ?>" type="text" value="<?php echo $user ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('number') ?>">Number of Entries: </label>
			<input class="widefat" id="<?php echo $this->get_field_id('number') ?>" name="<?php echo $this->get_field_name('number') ?>" type="text" value="<?php echo $number ?>" />
		</p>
		
		<?php
	
	} // Form 
	
	
	
	// Update
	function update($new_instance, $old_instance){
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['user'] = strip_tags($new_instance['user']);
		$instance['number'] = absint($new_instance['number']);
		
		return $instance;
	}// Update
	
	

}// class





















