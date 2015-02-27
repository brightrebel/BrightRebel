<?php

/*
* Meta boxes for the work post type
*/


$info=array(
	'box_name' => 'page-meta-box',
	'title' => 'Google Map Details',
	'location' => array('page')
);


$options=array(
	
	array(
		"type" => "textarea",
		"title" => "Map Content",
		"name" => "ansimuz_map_content",				
		"desc" => "The content displayed under the map",
		"default" => "" 
	),
	
	array(
		"type" => "text",
		"title" => "Map Latitude",
		"name" => "ansimuz_map_lat",				
		"desc" => "The latitude for the google map",
		"default" => "-12.043333" 
	),
	
	array(
		"type" => "text",
		"title" => "Map Longitude",
		"name" => "ansimuz_map_lng",				
		"desc" => "The latitude for the google map",
		"default" => "-77.028333" 
	),
	
	
	array(
		"type" => "text",
		"title" => "Marker Latitude",
		"name" => "ansimuz_marker_lat",				
		"desc" => "The latitude for the marker",
		"default" => "-12.043333" 
	),
	
	array(
		"type" => "text",
		"title" => "Marker Longitude",
		"name" => "ansimuz_marker_lng",				
		"desc" => "The latitude for the marker",
		"default" => "-77.028333" 
	)

);

$metabox_post = new ansimuz_meta_box($info, $options);