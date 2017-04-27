<?php


function theme_add_bootstrap() {
	wp_enqueue_script( 'jquery-min-js', site_url() . '/jquery.min.js');
	wp_enqueue_style( 'bootstrap-css', site_url() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_script( 'bootstrap-js', site_url() . '/bootstrap/js/bootstrap.min.js');
	wp_enqueue_script( 'script-js', site_url() . '/script.js');

	wp_enqueue_script( 'lightslider-js', site_url() . '/lightslider.js');
		wp_enqueue_style( 'lightslider-css', site_url() . '/lightslider.css');
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


function create_post_type() {

	$labels = array(
			 "name" => "Menu",
			 "singular_name" => "Menu",
			 "menu_name" => "Menu",
			 "all_items" => "All Menu pages",
			 "add_new" => "Add New",
			 "add_new_item" => "Add New Menu page",
			 "edit" => "Edit",
			 "edit_item" => "Edit Menu page",
			 "new_item" => "New Menu page",
			 "view" => "View",
			 "view_item" => "View Menu page",
			 "search_items" => "Search Menu page",
			 "not_found" => "No Menu page Found",
			 "not_found_in_trash" => "No Menu page Found in Trash",
			 "parent" => "Parent Menu page",
	 );

	 $args = array(
			 "labels" => $labels,
				"description" => "",
			 "public" => true,
			 "show_ui" => true,
			 "has_archive" => true,
			 "show_in_menu" => true,
			 "exclude_from_search" => false,
			 "capability_type" => "page",
			 "map_meta_cap" => true,
			 "hierarchical" => true,
			 "rewrite" => array( "slug" => "menu", "with_front" => true ),
			 "query_var" => true,
			 "supports" => array( "title", "revisions", "thumbnail" ),
			 'taxonomies' => array('post_tag')
	 );

	 register_post_type( "menu", $args );
}


		add_action( 'init', 'create_post_type' );

		function my_theme_deactivate() {
		    delete_option( 'my_theme_active' );
		}
		add_action( 'switch_theme', 'my_theme_deactivation' );

		$is_active = get_option( 'my_theme_active' );
		if ( 'set' !== $check ) {
		    create_post_type();
		    flush_rewrite_rules();

		    add_option( 'my_theme_active', 'set', '', 'no' );
		}


?>
