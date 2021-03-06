<?php $link_url = get_post_meta($post->ID, 'link_url', true); ?>
<?php $link_title = get_post_meta($post->ID, 'link_title', true); ?>

<div class="post-header">

    <h3 class="post-seccion"> #Enterate</h3>

    <?php if(get_field('nota_destacada')==1) { ?> <span class="sticky-post"><?php _e('Sticky post', 'baskerville'); ?></span> <?php } ?>

     <p class="post-hashtags"><?php the_tags( '#', ' #', ' ' ); ?></p>

     <h2 class="post-title"><?php $title= get_the_title();
       $words= explode(" ", $title);

       for($i=0; $i<count($words); $i++){
         if($words[$i][0]=="#"){
             $hashtags= explode("#", $words[$i]);

             // echo var_dump($hastags);

             for($j=0;$j< count($hashtags); $j++ ){
               if(strlen($hashtags[$j])>1){
                 echo "<span class='hash-title' >#".$hashtags[$j]."</span>";
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

<div class="post-link">

	<?php

		// Fetch post content
		$content = get_post_field( 'post_content', get_the_ID() );

		// Get content parts
		$content_parts = get_extended( $content );

		// Output part before <!--more--> tag
		echo $content_parts['main'];

	?>

</div> <!-- /post-link -->

<?php if($post->post_content != "") : ?>

	<div class="post-excerpt">

		<?php
			if ($pos=strpos($post->post_content, '<!--more-->')) {
				echo  '<p>' . mb_strimwidth($content_parts['extended'], 0, 200, '...') . '</p>';
			} else {
				the_excerpt('100');
			}
		?>

	</div> <!-- /post-excerpt -->

<?php endif; ?>

<?php baskerville_meta_child(); ?>

<div class="clear"></div>
