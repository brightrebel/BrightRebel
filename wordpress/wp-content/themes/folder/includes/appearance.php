<?php 
/*
* Overrides CSS appearance settings with options panel settings for appearance
*
*/
 ?>
<style type="text/css" >
	
	
	/* BODY --------------------------------------------------*/
	body {
		<?php 
			
			
			// Body Background
			$bg_path = get_option('ansimuz_bg_path');
			$bg_color = get_option('ansimuz_bg_color');
			$bg_repeat = get_option('ansimuz_bg_repeat');
			
			// set
			if( $bg_path != ''){
				echo  "	background-image: url(".$bg_path.");";
				echo "background-position: top left;";
				if( $bg_repeat != ''){
					echo  "background-repeat: ".$bg_repeat.";";
				}
			}
			if( $bg_color != ''){
				echo  "background-color: ".$bg_color.";";
			}
			
			
		?>
	}

	<?php  if(get_option('ansimuz_bg_no') == "true" ): // dot display background image at all ?>
	 	body{  background-image: none; }
	<?php	endif ?>
		
	
	/* HEADER --------------------------------------------------*/
	
	header {
		<?php 
			
			
			// Body Background
			$bg_path = get_option('ansimuz_headerBG_path');
			$bg_color = get_option('ansimuz_headerBG_color');
			$bg_repeat = get_option('ansimuz_headerBG_repeat');
			
			// set
			if( $bg_path != ''){
				echo  "	background-image: url(".$bg_path.");";
				echo "background-position: top left;";
				if( $bg_repeat != ''){
					echo  "background-repeat: ".$bg_repeat.";";
				}
			}
			if( $bg_color != ''){
				echo  "background-color: ".$bg_color.";";
			}
			
			
		?>
	}


	/* FOOTER --------------------------------------------------*/
	
	footer {
		<?php 
			
			
			// Body Background
			$bg_path = get_option('ansimuz_footerBG_path');
			$bg_color = get_option('ansimuz_footerBG_color');
			$bg_repeat = get_option('ansimuz_footerBG_repeat');
			
			// set
			if( $bg_path != ''){
				echo  "	background-image: url(".$bg_path.");";
				echo "background-position: top left;";
				if( $bg_repeat != ''){
					echo  "background-repeat: ".$bg_repeat.";";
				}
			}
			if( $bg_color != ''){
				echo  "background-color: ".$bg_color.";";
			}
			
			
		?>
	}
	
	/* CSS OVERRIDE --------------------------------------------------*/
	<?php
		$css = get_option('ansimuz_css');
		if( !empty($css)) echo $css;
	?>
	
</style>








