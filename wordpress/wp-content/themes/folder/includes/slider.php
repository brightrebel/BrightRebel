<!-- Builds Home slider -->

<?php if( !is_front_page() ) return false; // display only on the front page ?>

	<!-- SLIDER -->				
<div id="home-slider" class="lof-slidecontent">
	<div class="preload"><div></div></div>
		
		<?php 
		// Get slides data
		$slider_images=get_option('ansimuz_slider_images');
		$slider_links=get_option('ansimuz_slider_links');
		$slider_descs=get_option('ansimuz_slider_desc');
		$slider_titles=get_option('ansimuz_slider_title');
		
		$total = count($slider_images);
		
		$hide_slider =  get_option('ansimuz_slideshow_display');
		
		if( ($hide_slider == '' || $hide_slider == 'false' )&& $total>0):
		?>
		
		    <!-- slider content --> 
			<div class="main-slider-content" >
				<ul class="sliders-wrap-inner">
			  	
			  	<?php
		      		for($i=0; $i<$total; $i++):
		      			
		      			// Set slider data
		      			$this_image = ansimuz_build_image($slider_images[$i], 940, 367);
						$this_link = stripslashes($slider_links[$i]);
						$this_desc = stripslashes($slider_descs[$i]);
						$this_title = stripslashes($slider_titles[$i]);
		      	?>
		        
					<!-- slide -->  
					<li>
					  <img src="<?php echo $this_image ?>" title="<?php echo $this_title ?>" alt="<?php echo $this_title ?>" />           
					    <?php if( $this_title != ""): ?>
					    	<div class="slider-description">
						    	<h4><?php echo $this_title ?></h4>
							   	 <?php echo $this_desc ?>
							   	 <?php if( $this_link != ""): ?><a class="link" href="<?php echo $this_link ?>"><?php _e('Read more','ansimuz'); ?> </a><?php endif ?>
							</div>
						<?php endif ?>
					</li>
					<!-- ENDS slide -->
			    
			   	<?php endfor; ?>
			  </ul>  	
		</div>
		<!-- ENDS slider content --> 
		
		
		<!-- slider nav -->
		<div class="navigator-content">
		  <div class="navigator-wrapper">
		        <ul class="navigator-wrap-inner">
		           
		           <?php
		      		for($i=0; $i<$total; $i++):
		      			
		      			// Set slider data
		      			$this_image = ansimuz_build_image($slider_images[$i], 188, 73);
			      	?>
		      	
		      			<li><img src="<?php echo $this_image ?>" alt="image" /></li>
		        	<?php endfor; ?>
		        
		        </ul>
		  </div>
		  <div class="button-next"><?php _e('Next','ansimuz'); ?></div>
		  <div  class="button-previous"><?php _e('Previous','ansimuz'); ?></div>
		</div> 
		<!-- slider nav -->
	
	
	<?php endif; ?>
		
</div>
<!-- ENDS slider holder -->

	  
           

	
	
	
          
