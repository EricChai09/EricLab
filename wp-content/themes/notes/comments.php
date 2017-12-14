<?php

	if ( post_password_required() ) { ?>

	<p class="nocomments"><?php _e( 'This post is password protected. Enter the password to view comments.', 'my_notes' ); ?></p>

	<?php

	 return;

		}

	

?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>

	<h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>

	<div class="navigation2">
		<div class="a-left"><?php previous_comments_link() ?></div>
		<div class="a-right"><?php next_comments_link() ?></div>
		<div class="clear"></div>
	</div>

	<ol class="commentlist">
	<?php wp_list_comments('avatar_size=50'); ?>
	</ol>

	<div class="navigation3">
		<div class="a-left"><?php previous_comments_link() ?></div>
		<div class="a-right"><?php next_comments_link() ?></div>
		<div class="clear"></div>
	</div>

 <?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>

		<!-- If comments are closed. -->

		<?php if ( ! is_page() ) {?>
			<p class="nocomments"><?php _e( 'Comments are disabled', 'my_notes' ); ?></p>
		<?php }?>

	<?php endif; ?>

<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>

<?php comment_form(array('comment_notes_after'=>'' )); ?>

<?php endif; // if you delete this the sky will fall on your head ?>