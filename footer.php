
		<footer>
				<?php
				/**
				 * Functions hooked in to southernsiteworks_footer action
				 */
				do_action( 'southernsiteworks_footer' );
				?>
		</footer>
		
		<?php
		/**
		 * Functions hooked in to southernsiteworks_background_overlay action
		 */
		do_action( 'southernsiteworks_overlay' );
		?>
		<?php wp_footer() ?>
	</body>
</html>
