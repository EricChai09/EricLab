<?php get_header(); ?>
	<div id="main">
		<div class="error-title"><?php _e( 'boom, you are lost!', 'my_notes' ); ?></div>
		<div class="error-desc"><?php _e( 'The page you were looking for is not here. But don&rsquo;t worry, You can', 'my_notes' ); ?>

			<ol>
				<li>
					<?php _e( 'Browse our', 'my_notes' ); ?> <a href="<?php esc_url (home_url('/')); ?>"><?php _e( 'Home Page', 'my_notes' ); ?></a> <?php _e( 'to read the latest posts', 'my_notes' ); ?>
				</li>
				<li>
					<?php _e( 'Search our entire site by using the form below', 'my_notes' ); ?>
				</li>
			</ol>
					<?php get_search_form(); ?>

		</div>
	</div>


<?php get_footer(); ?>
