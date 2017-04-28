<div class="post-header">

  <h3 class="post-seccion">
    <?php
      $post_categories = wp_get_post_categories( get_the_ID() );
      foreach($post_categories as $c){
      $cat = get_category( $c );
      echo $cat->name."  ";
      }
    ?>
  </h3>

    <?php if( get_field('nota_destacada')==1 ) { ?> <span class="sticky-post"><?php _e('Sticky post', 'baskerville'); ?></span> <?php } ?>

     <p class="post-hashtags"><?php the_tags( '#', ' #', ' ' ); ?></p>

    <h2 class="post-title"><span class="hash-destacada">#HashDestacada </span><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

</div> <!-- /post-header -->

<div class="post-quote">

	<?php

		// Fetch post content
		$content = get_post_field( 'post_content', get_the_ID() );

		// Get content parts
		$content_parts = get_extended( $content );

		// Output part before <!--more--> tag
		echo $content_parts['main'];

	?>

</div> <!-- /post-quote -->

<div class="post-excerpt">

	<?php
		if ($pos=strpos($post->post_content, '<!--more-->')) {
			echo  '<p>' . mb_strimwidth($content_parts['extended'], 0, 200, '...') . '</p>';
		} else {
			the_excerpt('100');
		}
	?>

</div> <!-- /post-excerpt -->

<?php baskerville_meta_child(); ?>

<div class="clear"></div>
