<div class="" style="padding-left:3.3%; padding-right:3.3%;background-color:transparent;">


		 <div class="titulos-container" style="display:inline-flex; width:100%; background-color:white;">
				 	<p class="titulo" style="width:30%">TITULO <span> | </span></p>

					<?php
						$args = array( 'numberposts' => '5', 'post_status' => 'publish' );
						$recent_posts = wp_get_recent_posts( $args );
						for( $i=0; $i<3; $i++){
							echo '<p style="width:30%" ><a href="' . get_permalink($recent_posts[$i]["ID"]) . '" title="'.esc_attr($recent_posts[$i]["post_title"]).'" >' .   $recent_posts[$i]["post_title"].'</a></p> ';
						}
					?>

		 </div>

 </div>
