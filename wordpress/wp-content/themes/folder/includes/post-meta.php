<?php 
/*
* Meta data included on all of the posts
*
*/
?>

<div class="meta">
	<span class="format"><?php _e('Posted by','ansimuz'); ?> </span>
	<span class="user"><?php the_author_link() ?></span>
	<span class="comments"><?php comments_number('0', '1', '%') ?> <?php _e('Comments','ansimuz'); ?> </span>
	<span class="tags"><?php the_tags('',', ', '') ?></span>
</div>