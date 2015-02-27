<?php 
/*
* Displays all the posts entries
*
*/
?>

<?php get_header() ?>

	
	<!-- posts list -->
	<div id="posts-list" class="cf"> 
		<?php get_template_part('includes/loop') ?>		
		
		<!-- page-navigation -->
		<div class="page-navigation cf">
			<div class="nav-next"><?php  next_posts_link(__('&#8592; Older Entries ','ansimuz')) ?><a href="#"></a></div>
			<div class="nav-previous"><a href="#"><?php previous_posts_link(__('Newer Entries &#8594;','ansimuz')) ?></a></div>
		</div>
		<!--ENDS page-navigation -->
					
					
	</div>
	<!-- ENDS posts list -->

	<?php  get_sidebar() ?>	
	
<?php get_footer() ?>