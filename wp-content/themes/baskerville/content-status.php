<?php if($post->post_content != "") : ?>

	<div class="post-excerpt">

		<?php the_excerpt('25'); ?>

	</div> <!-- /post-excerpt -->

<?php endif; ?>

<?php baskerville_meta(); ?>

<div class="clear"></div>
