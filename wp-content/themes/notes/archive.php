<?php get_header(); ?>

	<div id="main">

		<?php is_tag(); ?>
			<?php if (have_posts()) : ?>
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

					<?php /* If this is a category archive */ if (is_category()) { ?>

						<div class="page-title"><?php _e( 'Posts Under', 'my_notes' ); ?> &#8216;<?php single_cat_title(); ?>&#8217; <?php _e( 'Category', 'my_notes' ); ?></div>

					<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>

						<div class="page-title"><?php _e( 'Posts Tagged', 'my_notes' ); ?> &#8216;<?php single_tag_title(); ?>&#8217;</div>

					<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
						
						<div class="page-title"><?php printf( __( 'Daily Archives : <span>%s</span>', 'my_notes'), get_the_date() ); ?></div>
					
					<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
					
						<div class="page-title"><?php printf( __( 'Monthly Archives : <span>%s</span>', 'my_notes'), get_the_date( 'F Y' ) ); ?></div>

					<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
						
						<div class="page-title"><?php printf( __( 'Monthly Archives : <span>%s</span>', 'faber'), get_the_date( 'Y' ) ); ?></div>
					
					<?php /* If this is an author archive */ } elseif (is_author()) { ?>
						
						<div class="page-title"><?php _e( 'Author Archive', 'my_notes' ); ?></div>
					
					<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
					
					<div class="page-title"><?php _e( 'Blog Archives', 'my_notes' ); ?></div>

		<?php } ?>

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

		<div class="page-title"><?php _e( 'Not Found', 'my_notes' ); ?></div>

		 <?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>