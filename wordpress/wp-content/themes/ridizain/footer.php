<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 *
 * @package Ridizain
 * @since Ridizain 1.0
 */
?>
<?php tha_content_bottom(); ?>
</div><!-- #main -->
</div><!-- #page -->
<?php tha_content_after(); ?>
    <?php tha_footer_before(); ?>
		<footer id="colophon" class="site-footer" role="contentinfo">
        <?php tha_footer_top(); ?>
			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				Done By Matthew Jordaan
				<span class="sep"> || </span>
				Copyright BrightRebel
			</div><!-- .site-info -->
		<?php tha_footer_bottom(); ?>
		</footer><!-- #colophon -->
	<?php tha_footer_after(); ?>
    <?php tha_body_bottom(); ?>
	<?php wp_footer(); ?>
</body>
</html>