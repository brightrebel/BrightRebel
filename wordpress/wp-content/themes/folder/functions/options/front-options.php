<?php

/*
 *
 * Template for the front page options
 *
 */ 

// Information

$info = array(
	'name' => 'front-options',  // The options page identifier
	'pagename' => 'front-options', // The page slug
	'title' => 'Front page settings',
	'sublevel' => 'yes'
);

// Options and array of arguments


// Create a list of all post categories
$all_categories=get_categories('hide_empty=0&orderby=name');
$cat_options=array();
$cat_options[] = '-Any category-';
foreach ($all_categories as $category_list ) {
    $cat_options[] = $category_list->cat_name;
}




$options = array(

	
	array(
		"type" => "textarea",
		"name" => "Headline Content Text",
		"id" => "ansimuz_headline",
		"desc" => "Text displayed next to the slideshow in the front page.",
		"default" => "" 	
	),
	
	// Feature
	
	array(
		"type" => "heading",
		"name" => "Front Featured Posts" 	
	),
	
	
	array(
		"type" => "select",
		"name" => "Featured Posts Type",
		"id" => "ansimuz_featured_post_type",
		"options" => array('post', 'work'),					
		"desc" => "Choose the type of featured posts displayed at the front page.",
		"default" => "post"
	),
		
	array(
		"type" => "text",
		"name" => "Number of Items",
		"id" => "ansimuz_featured_nposts",
		"desc" => "Limit the number of featured posts displayed, enter decimal value",
		"default" => "3" 	
	),
	
	
	array(
		"type" => "checkbox",
		"name" => "Hide Category",
		"id" => array("ansimuz_featured_display"),
		"options" => array("Check to hide the feature posts"),					
		"desc" => "Hide the front page featured posts",
		"default" => array( "not")	
	),
	
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