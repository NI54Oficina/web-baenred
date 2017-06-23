
<div class="footer section medium-padding bg-graphite footer-container">

	<div class="section-inner row footer-container-inner" style="background-color:black">


		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 footer-text-left" hid="1">

			<h1 class="oswald-regular">#Enredados</h1>
			<p class="asap-regular">#BaEnRed llega a la web para contarte lo que pasa y cómo pasa sin vueltas con un lenguaje joven, con otra mirada para saber lo que tenemos, lo que falta y lo que estaría bueno tener. Trae datos interesantes y textos claros, diferentes enfoques que te generen nuevas preguntas y te enteres de lo que pasa de manera simple, entretenida y al ritmo de nuestro tiempo.</p>

		</div>

		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 footer-text-center" style="background-color:black" hid="1">
			<p class="title" style="padding-bottom:0">#Copate</p>
			<p class="colored"  style="padding-bottom:3em">Conocé más sobre la próxima edición</p>

			<!-- <button type="button" name="button" class="caveat">Ver</button> -->


			<a href="<?php echo site_url(); ?>/ver">Ver</a>


		</div>

		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 footer-text-right" style="background-color:#262626" hid="1">

			<p class="colored"> */ Publicitá /*</p>
			<p class="asap-regular"> Mandanos un mail a comercial@baenred.com </p>


		</div>

		<!-- <?php if ( is_active_sidebar( 'footer-a' ) ) : ?>

			<div class="column column-1 one-third">

				<div class="widgets">

					<?php dynamic_sidebar( 'footer-a' ); ?>

				</div>

			</div>

		<?php else : ?>

			<div class="column column-1 one-third">

				<div class="widgets">

					<div id="search" class="widget widget_search">

						<div class="widget-content">

							<h3 class="widget-title"><?php _e( 'Search form', 'baskerville' ); ?></h3>
			                <?php get_search_form(); ?>

						</div>

	                </div>

				</div>

			</div>

		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-b' ) ) : ?>

			<div class="column column-2 one-third">

				<div class="widgets">

					<?php dynamic_sidebar( 'footer-b' ); ?>

				</div>

			</div>

		<?php else : ?>

			<div class="column column-2 one-third">

				<div class="widgets">

					<div class="widget widget_recent_entries">

						<div class="widget-content">

							<h3 class="widget-title"><?php _e( 'Latest posts', 'baskerville' ); ?></h3>

							<ul>
				                <?php
									$args = array( 'numberposts' => '5', 'post_status' => 'publish' );
									$recent_posts = wp_get_recent_posts( $args );
									foreach( $recent_posts as $recent ){
										echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
									}
								?>
							</ul>

						</div>

	                </div>

				</div>

			</div>

		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer-c' ) ) : ?>

			<div class="column column-3 one-third">

				<div class="widgets">

					<?php dynamic_sidebar( 'footer-c' ); ?>

				</div>

			</div>

		<?php else : ?>

			<div class="column column-3 one-third">

				<div id="meta" class="widget widget_text">
					<div class="widget-content">



						<h3 class="widget-title"><?php _e( "Text widget", "baskerville" ); ?></h3>
						<p><?php _e( "These widgets are displayed because you haven't added any widgets of your own yet. You can do so at Appearance > Widgets in the WordPress settings.", "baskerville" ); ?></p>

					</div>
                </div>

			</div>

		<?php endif; ?>

		<div class="clear"></div> -->

	</div>

</div>

<div class="credits section bg-dark small-padding" style="background-color:black;     padding-bottom: 50px;" >

				<div class="credits-inner section-inner">

					<!-- <p class="credits-left fleft"> -->


					<!-- </p> -->

					<!-- <p class="credits-right fright"> -->

					<div  class="col-lg-12 colg-md-12 col-sm-12 col-xs-12 footer-info oswald-regular">



						 <a href="https://www.fb.com/BAenRedOK"><img src="<?php echo site_url()?>/wp-content/themes/baskerville-child/images/facebook_blanco.svg" alt=""></a>

						 <a href="https://twitter.com/BAenredOK"><img src="<?php echo site_url()?>/wp-content/themes/baskerville-child/images/twitter_blanco.svg" alt=""></a>

						 <img class="main-logo-footer" src="<?php echo site_url()?>/wp-content/themes/baskerville-child/images/logo_footer.png" alt="">

						 <a href="https://www.youtube.com/channel/UC2hRe8rUbMr5fAedtxdC78w"><img src="<?php echo site_url()?>/wp-content/themes/baskerville-child/images/you_tube_blanco.svg" alt=""></a>

						 <a href="https://www.instagram.com/baenredok/"><img src="<?php echo site_url()?>/wp-content/themes/baskerville-child/images/instagram_blanco.svg" alt=""></a>


						 <a class="tothetop oswald-bold" title="<?php _e('To the top', 'baskerville'); ?>" href="#">UP &uarr;</a>

					</div>


					<!-- </p> -->

					<!-- <div class="clear"></div> -->

				</div> <!-- /credits-inner -->

</div> <!-- /credits -->

<?php wp_footer(); ?>




</body>
</html>
