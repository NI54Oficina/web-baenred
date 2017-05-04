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




	        <div class="widget-content" style="position:relative">

								<span class="sticky-eye"><?php _e('Sticky post', 'baskerville'); ?></span>

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

		<div class="widget widget_text" style="border:none;">

	        <div class="widget-content">
<div class="twitter-container">
<?php echo do_shortcode("[custom-twitter-feeds]"); ?>
</div>
			</div>

			<div class="clear"></div>

		</div>

		<style media="screen">
		a.twitter-timeline {
		  /* Buttonish */
		  display: inline-block;
		  padding: 6px 12px 6px 30px;
		  margin: 10px 0;
		  border: #ccc solid 1px;
		  border-radius: 3px;
		  background-color: red; url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNy4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNzIgNzIiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDcyIDcyIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxyZWN0IHg9IjAiIGZpbGw9Im5vbmUiIHdpZHRoPSI3MiIgaGVpZ2h0PSI3MiIvPg0KPHBhdGggZmlsbD0iIzU1YWNlZSIgZD0iTTY4LjgxMiwxNS4xNDFjLTIuMzQ4LDEuMDM5LTQuODY5LDEuNzQzLTcuNTE5LDIuMDZjMi43MDMtMS42Miw0Ljc3OC00LjE4Nyw1Ljc1Ni03LjI0NGMtMi41MjksMS41LTUuMzMsMi41OTItOC4zMTMsMy4xNzYNCglDNTYuMzQ5LDEwLjU5MSw1Mi45NDgsOSw0OS4xODIsOWMtNy4yMjksMC0xMy4wOTIsNS44NjEtMTMuMDkyLDEzLjA5M2MwLDEuMDI2LDAuMTE4LDIuMDIxLDAuMzM4LDIuOTgxDQoJYy0xMC44ODUtMC41NDgtMjAuNTI4LTUuNzU3LTI2Ljk4Ny0xMy42NzljLTEuMTI2LDEuOTM2LTEuNzcxLDQuMTg0LTEuNzcxLDYuNTgxYzAsNC41NDIsMi4zMTIsOC41NTEsNS44MjQsMTAuODk4DQoJYy0yLjE0Ni0wLjA2OS00LjE2NS0wLjY1Ny01LjkzLTEuNjM4Yy0wLjAwMiwwLjA1NS0wLjAwMiwwLjExLTAuMDAyLDAuMTYyYzAsNi4zNDUsNC41MTMsMTEuNjM4LDEwLjUwNCwxMi44NA0KCWMtMS4xMDEsMC4yOTgtMi4yNTYsMC40NTctMy40NDksMC40NTdjLTAuODQ2LDAtMS42NjctMC4wNzgtMi40NjUtMC4yMzFjMS42NjcsNS4yLDYuNDk5LDguOTg2LDEyLjIzLDkuMDkNCgljLTQuNDgyLDMuNTEyLTEwLjEyOSw1LjYwNi0xNi4yNiw1LjYwNmMtMS4wNTUsMC0yLjA5Ni0wLjA2MS0zLjEyMi0wLjE4NGM1Ljc5NCwzLjcxNywxMi42NzYsNS44ODIsMjAuMDY3LDUuODgyDQoJYzI0LjA4MywwLDM3LjI1MS0xOS45NDksMzcuMjUxLTM3LjI0OWMwLTAuNTY2LTAuMDE0LTEuMTM0LTAuMDM5LTEuNjk0QzY0LjgzOCwyMC4wNjgsNjcuMDU4LDE3Ljc2NSw2OC44MTIsMTUuMTQxeiIvPg0KPC9zdmc+DQo=") 8px 8px no-repeat;
		  background-size: 1em 1em;

		  /* Text */
		  font: normal 12px/18px Helvetica, Arial, sans-serif;
		  color: red;
		  white-space: nowrap;
		}

		a.twitter-timeline:hover,
		a.twitter-timeline:focus {
		  background-color: red;
		}

		/* Color Highlight for keyboard navigation */

		a.twitter-timeline:focus {
		  outline: none;
		  border-color:red;
		}
		a.timeline-Widget {
    max-width: 1200px;
    background-color: #292F33;
    border-radius: 4px;
}
		</style>

		<!-- /widget_recent_entries -->


		<div class="tags">

			<h3>TAGS</h3>

			<?php the_tags( '<p>#', '</p><p>#', '</p>' ); ?>

		</div>


		<?php if(get_field('link_de_notas')){ ?>

				<div class="biblio">

					<h1>BIBLIO</h1>

						<?php

						$array=get_field('link_de_notas');

						$links=explode(";", $array);
						foreach ($links as $l) {
							$result=explode("::", $l);


							if( count($result[1])!=0 ){

 						?>
						<div class="">
							<a href="<?php echo $result[1] ?>"><p class="titulo-biblio"><?php echo $result[0] ?></p></a>

						</div>
						<?php }} ?>


				</div>
		<?php } ?>

	</div> <!-- /sidebar -->

<?php endif; ?>
