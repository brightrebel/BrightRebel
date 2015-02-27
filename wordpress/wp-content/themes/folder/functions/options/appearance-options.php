<?php

/*
 *
 * Template for the apperance options
 *
 */ 

// Information

$info = array(
	'name' => 'appearance-options',  // The options page identifier
	'pagename' => 'appearance-options', // The page slug
	'title' => 'Appearance settings',
	'sublevel' => 'yes'
);

// Options and array of arguments


$options = array(

	
	array(
		"type" => "image",
		"name" => "logo",
		"id" => "ansimuz_logo", 
		"desc" => "Upload a logo image file logo, it can be jpg, gif or png",
		"default" => ANSIMUZ_THEME_DIR . "/img/logo.png"	
	),
	
	array(
		"type" => "textarea",
		"name" => "Custom CSS",
		"id" => "ansimuz_css", 
		"desc" => "Override CSS style rules. Don't include the &lt;style&gt; tags.",
		"default" => ""
	),
	
	// Main
	
	array(
		"type" => "heading",
		"name" => "Body Background" 	
	),
	
	array(
		"type" => "colorpicker",
		"name" => "Solid color",
		"id" => "ansimuz_bg_color", 
		"desc" => "Enter an hex number value here like ff5500 for the bakcground solid color",
		"default" => ""
	),
	
	array(
		"type" => "image",
		"name" => "Image",
		"id" => "ansimuz_bg_path", 
		"desc" => "Upload a background image file, it can be jpg, gif or png",
		"default" => ""	
	),
	
	array(
		"type" => "select",
		"name" => "Repeat",
		"id" => "ansimuz_bg_repeat",
		"options" => array('repeat', 'no-repeat', 'repeat-y', 'repeat-x'),					
		"desc" => "Background repeat attribute",
		"default" => "repeat-x" 
	),
	
	array(
		"type" => "checkbox",
		"name" => "Dont use image background",
		"id" => array("ansimuz_bg_no"),
		"options" => array("Don't display background"),					
		"desc" => "Check if you don't want to display a background image",
		"default" => array( "not")	
	),
	
	
	// Header BG
	
	array(
		"type" => "heading",
		"name" => "Header Background" 	
	),
	
	array(
		"type" => "colorpicker",
		"name" => "Solid Color",
		"id" => "ansimuz_headerBG_color", 
		"desc" => "Enter an hex number value here like ff5500",
		"default" => ""
	),
	
	array(
		"type" => "image",
		"name" => "Image",
		"id" => "ansimuz_headerBG_path", 
		"desc" => "Upload a background image file, it can be jpg, gif or png",
		"default" => ""	
	),
	
	array(
		"type" => "select",
		"name" => "Repeat",
		"id" => "ansimuz_headerBG_repeat",
		"options" => array('repeat', 'no-repeat', 'repeat-y', 'repeat-x'),					
		"desc" => "Background repeat  attribute",
		"default" => "repeat-x" 
	),
	
	
	// Footer BG
	
	array(
		"type" => "heading",
		"name" => "Footer Background" 	
	),
	
	array(
		"type" => "colorpicker",
		"name" => "Solid Color",
		"id" => "ansimuz_footerBG_color", 
		"desc" => "Enter an hex number value here like ff5500",
		"default" => ""
	),
	
	array(
		"type" => "image",
		"name" => "Image",
		"id" => "ansimuz_footerBG_path", 
		"desc" => "Upload a background image file, it can be jpg, gif or png",
		"default" => ""	
	),
	
	array(
		"type" => "select",
		"name" => "Repeat",
		"id" => "ansimuz_footerBG_repeat",
		"options" => array('repeat', 'no-repeat', 'repeat-y', 'repeat-x'),					
		"desc" => "Background repeat  attribute",
		"default" => "repeat-x" 
	),
	
	
	// RESET
		
	array(
		"type" => "heading",
		"name" => "RESET" 	
	),
	
	array(	
		"type" => "checkbox",
		"name" => "Reset to Default",
		"id" => array("ansimuz_reset"),
		"options" => array("Check and save to reset"),					
		"desc" => "You made a mess?",
		"default" => array( "not")	
	)
	
						
);

$optionspage = new ansimuz_options_page($info, $options);

/* Options arguments

	"type" => "text | textarea | image | ",
	"name" => "",
	"id" => "", 
	"desc" => "",
	"default" => ""
	
	
	"type" => "checkbox",
	"name" => "",
	"id" => array(),
	"options" => array(),					
	"desc" => "",
	"default" => array( "checked","not")
	
	
	"type" => "select | radio",
	"name" => "",
	"id" => "",
	"options" => array( ""),					
	"desc" => "",
	"default" => "" 
	
*/