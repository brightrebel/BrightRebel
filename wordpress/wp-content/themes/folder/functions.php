<?php

#--------------------------------------------------------------------
#
#	NEW OPTIONS PANEL FRAME WORK
#
#--------------------------------------------------------------------


// Theme suport

add_theme_support('post-thumbnails');

// Add support for a variety of post formats -----------------------------//

add_theme_support( 'post-formats', array('link', 'video', 'quote', 'image' ) );
	
// Theme version

$curr_theme = wp_get_theme();
$theme_version = trim($curr_theme->Version);
if(!$theme_version) $theme_version = "1.0";

//Define constants:

define('ANSIMUZ_FUNCTIONS', get_template_directory() . '/functions/');
define('ANSIMUZ_POST_TYPES', get_template_directory() . '/functions/custom-post-types/');
define('ANSIMUZ_WIDGETS', get_template_directory() . '/widgets/');
define('ANSIMUZ_INCLUDES', get_template_directory() . '/includes/');
define('ANSIMUZ_THEME', 'Folder');
define('ANSIMUZ_THEME_DIR', get_template_directory_uri());
define('ANSIMUZ_THEME_DOCS', 'http://luiszuno.com/free-forums/');
define('ANSIMUZ_THEME_LOGO', ANSIMUZ_THEME_DIR.'/img/logo.png');
define('ANSIMUZ_MAINMENU_NAME', 'general-options');
define('ANSIMUZ_THEME_VERSION', $theme_version);

// INCLUDES ---------------------------------------------------------//

// Load All-Purpose

include_once(ANSIMUZ_FUNCTIONS.'custom-functions.php');
include_once(ANSIMUZ_FUNCTIONS.'custom-functions-tgm.php');
require_once(ANSIMUZ_FUNCTIONS . 'shortcodes.php');

// Custom post types
require_once(ANSIMUZ_POST_TYPES . 'work.php');

// Admin enqueue scripts
if(is_admin()):
	require_once(ANSIMUZ_FUNCTIONS . 'admin-helper.php');
	require_once(ANSIMUZ_FUNCTIONS . 'ajax-image.php');
	
	// Classes
	require_once(ANSIMUZ_FUNCTIONS . 'generate-meta-box.php');
	require_once(ANSIMUZ_FUNCTIONS . 'generate-options.php');
	require_once(ANSIMUZ_FUNCTIONS . 'generate-slider.php');
	
	// Options
	require_once(ANSIMUZ_FUNCTIONS . 'include-options.php' );
endif;

add_action('admin_head', 'ansimuz_admin_head');

//Load widgets

require_once (ANSIMUZ_WIDGETS . 'latest-posts.php');
require_once (ANSIMUZ_WIDGETS . 'tweet.php');
require_once (ANSIMUZ_WIDGETS . 'latest-work.php');
require_once (ANSIMUZ_WIDGETS . 'video.php');
require_once (ANSIMUZ_WIDGETS . 'contact.php');


//Register Widgets -----------------------------------------------//

add_action( 'widgets_init', 'ansimuz_load_widgets' );
function ansimuz_load_widgets() {
	register_widget( 'Ansimuz_Latest_Posts' );
	register_widget( 'Ansimuz_Tweet' );
	register_widget( 'Ansimuz_Latest_Work' );
	register_widget( 'Ansimuz_Contact_Form' );
	register_widget( 'Ansimuz_Video' );
}

#--------------------------------------------------------------------
#
#	GENERAL
#
#--------------------------------------------------------------------

// Video and Images Max Width ----------------------------------------------------//

if ( ! isset( $content_width ) ) $content_width = 960;

// Localization ----------------------------------------------------//

load_theme_textdomain( 'ansimuz', get_template_directory() . '/languages/' );

// SHORTCUT CONSTANTS ----------------------------------------------------//

define('CSSPATH', get_template_directory_uri() . "/css/");
define('JSPATH', get_template_directory_uri() . "/js/");
define('IMGPATH', get_template_directory_uri() . "/img/");

// ADD ADMIN JS SCRIPTS ----------------------------------------------------//

