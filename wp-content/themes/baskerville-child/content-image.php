

<div class="post-header">

    <h3 class="post-seccion"> #Enterate</h3>

    <?php if( is_sticky() ) { ?> <span class="sticky-post"><?php _e('Sticky post', 'baskerville'); ?></span> <?php } ?>

     <p class="post-hashtags"><?php the_tags( '#', ' #', ' ' ); ?></p>

    <h2 class="post-title"><span class="hash-destacada">#HashDestacada </span><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

</div> <!-- /post-header -->

<?php if ( has_post_thumbnail() ) : ?>

	<div class="featured-media">

		<?php if( is_sticky() ) { ?> <span class="sticky-post"><?php _e('Sticky post', 'baskerville'); ?></span> <?php } ?>

		<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

			<?php the_post_thumbnail('post-thumbnail'); ?>

		</a>

	</div> <!-- /featured-media -->

<?php endif; ?>

<div class="post-excerpt">

	<?php if ( !empty(get_post(get_post_thumbnail_id())->post_excerpt) ) : ?>

		<p class="image-caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>

	<?php else : the_excerpt('100'); endif; ?>

</div>

<?php baskerville_meta_child(); ?>

<div class="clear"></div>
