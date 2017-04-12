<?php $audio_url = get_post_meta($post->ID, 'audio_url', true); ?>

<div class="post-header">

    <h3 class="post-seccion"> <?php get_the_category(); ?></h3>

    <?php if( is_sticky() ) { ?> <span class="sticky-post"><?php _e('Sticky post', 'baskerville'); ?></span> <?php } ?>

     <p class="post-hashtags"><?php the_tags( '#', ' #', ' ' ); ?></p>

    <h2 class="post-title"><span class="hash-destacada">#HashDestacada </span><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

</div> <!-- /post-header -->

<?php if($post->post_content != "") : ?>

	<div class="post-excerpt">

		<?php the_excerpt('100'); ?>

	</div> <!-- /post-excerpt -->

<?php endif; ?>

<?php baskerville_meta_child(); ?>

<div class="clear"></div>
