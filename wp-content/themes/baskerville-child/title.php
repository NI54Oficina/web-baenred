<div class="container-dinamic-title" style="">


		 <div class="titulos-container" style="display:inline-flex; width:100%; background-color:white;">
				 	<p class="titulo" style="width:33%; padding-right:20px;">Edición #01 <span> | </span></p>

					<div id="lightSlider" class="" style="width:70%">



					<?php
						$args = array( 'numberposts' => '5', 'post_status' => 'publish' );
						$recent_posts = wp_get_recent_posts( $args );
						for( $i=0; $i<count($recent_posts); $i++){
							echo '<p style="display:inline-flex" ><a style=" color:#bababa; " href="' . get_permalink($recent_posts[$i]["ID"]) . '" title="'.esc_attr($recent_posts[$i]["post_title"]).'" >' .   $recent_posts[$i]["post_title"].'</a></p> ';
						}
					?>

					</div>

		 </div>

 </div>
