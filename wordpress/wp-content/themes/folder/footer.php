			</div><!-- ENDS WRAPPER -->
		</div>
		<!-- ENDS MAIN -->
		
		
		<!-- FOOTER -->
		<footer>
			<div class="wrapper cf">
				<?php get_template_part('includes/widgets-columns') ?>
				<!-- bottom -->
				<div class="footer-bottom">
					<div class="left"><?php echo stripcslashes(get_option('ansimuz_footer')) ?></div>
					<?php get_template_part('includes/social-bar') ?>
				</div>	
				<!-- ENDS bottom -->
			</div>
		</footer>
		<!-- ENDS FOOTER -->
		
		<?php wp_footer() ?>
	</body>
</html>