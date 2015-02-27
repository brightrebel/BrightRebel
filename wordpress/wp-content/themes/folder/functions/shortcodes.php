<?php

#--------------------------------------------------------------------
#
#	SHORTCODES
#
#--------------------------------------------------------------------

/*

LINK BUTTONS

	
	[link_button href="link" target="_self|_blank" color="red|green|blue" style="link-button" ]text[/link_button]



PRE

	[pre]content[/pre]



TABS
	[tabs]
	  [tab title="your title"]...[/tab]
	  [tab title="your title"]...[/tab]
	  ...
   [/tabs]



ACCORDION

	[accordion_box title="Lorem ipsum"]...[/accordion_box]


	
TOGGLE BOX

	[toggle_box title="Lorem ipsum"]...[/toggle_box]



TWO COLUMNS
	
	[one_half]...[/one_half] [one_half_last]...[/one_half_last] 



THREE COLUMNS

	[one_third]...[/one_third] [one_third_last]...[/one_third_last]



FOUR COLUMNS

	[one_fourth]...[/one_fourth] [one_fourth_last]...[/one_fourth_last]	



HEADERS

	[h1]...[/h1]...[h6]...[/h6]



PULLQUOTES

	[pullquote_left]...[/pullquote_left]
	
	[pullquote_right]...[/pullquote_right]



DROPCAP

	[dropcap]...[/dropcap]



HIGHLIGHT
	
	[hl]...[/hl]



INFOBOXES

	[box_info]...[/box_info]
	
	[box_success]...[/box_success]
	
	[box_error]...[/box_error]
	
	[box_warning]...[/box_warning]



LISTS

	[lists type="check|arrow|plus|star|heart"]
	<ul>
		<li>Item 1</li>
		<li>Item 2</li>
		<li>item 3</li>
	</ul>
	[/lists]



VIDEO (YOUTUBE or VIMEO)

	 [video url="url_to_video" w="width" h="height" /]




USAGE for uds_clear-autop
	 
	return apply_filters('uds_shortcode_out_filter', $out);
	
	
	
	
*/



// Clears <p> and <br> tags for the outputs ---------------------------*/

function uds_clear_autop($content){

    $content = str_ireplace('<p>', '', $content);
    $content = str_ireplace('</p>', '', $content);
    $content = str_ireplace('<br />', '', $content);
    return $content;
}
add_filter('uds_shortcode_out_filter', 'uds_clear_autop');




// LINK BUTTONS ---------------------------------------------------------------------*/

function link_button($atts, $content=null){
	extract(shortcode_atts( array( 
							'href' => '#',
							'target' => '_self',
							'color' => '',
							'style' => 'link-button',
							'fullwidth' => ''
							), $atts ));
							
	// if this has color then it's class is "link-button"
	if($color != '') $style = 'link-button'; 
	if($fullwidth == 'yes') $fullwidth = 'fullwidth';
	return '<a href="'.$href.'" target="'.$target.'" class="'.$style.' '.$color. ' '. $fullwidth .' "><span>'.do_shortcode($content).'</span></a><div class="cf"></div>';
}
add_shortcode('link_button', 'link_button');



// PRE ---------------------------------------------------------------------*/

function pre($atts, $content=null){
	return '<pre>'.do_shortcode($content).'</pre>';
}
add_shortcode('pre', 'pre');




// TABS ---------------------------------------------------------------------*/

function tabs($atts, $content=null){
	global $anzimus_tabs;
	$anzimus_tabs = array();
	do_shortcode($content);
	$out = '<ul class="tabs">';
	
	// titles
	foreach( $anzimus_tabs as $tab ) {
		$out .= '<li><a href="#'.$tab['id'].'"><span>' . $tab['title'] . '</span></a></li>';
	}
	$out .= '</ul><div class="panes">';
	
	// content
	foreach( $anzimus_tabs as $tab ) {
		$out .= '<div id="'.$tab['id'].'">' . $tab['content'] . '</div>';
	}
	$out .= '</div>';
	
	$anzimus_tabs = array();
	
	return $out;
}
//
function tab($atts, $content=null){
	global $anzimus_tabs;
	extract(shortcode_atts(array('title' => ''),$atts));
	
	// create random id between 0 and 10000
	$id = rand(0,10000);
	
	$anzimus_tabs[] = array('id'=>$id,
							'title'=>$title,
							'content'=>do_shortcode($content));
}
add_shortcode('tabs', 'tabs');
add_shortcode('tab', 'tab');



// ACCORDION ---------------------------------------------------------------------*/

function accordion_box($atts, $content=null){
	extract(shortcode_atts( array( 
							'title' => 'ITEM' 
							), $atts ));
	return '<div class="accordion-trigger custom">'.$title.'</div>
				<div class="accordion-container">
				    <div class="block">
						<p>'.do_shortcode($content).'</p>
					</div>
				</div>';
}
add_shortcode('accordion_box', 'accordion_box');




// TOGGLE ---------------------------------------------------------------------*/

function toggle_box($atts, $content=null){
	extract(shortcode_atts( array( 
							'title' => 'ITEM' 
							), $atts ));
	return '<div class="toggle-trigger custom"><i></i>'.$title.'</div>
				<div class="toggle-container">
					<div class="block">
						<p>'.do_shortcode($content).'</p>
					</div>
				</div>';
}
add_shortcode('toggle_box', 'toggle_box');





