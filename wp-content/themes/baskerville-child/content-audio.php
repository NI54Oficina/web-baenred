<?php $audio_url = get_post_meta($post->ID, 'audio_url', true); ?>

<div class="post-header">

  <?php
    $post_categories = wp_get_post_categories( get_the_ID() );
    foreach($post_categories as $c){
    $cat = get_category( $c );
    echo $cat->name."  ";
    }

    if(  get_field('categoria_personalizada'))echo "  #".get_field('categoria_personalizada');
  ?>

    <?php if( get_field('nota_destacada')==1 ) { ?> <span class="sticky-post"><?php _e('Sticky post', 'baskerville'); ?></span> <?php } ?>

     <p class="post-hashtags"><?php the_tags( '#', ' #', ' ' ); ?></p>

     <h2 class="post-title"><?php $title= get_the_title();
       $words= explode(" ", $title);

       for($i=0; $i<count($words); $i++){
         if($words[$i][0]=="#"){
             $hashtags= explode("#", $words[$i]);

             // echo var_dump($hastags);

             for($j=0;$j< count($hashtags); $j++ ){
               if(strlen($hashtags[$j])>1){
                 echo "<span class='hash-title'>#".$hashtags[$j]."</span>";
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

<?php if($post->post_content != "") : ?>

	<div class="post-excerpt">

		<?php the_excerpt('100'); ?>

	</div> <!-- /post-excerpt -->

<?php endif; ?>

<?php baskerville_meta_child(); ?>

<div class="clear"></div>
