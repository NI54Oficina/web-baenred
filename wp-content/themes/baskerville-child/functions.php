<?php


function theme_add_bootstrap() {
	wp_enqueue_script( 'jquery-min-js', site_url() . '/jquery.min.js');
	wp_enqueue_style( 'bootstrap-css', site_url() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_script( 'bootstrap-js', site_url() . '/bootstrap/js/bootstrap.min.js');
	wp_enqueue_script( 'script-js', site_url() . '/script.js');
}

add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );


function my_theme_enqueue_styles() {

    $parent_style = 'baskerville-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );



/* Add bootstrap support to the Wordpress theme*/

function  baskerville_meta_child() { ?>

	<div class="post-meta">

		<a class="post-date" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_time( 'Y/m/d' ); ?></a>

		<?php

			if( function_exists('zilla_likes') ) zilla_likes();

			if ( comments_open() ) {
				comments_popup_link( 'Comentarios', 'Comentarios', 'Comentarios', 'post-comments' );
			}

			edit_post_link();

		?>

		<div class="clear"></div>

	</div> <!-- /post-meta -->

<?php
}


?>
