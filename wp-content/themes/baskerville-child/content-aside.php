<?php if($post->post_content != "") : ?>

	<div class="post-excerpt">

		<?php the_excerpt('100'); ?>

	</div> <!-- /post-excerpt -->

<?php endif; ?>

<?php if( get_field('nota_destacada')==1 ) { ?> <span class="sticky-post"><?php _e('Sticky post', 'baskerville'); ?></span> <?php } ?>

<?php baskerville_meta_child(); ?>

<div class="clear"></div>
