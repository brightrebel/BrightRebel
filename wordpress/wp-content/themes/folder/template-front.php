<?php 
/*
Template name: Front Page 
*/
?>

<?php get_header() ?>
	<div id="headline"><?php echo get_option('ansimuz_headline') ?></div>
	<?php get_template_part('includes/featured') ?>				
<?php get_footer() ?>