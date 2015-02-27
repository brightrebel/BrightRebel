<?php

/*
* Meta boxes for the work post type
*/


$info=array(
	'box_name' => 'work-meta-box',
	'title' => 'Work Details',
	'location' => array('work')
);


$options=array(
	
array(
	"type" => "text",
	"title" => "Name",
	"name" => "ansimuz_work_name",				
	"desc" => "The name of this project client",
	"default" => "" ),
	
array(
	"type" => "text",
	"title" => "Project Date",
	"name" => "ansimuz_work_date",				
	"desc" => "Completion date of this project",
	"default" => "" ),

array(
	"type" => "text",
	"title" => "URL",
	"name" => "ansimuz_work_url",				
	"desc" => "Link to this project if any",
	"default" => "" )
	

	
);

$metabox_post = new ansimuz_meta_box($info, $options);