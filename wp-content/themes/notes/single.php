<?php get_header(); ?>

	<div id="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="post-top">
					<div class="post-date">
						<?php the_time('j M Y') ?>
					</div>
					<h1 class="post-title"><?php the_title(); ?></h1>
					</div>
				<div class="entry">
					
					<?php the_content(''); ?>
						<div class="clear"></div>
					<?php wp_link_pages(array('before' => '<p class="paged"><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					
					<div class="post-meta">
						<?php _e( 'by', 'my_notes' ); ?> <?php the_author() ?> | <?php _e( 'Filed in', 'my_notes' ); ?> <?php the_category(', ') ?> | <?php the_tags('Tagged as: ', ', ', ' |'); ?> <?php comments_popup_link('No comments', '1 comment', '% comments'); ?>
					</div>
<div class="clear"></div>

			<?php comments_template(); ?>

				</div>
			

	
		</div>

	<?php endwhile; else: ?>

		<p><?php _e( 'Sorry, no posts matched your criteria.', 'my_notes' ); ?></p>

	<?php endif; ?>

	</div>

	<?php get_sidebar(); ?>
	
	<?php get_footer(); ?>