function load_custom_wp_admin_scripts(){
    
    // scripts
	wp_enqueue_script('jquery-ui-encore');
	wp_enqueue_script('jquery-ui-sortable');
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_scripts');

// ADD FRONTEND CSS and JS SCRIPTS ----------------------------------------------------//

function load_js_scripts() {
    if ( !is_admin() ) {
    
    	// CSS
		wp_enqueue_style('general-styles', CSSPATH . 'style.css');
		wp_enqueue_style('superfish', CSSPATH . 'superfish.css');
		wp_enqueue_style('tweet', CSSPATH . 'jquery.tweet.css');
		wp_enqueue_style('flexslider', CSSPATH . 'flexslider.css');
		wp_enqueue_style('lofslider', CSSPATH . 'lof-slider.css');
		wp_enqueue_style('tip-twitter', JSPATH . 'poshytip-1.1/src/tip-twitter/tip-twitter.css');
		wp_enqueue_style('tip-twitter-yellow', JSPATH . 'poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css');
		wp_enqueue_style('prettyPhoto', JSPATH . 'prettyPhoto/css/prettyPhoto.css');
		wp_enqueue_style('skin', CSSPATH . 'skin.css');
		wp_enqueue_style('lessframework', CSSPATH . 'lessframework.css');
    	
    	//  JS
    	wp_enqueue_script('custom', JSPATH . "custom.js", array('jquery'), false, true );
    	wp_enqueue_script('isotope', JSPATH . 'jquery.isotope.min.js', array('jquery'), false, true );
    	wp_enqueue_script('modernizr', JSPATH . "modernizr.js", array('jquery'), false, true );
		wp_enqueue_script('mediaqueries', JSPATH . 'css3-mediaqueries.js', array('jquery'), false, true );
		wp_enqueue_script('tabs', JSPATH . 'tabs.js', array('jquery'), false, true);
		wp_enqueue_script('tweet', JSPATH . 'tweet/jquery.tweet.js', array('jquery'), false, true);
		wp_enqueue_script('poshytip', JSPATH . 'poshytip-1.1/src/jquery.poshytip.min.js', array('jquery'), false, true);
		wp_enqueue_script('prettyphoto', JSPATH . 'prettyPhoto/js/jquery.prettyPhoto.js', array('jquery'), false, true);
		wp_enqueue_script('jcarousel', JSPATH . 'jquery.jcarousel.min.js', array('jquery'), false, true);
		wp_enqueue_script('easing', JSPATH . 'jquery.easing.js', array('jquery'), false, true);
		wp_enqueue_script('lofslider', JSPATH . 'lof-slider.js', array('jquery'), false, true);
		wp_enqueue_script('flexslider', JSPATH . 'jquery.flexslider.js', array('jquery'), false, true);
		wp_enqueue_script('gmaps', JSPATH . 'gmaps.js', array('jquery'), false, true);		
		
		
		// Superfish 
		wp_enqueue_script('hoverIntent', JSPATH . 'superfish-1.4.8/js/hoverIntent.js', array('jquery'), false, true);
		wp_enqueue_script('superfish', JSPATH . 'superfish-1.4.8/js/superfish.js', array('jquery'), false, true);
		wp_enqueue_script('supersubs', JSPATH . 'superfish-1.4.8/js/supersubs.js', array('jquery'), false, true);	
		
		if( is_singular() ) wp_enqueue_script( 'comment-reply' ); // loads the javascript required for threaded comments
    }
}
add_action('wp_enqueue_scripts', 'load_js_scripts');

// Remove the autoupdate -----------------------------------//


function ansimuz_remove_themeupdate( $r, $url ) {
	if ( 0 !== strpos( $url, 'http://api.wordpress.org/themes/update-check' ) )
		return $r; // Not a theme update request. Bail immediately.
	$themes = unserialize( $r['body']['themes'] );
	unset( $themes[ get_option( 'template' ) ] );
	unset( $themes[ get_option( 'stylesheet' ) ] );
	$r['body']['themes'] = serialize( $themes );
	return $r;
}

add_filter( 'http_request_args', 'ansimuz_remove_themeupdate', 5, 2 );


// Enable support for thumbnails -----------------------------------//

if( function_exists('add_theme_support') ){
	// Image sizes
	add_image_size( 'post-feature-image', 610, 9999, false ); 
}

add_filter('post_thumbnail_html', 'thumbnail_html', 10, 3);
function thumbnail_html($html, $post_id, $post_image_id){
	$link = get_permalink($post_id);
	$title = esc_attr(get_post_field('post_title', $post_id));
	$html = '<a href="'.$link.'" title="'.$title.'">'.$html.'</a>';
	return $html;
}


// Enable excerpt support for pages -----------------------------//

add_post_type_support( 'page', 'excerpt' );


//  sidebar & footer ----------------------------------------------------//

if ( function_exists('register_sidebar') ){
	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<li class="block">',
		'after_widget' => '</li>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
		
	
	register_sidebar(array(
		'name' => 'Footer 1',
		'before_widget' => '<div class="widget-block">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	
	register_sidebar(array(
		'name' => 'Footer 2',
		'before_widget' => '<div class="widget-block">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	
	register_sidebar(array(
		'name' => 'Footer 3',
		'before_widget' => '<div class="widget-block">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	
	register_sidebar(array(
		'name' => 'Footer 4',
		'before_widget' => '<div class="widget-block">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));	
}





// Enable Nav Menu -----------------------------//

if ( function_exists( 'add_theme_support' ) )
add_theme_support ('nav-menus');


function register_ansimuz_menus() {
	register_nav_menus  (array(
		'main'   => __('Main Navigation', 'top_navigation' )
	));
}
add_action('init', 'register_ansimuz_menus' );


// adds nav menu if exists if not add regular menu
function ansimuz_menu(){
	
	wp_nav_menu( array(
			'menu' => 'main_menu',
			'menu_id' => 'nav',
			'menu_class' => 'sf-menu',
			'theme_location' => 'main',
			'link_before' => '<span>',
			'link_after' => '</span>',
			'fallback_cb' => 'regular_ansimuz_menu'
	));
}

function regular_ansimuz_menu(){
	?>
	<ul id="nav" class="sf-menu">
		<?php 
		$args = array('title_li' => '',
						'sort_column' => 'menu_order',
						'show_home' => 0,
						'link_before' => '<span>',
						'link_after' => '</span>'
						);
		wp_list_pages($args)
		?>
	</ul>
	<?php
}

