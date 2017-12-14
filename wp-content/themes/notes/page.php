<?php get_header(); ?>

	<div id="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="post-top">
					<h1 class="post-title"><?php the_title(); ?></h1>
					</div>
				<div class="entry">
					
					<?php the_content(''); ?>
						<div class="clear"></div>

			<?php comments_template(); ?>

				</div>
			

	
		</div>

		<?php endwhile; endif; ?>

		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>