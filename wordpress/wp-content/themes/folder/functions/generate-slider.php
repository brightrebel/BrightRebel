<?php

class ansimuz_slider_page{

	//data members:
	var $file_name;
	var $page_title;
	var $slider_name;
	var $image_name;
	var $links_name;
	var $desc_name;
	var $title_name;
	
	//constructor:	
	function ansimuz_slider_page($info){
	$this->info=$info;
	$this->file_name=$info['pagename']; //filename for the options page
	$this->page_title=$info['title']; //title, displayed near top of page
	$this->slider_name=$info['slider_name'];
	$this->image_name=$info['image_name'];
	$this->link_name=$info['link_name'];
	$this->desc_name=$info['desc_name'];
	$this->title_name=$info['title_name'];
	
	add_action('admin_menu', array(&$this, 'ansimuz_add_menu'));
	
	}
	
	//Add menu item
	function ansimuz_add_menu(){
					
			add_submenu_page(ANSIMUZ_MAINMENU_NAME, $this->page_title, $this->page_title, 'administrator', $this->file_name, array(&$this, 'ansimuz_generate_page')); 		
		
	}
		
	//Generate functions page
	function ansimuz_generate_page(){
		$this->save_options();

?>

	<div class="slider-manager">
	<h2><?php echo $this->page_title; ?></h2>
	<input type="button" class="button add-new-top" value="Add new item" />
	

<form method="post" id="ansimuz_options_form" class="ansimuz_options_form">	
	<input type="hidden" name="action" id="action" value="ansimuz_save_slider" />
	<table id="sort-table" class="widefat ansimuz_slider ansimuz_options">
		<thead>
			<tr>
				<th></th>
				<th>Settings</th>
				<th>Preview</th>
				<th>Description</th>
				<th>Controls</th>
				<th></th>
			</tr>
		</thead>
		
		<tbody>

<?php
	
	$image_set=get_option($this->image_name);
	$link_set=get_option($this->link_name);
	$desc_set=get_option($this->desc_name);
	$title_set=get_option($this->title_name);
	
	$slider_empty=false;
	
	if($image_set==false or count($image_set)==0)
		$slider_empty=true;
		
	if($slider_empty): //if there are no options associated with the slider, display one input box
			
?>

			<tr>
			
				<td class="drag"></td>
				
				<td>
					<label>Link:</label>
					<input type="text" name="<?php echo $this->slider_name; ?>[link][]" />
					<div class="clearfix"></div>
					
					<label>Title:</label>
					<input type="text" name="<?php echo $this->slider_name; ?>[title][]" />
					<div class="clearfix"></div>
					
					<label>Image URL:</label>
					<input type="text" name="<?php echo $this->slider_name; ?>[image][]" class="input-img-url" />
					<br/>
					<span id="<?php echo $this->slider_name; ?>" class="button upload ansimuz_upload_slider">Upload Image</span>
					<div class="clearfix"></div>
					
				</td>
				
				<td class="slider-img-preview"></td>
				
				<td>
					<textarea name="<?php echo $this->slider_name; ?>[desc][]" /></textarea>
				</td>
				
				<td>
					<input type="button" class="button add-above" value="Add above" /><br />
					<input type="button" class="button add-below" value="Add below" /><br />
					<input type="button" class="button-primary delete-item" value="Delete item" /><br />	
				</td>
				
				<td class="drag"></td>
			</tr>
<?php
	else: //Otherwise=>if there is atleast one slider image, display the set of images and links
	
		$count=0;
		foreach($image_set as $item_image):
			$item_link=$link_set[$count];
			$item_description=$desc_set[$count];
			$item_title=$title_set[$count];
			$count++;
			
?>
			<tr>
			
				<td class="drag"></td>
				<td>

					<label>Link:</label>
					<input type="text" name="<?php echo $this->slider_name; ?>[link][]" value="<?php echo esc_html(stripslashes($item_link)); ?>"/>
					<div class="clearfix"></div>
					
					<label>Title:</label>
					<input type="text" name="<?php echo $this->slider_name; ?>[title][]" value="<?php echo esc_html(stripslashes($item_title)); ?>" />
					<div class="clearfix"></div>
					
					<label>Image URL:</label>
					<input type="text" name="<?php echo $this->slider_name; ?>[image][]" value="<?php echo esc_html(stripslashes($item_image)); ?>" class="input-img-url" />
					<br/>
					<span id="<?php echo $this->slider_name ."-".$count?>" class="button upload ansimuz_upload_slider">Upload Image</span>
					
					
					<span class="button ansimuz_remove_slider" id="<?php echo $this->slider_name ."-".$count?>" >Remove Image</span>
					
					
					<div class="clearfix"></div>
					
				</td>
				
				<td class="slider-img-preview">
					<img src="<?php  echo ansimuz_build_image($item_image) ?>" />
				</td>
				
				<td>
					<textarea name="<?php echo $this->slider_name; ?>[desc][]" /><?php echo stripslashes($item_description); ?></textarea>
				</td>
				
				<td>
					<input type="button" class="button add-above" value="Add above" /><br />
					<input type="button" class="button add-below" value="Add below" /><br />
					<input type="button" class="button-primary delete-item" value="Delete item" /><br />	
				</td>
				
				<td class="drag"></td>
				
			</tr>
			
<?php
		endforeach;
		
	endif;
?>
		</tbody>
	</table>

	<input type="submit" class="button" id="final_submit" name="final_submit" value="Save changes" />
</form>
</div>
<?php
	
	}
	
	
	


	function save_options(){

		if (isset($_POST['action']) && $_POST['action'] == 'ansimuz_save_slider' ) {
							$posted_slider=$_POST[$this->slider_name];
							$posted_images=$posted_slider['image'];
							$posted_links=$posted_slider['link'];
							$posted_desc=$posted_slider['desc'];
							$posted_titles=$posted_slider['title'];
														
							update_option($this->image_name, $posted_images);
							update_option($this->link_name, $posted_links);
							update_option($this->desc_name, $posted_desc);;
							update_option($this->title_name, $posted_titles);
				
					echo '<div id="message" class="updated fade"><p><strong>'.ANSIMUZ_THEME.' settings saved.</strong></p></div>';
			
		}

	}	
	
	
	
	
}//end class