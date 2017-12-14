<?php get_header(); ?>

	<div id="main">

	<?php if (have_posts()) : ?>

		<div class="page-title"><?php _e( 'Search Results for', 'my_notes' ); ?> &#8216;<?php the_search_query() ?>&#8217;</div>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
				<div class="post-top">
					<div class="post-date">
						<?php the_time('j M Y') ?>
					</div>
					<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					</div>

					<div class="entry">
						
						<?php the_excerpt(''); ?>
						<?php if(strpos(get_the_content(),'more-link')) { ?>
							<a href="<?php the_permalink()?>"><?php _e( 'Continue Reading &rarr;', 'my_notes' ); ?></a>
						<?php } ?>
						<div class="clear"></div>
					<div class="post-meta">
						<?php _e( 'by', 'my_notes' ); ?> <?php the_author() ?> | <?php _e( 'Filed in', 'my_notes' ); ?> <?php the_category(', ') ?> | <?php comments_popup_link('No comments', '1 comment', '% comments'); ?>
					</div>

					</div>

			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="a-left"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="a-right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			<div class="clear"></div>
		</div>

	<?php else : ?>

		<h2 class="page-title"><?php _e( 'Nothing Found', 'my_notes' ); ?></h2>
		
		<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>