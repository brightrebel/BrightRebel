<div id="logo">
	<?php 
		$logo_path = ( get_option('ansimuz_logo') != '' ) ? get_option('ansimuz_logo') : ANSIMUZ_THEME_LOGO;
	?>
	<a href="<?php echo home_url(); ?>">
		<img  src="<?php echo $logo_path ?>" alt="<?php bloginfo('name') ?>">
	</a>
</div>