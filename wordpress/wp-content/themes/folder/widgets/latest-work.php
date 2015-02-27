<?php

/*
* Latest work from ansimuz
*
*/

class Ansimuz_Latest_Work extends WP_Widget { 

	
	// Constructor
	function Ansimuz_Latest_Work() { 
		$widget_ops = array(
			'classname' => 'latest_work',
			'description' => 'Show the latest work entries with an image and a excerpt.'
		);
		$this->WP_Widget('ansimuz_latest_work', 'Ansimuz Latest Work', $widget_ops);
	} // Constructor
	
	
	// Widget
	function widget($args, $instance) { 
		extract($args);
		
		$title = apply_filters('widget_title', $instance['title']);
		
		if(empty($title)) $title = false;
		
		echo $before_widget;
		
		if($title):
			echo $before_title;
			echo $title;
			echo $after_title;
		endif;
		
		
		$args = array(
			'post_type' => 'work',
			'posts_per_page' => $instance['number']
		);
		$work_posts_query = new WP_Query($args);
		
		if($work_posts_query->have_posts()):
			while($work_posts_query->have_posts()):
				$work_posts_query->the_post();
				global $post;
				?>
					
				<div class="recent-post cf">
					<a href="<?php the_permalink() ?>" class="thumb">
						
						<img src="<?php echo ansimuz_build_image( ansimuz_post_image(), 54, 54 ) ?>" alt="<?php the_title() ?>" />
					</a>
					<div class="post-head">
						<a href="<?php the_permalink() ?>" ><?php the_title() ?></a>
						<span><?php the_time('D') ?>, <?php the_time('M') ?><?php the_time('d') ?>, <?php the_time('Y') ?></span>
					</div>
				</div>
					
				<?php
			endwhile;	
		endif;
		
		echo $after_widget;
		
	}// Widget
	
	
	// Form
	function form($instance) {
	
		// default value
		$instance = wp_parse_args( (array) $instance, array('number' => 2) );
		
		$title = esc_attr($instance['title']);
		$number = absint( $instance['number'] );
	?>
		
		<p>
			<label for="<?php echo $this->get_field_id('title') ?>">Title: </label>
			<input class="widefat" id="<?php echo $this->get_field_id('title') ?>" name="<?php echo  $this->get_field_name('title') ?>" type="text" value="<?php echo $title ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('number') ?>">Max Post Number: </label>
			<input class="widefat" id="<?php echo $this->get_field_id('number') ?>" name="<?php echo  $this->get_field_name('number') ?>" type="text" value="<?php echo $number ?>" />
		</p>
		
		<p>
			<code><em>This wiget shows your latest portfolio post.</em></code>
		</p>
		
	<?php 
	} // Form 
	
	
	// Save
	function update($new_instance, $old_instance) { 
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = absint($new_instance['number']);
		return $instance;
	} // Save

} // class















