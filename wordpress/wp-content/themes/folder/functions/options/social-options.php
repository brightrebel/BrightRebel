<?php

/*
 *
 * Template for the Social options
 *
 */ 

// Information

$info = array(
	'name' => 'social-options',  // The options page identifier
	'pagename' => 'social-options', // The page slug
	'title' => 'Social Settings',
	'sublevel' => 'yes'
);

// Options and array of arguments


$icon_path = get_template_directory_uri() . "/img/social/";

$options = array(
	
	
	
	array(
		"type" => "text",
		"name" => "<img src='".$icon_path."dribbble.png' alt='icon' style='float:left; padding-right: 10px;' /> Dribbble ",
		"id" => "ansimuz_social_dribbble", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	
	array(
		"type" => "text",
		"name" => "<img src='".$icon_path."facebook.png' alt='icon' style='float:left; padding-right: 10px;' /> Facebook ",
		"id" => "ansimuz_social_facebook", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<img src='".$icon_path."flickr.png' alt='icon' style='float:left; padding-right: 10px;' /> Flickr ",
		"id" => "ansimuz_social_flickr", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<img src='".$icon_path."forrst.png' alt='icon' style='float:left; padding-right: 10px;' /> Forrst ",
		"id" => "ansimuz_social_forrst", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<img src='".$icon_path."github.png' alt='icon' style='float:left; padding-right: 10px;' /> GitHub ",
		"id" => "ansimuz_social_github", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<img src='".$icon_path."googleplus.png' alt='icon' style='float:left; padding-right: 10px;' /> Google+ ",
		"id" => "ansimuz_social_googleplus", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<img src='".$icon_path."lastfm.png' alt='icon' style='float:left; padding-right: 10px;' /> Lastfm ",
		"id" => "ansimuz_social_lastfm", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<img src='".$icon_path."linkedin.png' alt='icon' style='float:left; padding-right: 10px;' /> LinkedIn ",
		"id" => "ansimuz_social_linkedin", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<img src='".$icon_path."rss.png' alt='icon' style='float:left; padding-right: 10px;' /> RSS ",
		"id" => "ansimuz_social_rss", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<img src='".$icon_path."twitter.png' alt='icon' style='float:left; padding-right: 10px;' /> Twitter ",
		"id" => "ansimuz_social_twitter", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<img src='".$icon_path."vimeo.png' alt='icon' style='float:left; padding-right: 10px;' /> Vimeo ",
		"id" => "ansimuz_social_vimeo", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<img src='".$icon_path."youtube.png' alt='icon' style='float:left; padding-right: 10px;' /> Youtube ",
		"id" => "ansimuz_social_youtube", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
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