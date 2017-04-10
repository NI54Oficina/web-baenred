<?php if($post->post_content != "") : ?>

	<div class="post-excerpt">

		<?php the_excerpt('50'); ?>

	</div> <!-- /post-excerpt -->

<?php endif; ?>

<?php baskerville_meta_child(); ?>

<div class="clear"></div>
