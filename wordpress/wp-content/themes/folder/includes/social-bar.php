<?php 

// Prints the social link if its set
function ansimuz_set_social($name){
	$lname = strtolower($name);
	$d = get_template_directory_uri() . "/img/social/" .$lname ."png";
	$link = get_option('ansimuz_social_' . $lname);
	if(!empty($link)){
	?>
		<li>
			<a href="<?php echo $link ?>"  title="<?php echo $name ?>"  class="<?php echo $lname ?>"></a>
		</li>
	<?php	
	}
}

?>


<!-- social-bar -->
<ul id="social-bar" class="cf sb">
	<?php ansimuz_set_social('dribbble') ?>
	<?php ansimuz_set_social('facebook') ?>
	<?php ansimuz_set_social('flickr') ?>
	<?php ansimuz_set_social('forrst') ?>
	<?php ansimuz_set_social('github') ?>
	<?php ansimuz_set_social('googleplus') ?>
	<?php ansimuz_set_social('lastfm') ?>
	<?php ansimuz_set_social('linkedin') ?>
	<?php ansimuz_set_social('rss') ?>
	<?php ansimuz_set_social('twitter') ?>
	<?php ansimuz_set_social('vimeo') ?>
	<?php ansimuz_set_social('youtube') ?>
</ul>
<!-- ENDS social-bar -->

