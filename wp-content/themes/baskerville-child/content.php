<div class="post-header">

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

    <?php if( is_sticky() ) { ?> <span class="sticky-post"><?php _e('Sticky post', 'baskerville'); ?></span> <?php } ?>

</div> <!-- /post-header -->

<?php if ( has_post_thumbnail() ) : ?>

	<div class="featured-media">

		<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">

			<?php the_post_thumbnail('post-thumbnail'); ?>

		</a>

	</div> <!-- /featured-media -->

<?php endif; ?>

<div class="post-excerpt">

	<?php the_excerpt('100'); ?>

</div> <!-- /post-excerpt -->

<?php baskerville_meta_child(); ?>

<div class="clear"></div>
