<?php

/*
 *
 * Template for the general options
 *
 */ 

// Information

$info = array(
	'name' => 'general-options',  // The options page identifier
	'pagename' => 'general-options', // The page slug
	'title' => 'General settings'
);

// Options and array of arguments


$options = array(
		

	
	array(
		"type" => "textarea",
		"name" => "404 text content ",
		"id" => "ansimuz_404", 
		"desc" => "Text displayed when error 404 pops",
		"default" => ""
	),
	
	array(
		"type" => "textarea",
		"name" => "Footer text ",
		"id" => "ansimuz_footer", 
		"desc" => "Text displayed at the bottom of the footer",
		"default" => ""
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