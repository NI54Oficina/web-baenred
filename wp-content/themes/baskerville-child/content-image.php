

<div class="post-header">



    <?php if( get_field('nota_destacada')==1) { ?> <span class="sticky-post"><?php _e('Sticky post', 'baskerville'); ?></span> <?php } ?>

    <h3 class="post-seccion" style="position:relative">
      <?php
        $post_categories = wp_get_post_categories( get_the_ID() );
        foreach($post_categories as $c){
        $cat = get_category( $c );
        echo $cat->name."  ";
        }

        if(  get_field('categoria_personalizada'))echo "  #".get_field('categoria_personalizada');
      ?>
    </h3>
     <p class="post-hashtags"><?php the_tags( '#', ' #', ' ' ); ?></p>

    <h2 class="post-title"><?php $title= get_the_title();
      $words= explode(" ", $title);

      for($i=0; $i<count($words); $i++){
        if($words[$i][0]=="#"){
            $hashtags= explode("#", $words[$i]);

            // echo var_dump($hastags);

            for($j=0;$j< count($hashtags); $j++ ){
              if(strlen($hashtags[$j])>1){
                echo "<a class='hash-title' href='?s=".$hashtags[$j]."' >#".$hashtags[$j]."</a>";
              }

            }

            echo " ";
        }else{
          echo $words[$i]." ";
        }
      }



    ?>
    </h2>

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

	<?php else : the_excerpt("20"); endif; ?>

</div>

<?php baskerville_meta_child(); ?>

<div class="clear"></div>
