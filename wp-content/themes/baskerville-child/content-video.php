<div class="post-header">

    <h3 class="post-seccion">
      <?php
        $post_categories = wp_get_post_categories( get_the_ID() );
        foreach($post_categories as $c){
        $cat = get_category( $c );
        echo $cat->name."  ";
        }

        if(  get_field('categoria_personalizada'))echo "  #".get_field('categoria_personalizada');
      ?>
    </h3>

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
                 echo "<span class='hash-title'  >#".$hashtags[$j]."</span>";
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

<?php if ($pos=strpos($post->post_content, '<!--more-->')): ?>

	<div class="featured-media">

		<?php

			// Fetch post content
			$content = get_post_field( 'post_content', get_the_ID() );

			// Get content parts
			$content_parts = get_extended( $content );


			// oEmbed part before <!--more--> tag
			$embed_code = wp_oembed_get($content_parts['main']);

			echo $embed_code;

		?>

	</div> <!-- /featured-media -->

<?php endif; ?>

<div class="post-excerpt">

	<?php
		if ($pos=strpos($post->post_content, '<!--more-->')) {
			echo  '<p>' . mb_strimwidth($content_parts['extended'], 0, 200, '...') . '</p>';
		} else {
			the_excerpt('25');
		}
	?>

</div> <!-- /post-excerpt -->

<?php baskerville_meta_child(); ?>

<div class="clear"></div>
