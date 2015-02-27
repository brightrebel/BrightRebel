<?php
/*
 * Template for the comments included the single.php
 *
*/
?>
							
<!-- Comments wrap -->
<div id="comments-wrap">
	<h4 class="heading"><?php comments_number('0', '1', '%') ?> <?php _e('comments','ansimuz') ?></h4>
<?php if ( have_comments() ) : ?>
				
		<!-- comments list -->
		<ul class="commentlist">
			<?php wp_list_comments(array('avatar_size' => '60')); ?>
		</ul>
		<!-- ENDS comments list -->
		
		<!-- Navi -->
		<div class="comments-pagination">
	    	<?php paginate_comments_links(); ?>
		</div>
		<!-- ENDS Navi -->
	
		<!-- No comments -->
		<?php else : // this is displayed if there are no comments so far ?>
			<?php if ('open' == $post->comment_status) :
				// If comments are open, but there are no comments.
				?>
				<p class="no-comments"><?php _e('No comments yet','ansimuz') ?></p>
				<?php
			else : // comments are closed
				?>
				<p class="message"><?php _e('The comments are closed','ansimuz') ?></p>
				<?php
			endif;
		?>
		<!-- ENDS No comments -->
		

<?php endif; ?>
</div>
<!-- ENDS Comments wrap -->
		
