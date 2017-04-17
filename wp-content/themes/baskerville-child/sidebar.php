<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>

	<div class="sidebar fright" role="complementary">

		<?php dynamic_sidebar( 'sidebar' ); ?>

	</div><!-- /sidebar -->

<?php else : ?>

	<div class="sidebar fright" role="complementary">



		<!-- <div id="search" class="widget widget_search">

			<div class="widget-content">

	            <?php get_search_form(); ?>

			</div>

	    </div>  -->
			<!-- /widget_search -->

			<div class="">



	    <div class="widget widget_recent_entries">


				<span class="sticky-eye"><?php _e('Sticky post', 'baskerville'); ?></span>

	        <div class="widget-content">

	            <h3 class="widget-title">LO MÁS VISITADO</h3>

	            <ul>
					<?php
						$args = array( 'numberposts' => '4', 'post_status' => 'publish' );
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){
							echo '<p>#<a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </p> ';
							// echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';

						}
					?>
				</ul>

			</div>

			<div class="clear"></div>

		</div> <!-- /widget_recent_entries -->

		</div>

		<!-- <div class="widget widget_text">

	        <div class="widget-content">

	        	<h3 class="widget-title"><?php _e("Text widget", "baskerville") ?></h3>

	        	<div class="textwidget">

	        		<p><?php _e("These widgets are displayed because you haven't added any widgets of your own yet. You can do so at Appearance > Widgets in the WordPress settings.", "baskerville") ?></p>

				</div>

			</div>

			<div class="clear"></div>

		</div>  -->

		<!-- /widget_recent_entries -->


		<div class="tags">

			<h3>TAGS</h3>

			<?php the_tags( '<p>#', '</p><p>#', '</p>' ); ?>

		</div>


	</div> <!-- /sidebar -->

<?php endif; ?>
