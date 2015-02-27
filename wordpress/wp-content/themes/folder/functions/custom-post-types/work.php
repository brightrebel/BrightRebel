<?php

#--------------------------------------------------------------------
#
#	CUSTOM POST TYPE 'WORK'
#
#--------------------------------------------------------------------

add_action('init', 'ansimuz_work_post_type');

function ansimuz_work_post_type(){
	
	register_post_type('work', array(
		'labels' => array(
				'name' => __('Work'),
				'singular_name' => __('Project'),
				'add_new_item' => __('Add New Project'),
				'edit_item' => __('Edit Project'),
			),
		'public' => true,
		'show_ui' => true,
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
		'menu_icon' => get_stylesheet_directory_uri() . '/functions/img/suitcase.png',
		'rewrite' => array(
			'slug' => 'work',
			'with_front' => false
			),
		'has_archive' => 'work'
	) );
	
}

# TAXONOMIES -----------------------------------------------------------

// categories
add_action('init', 'build_taxonomies_work', 0);

function build_taxonomies_work(){
	
	// Categories
	
	register_taxonomy(
		'work_category',
		'work',
		array(
			'hierarchical' => true,
			'label' => 'Work Categories',
			'query_var' => true,
			'rewrite' => true
		)
	);
	
	// Tags
	
	register_taxonomy(
		'work_tags',
		'work',
		array(
			'hierarchical' => false,
			'label' => 'Work Tags',
			'query_var' => true,
			'rewrite' => true
		)
	);
}


# LISTING COLUMNS ------------------------------------------------


add_filter("manage_edit-work_columns", "work_edit_columns");
add_action("manage_posts_custom_column",  "work_custom_columns");

function work_edit_columns($columns){
	$columns = array(
		"cb" => "<input type='checkbox' />",
		"title" => "Title",
		"client" => "Client",
		"work_category" => "Category",
		"work_tags" => "Tags",
		"date" => "Date",
	);
	return $columns;
}

function work_custom_columns($column){
	global $post;
	switch ($column){
		case "client":
			$custom = get_post_custom();
			echo $custom["ansimuz_work_name"][0];
		break;
		case "work_category":
			echo get_the_term_list($post->ID, 'work_category', '', ', ','');
		break;
		case "work_tags":
			echo get_the_term_list($post->ID, 'work_tags', '', ', ','');
		break;
	}
}