// TWO COLUMNS ---------------------------------------------------------------------*/

function one_half($atts, $content=null){
	return '<div class="one-half">'.do_shortcode($content).'</div>';
}
function one_half_last($atts, $content=null){
	return '<div class="one-half last" >'.do_shortcode($content).'</div><div class="cf" ></div>';
}
add_shortcode('one_half', 'one_half');
add_shortcode('one_half_last', 'one_half_last');





// THREE COLUMNS ---------------------------------------------------------------------*/

function one_third($atts, $content=null){
	return '<div class="one-third">' .do_shortcode($content). '</div>';
}
function one_third_last($atts, $content=null){
	return '<div class="one-third last" >'.do_shortcode($content).'</div><div class="cf" ></div>';
}
add_shortcode('one_third', 'one_third');
add_shortcode('one_third_last', 'one_third_last');




// FOURTH COLUMNS ---------------------------------------------------------------------*/

function one_fourth($atts, $content=null){
	return '<div class="one-fourth">' .do_shortcode($content). '</div>';
}
function one_fourth_last($atts, $content=null){
	return '<div class="one-fourth last" >'.do_shortcode($content).'</div><div class="cf" ></div>';
}
add_shortcode('one_fourth', 'one_fourth');
add_shortcode('one_fourth_last', 'one_fourth_last');




// HEADERS ---------------------------------------------------------------------*/

function h1($atts, $content=null){
	return '<h1 class="heading">'.do_shortcode($content).'</h1>';
}
function h2($atts, $content=null){
	return '<h2 class="heading">'.do_shortcode($content).'</h2>';
}
function h3($atts, $content=null){
	return '<h3 class="heading">'.do_shortcode($content).'</h3>';
}
function h4($atts, $content=null){
	return '<h4 class="heading">'.do_shortcode($content).'</h4>';
}
function h5($atts, $content=null){
	return '<h5 class="heading">'.do_shortcode($content).'</h5>';
}
function h6($atts, $content=null){
	return '<h6 class="heading">'.do_shortcode($content).'</h6>';
}
add_shortcode('h1', 'h1');
add_shortcode('h2', 'h2');
add_shortcode('h3', 'h3');
add_shortcode('h4', 'h4');
add_shortcode('h5', 'h5');
add_shortcode('h6', 'h6');




// PULLQUOTES ---------------------------------------------------------------------*/

function pullquote_left($atts, $content=null){
	return '<span class="pullquote-left">'.do_shortcode($content).'</span>';
}
add_shortcode('pullquote_left', 'pullquote_left');

function pullquote_right($atts, $content=null){
	return '<span class="pullquote-right">'.do_shortcode($content).'</span>';
}
add_shortcode('pullquote_right', 'pullquote_right');




// DROPCAP ---------------------------------------------------------------------*/

function dropcap($atts, $content=null){
	return '<p class="dropcap">'.do_shortcode($content).'</p>';
}
add_shortcode('dropcap', 'dropcap');




// HIGHLIGHT ---------------------------------------------------------------------*/

function hl($atts, $content=null){
	return '<span class="highlight">'.do_shortcode($content).'</span>';
}
add_shortcode('hl', 'hl');




// INFOBOXES ---------------------------------------------------------------------*/

function box_info($atts, $content=null){
	return '<p class="infobox-info">'.do_shortcode($content).'</p>';
}
function box_success($atts, $content=null){
	return '<p class="infobox-success">'.do_shortcode($content).'</p>';
}
function box_error($atts, $content=null){
	return '<p class="infobox-error">'.do_shortcode($content).'</p>';
}
function box_warning($atts, $content=null){
	return '<p class="infobox-warning">'.do_shortcode($content).'</p>';
}
add_shortcode('box_info', 'box_info');
add_shortcode('box_success', 'box_success');
add_shortcode('box_error', 'box_error');
add_shortcode('box_warning', 'box_warning');





// LISTS ---------------------------------------------------------------------*/

function lists($atts, $content=null){
	extract(shortcode_atts(array(
							'type' => 'check'
							),$atts));
	return'<div class="lists-' . $type . '">'.do_shortcode($content).'</div>';
}
add_shortcode('lists', 'lists');




// VIDEO (YOUTUBE or VIMEO) ---------------------------------------------------------------------*/

function video( $atts, $content = null ) {
	
	extract(shortcode_atts(array('url' => '',
								 'w' => '489',
								 'h'  => '390'),$atts));
	
	
	$videoURL = ansimuz_parse_video($url);
	
	$out = "<div class='video-wrapper'><div class='video-container'>";
	$out .='<iframe  src="'.$videoURL.'" width="'.$w.'" height="'.$h.'" frameborder="0" allowfullscreen></iframe>';
	$out .= "</div></div>";
	 
	return $out;
	
}
add_shortcode('video', 'video');





// DIVIDER ---------------------------------------------------------------------*/

function hr($atts, $content=null){
	return '<div class="block-divider">'.do_shortcode($content).'</div>';
}
add_shortcode('hr', 'hr');						 
	
	