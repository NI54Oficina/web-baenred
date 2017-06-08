<?php
/**
 * Template Name: Clean Page
 * This template will only display the content you entered in the page editor
 */
?>

    <?php
    global $post;
	if(isset($_POST["offset"])){
		$offset=$_POST["offset"];
	}else{
		$offset=0;
	}
	if(isset($_POST["category"])){
		$category=$_POST["category"];
	}else{
		$category=0;
	}

    $myposts = get_posts( array(
        'posts_per_page' => 10,
        'offset'         => $offset,
		"category" => $category
    ) );

    if ( $myposts ) {
        foreach ( $myposts as $post ) :
            setup_postdata( $post ); ?>
			<div class="post-container">

				<!-- <a href="<?php the_permalink(); ?>" style="position:absolute; height:100%; width:100%"></a> -->


			<div id="post-<?php the_ID(); ?>" onclick="add_link('<?php the_permalink(); ?>')" <?php post_class(); ?>>
					<?php get_template_part( 'content', get_post_format() ); ?>

				</div> <!-- /post -->



			</div>
        <?php
        endforeach;
        wp_reset_postdata();
    }
    ?>
