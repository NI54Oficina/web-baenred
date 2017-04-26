<div class="loading-screen"><p>SABELO</p></div>


<?php get_header(); ?>

<div class="wrapper section medium-padding">


	<script type='text/javascript' src='http://demo.acosmin.com/themes/justwrite/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
	<script src="jquery-migrate.min.js"> </script>
	<script src="carrousel.min.js"></script>

	<!--
#ac-widget-featured-posts-slider-3

 -->
<!-- <div class="" style="padding-left:3.3%; padding-right:3.3%;">


		 <div class="titulos-container" style="display:inline-flex; width:100%">
				 	<p class="titulo" style="width:30%">TITULO <span> | </span></p>

					<?php
						$args = array( 'numberposts' => '5', 'post_status' => 'publish' );
						$recent_posts = wp_get_recent_posts( $args );
						for( $i=0; $i<3; $i++){
							echo '<p style="width:30%" ><a href="' . get_permalink($recent_posts[$i]["ID"]) . '" title="'.esc_attr($recent_posts[$i]["post_title"]).'" >' .   $recent_posts[$i]["post_title"].'</a></p> ';
						}
					?>

		 </div>

 </div> -->




<?php include 'title.php'; ?>



	<section id="ac-widget-featured-posts-slider-3" class=" n-mb container ss-slider builder clearfix">

							<div class="col twelvecol clearfix">

								<div class="ss-nav-btn alignleft"><a href="#" class="ss-prev-3"><span class="glyphicon glyphicon-menu-left"></span></a></div>
								<div class="ss-nav-btn alignright"><a href="#" class="ss-next-3"><span class="glyphicon glyphicon-menu-right"></span></a></div>

								<div class="slider-container slider-number-3 owl-carousel">


									<?php if (have_posts()) : ?>

											<?php while (have_posts()) : the_post();
												if(get_post_format()=='image' &&  get_field('publicado') == 'si'){?>

													<div class="item">
															<figure class="sc-thumbnail">
																<?php the_post_thumbnail(array(1000, 520)); ?>
																<!-- la imagen -->
																<!-- <img width="900" height="520" src="http://demo.acosmin.com/themes/justwrite/wp-content/uploads/2015/10/house_of_cards_frank_underwood_kevin_spacey_102090_3840x2160.jpg" class="attachment-ac-masonry-2x-thumbnail size-ac-masonry-2x-thumbnail wp-post-image" alt="house_of_cards_frank_underwood_kevin_spacey_102090_3840x2160"  sizes="(max-width: 900px) 100vw, 900px" /> -->
																<figcaption class="st-overlay">
																	<span class="s-social">
																		<a href="" class="social-btn facebook"></a>
																		<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"> <!--el link + titulo  -->
																		<!-- <a href="https://plus.google.com/share?url=http://demo.acosmin.com/themes/justwrite/typography-and-headings-go-so-well-together-all-the-time/" class="social-btn google-plus"> -->
																			<i class="fa fa-google-plus"></i>
																		</a>

																	</span>
																	<a href="<?php the_permalink(); ?>" rel="nofollow" class="st-overlay-link" ></a>
																	<div class="st-title-wrap" style="    bottom: 25%;">
																			<aside class="s-info si-center clearfix">
																				<!-- <a href="" rel="nofollow" class="com"> </a> -->
																				<!-- <time class="date" datetime="2015-05-26">May 26, 2015</time> -->
																				<a href="" class="category caveat"  style="text-align: center;color: white;  margin-bottom: 10%; padding:0 .3em; border:1px solid white; background-color:rgba(0,0,0,0.5)" title="" >  <?php
																			      $post_categories = wp_get_post_categories( get_the_ID() );
																			      foreach($post_categories as $c){
																			      $cat = get_category( $c );
																			      echo $cat->name."  ";
																			      }
																			    ?>
																				</a>
																			</aside>
																			<h3 class="section-title st-wrapped st-large st-bold" style="border: none; text-align: center; border: none; background: transparent; color: white;font-size:1em;    padding-top: 50px; font-size:32px;">
																				<a href="<?php the_permalink(); ?>" class="oswald-bold" rel="bookmark" style="color:white;">#<?php the_title_attribute(); ?></a>
																			</h3>
																	</div>
																</figcaption>
															</figure>
													</div>


											<?php } endwhile; ?>

									<?php endif; ?>








								</div><!-- END .owl-carousel -->
							</div><!-- END .twelvecol -->

							<script type='text/javascript'>
							/* <![CDATA[ */
								(function( $ ) { $( document ).ready(function() {
									var owl3 = $('.slider-number-3');
									owl3.owlCarousel({ center: true, items: 2, loop: true, dots: false, autoplay: true, autoplayTimeout: 5000, responsiveRefreshRate: 100, responsiveClass:true, responsive: { 0: { items: 1 }, 500: { items: 1 }, 1221: { items: 2, autoWidth: true }, 1540: { items: 2, autoWidth: true },  1920: { items: 2 }, }, });
									$('.ss-next-3').click(function(event) { event.preventDefault(); owl3.trigger('next.owl.carousel', [200]); });
									$('.ss-prev-3').click(function(event) { event.preventDefault(); owl3.trigger('prev.owl.carousel', [200]); });
								});})(jQuery);
							/* ]]> */
							</script>


	</section>








	<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$total_post_count = wp_count_posts();
	$published_post_count = $total_post_count->publish;
	$total_pages = ceil( $published_post_count / $posts_per_page );

	if ( "1" < $paged ) : ?>

		<div class="page-title section-inner">

			<h5><?php printf( __('Page %s of %s', 'baskerville'), $paged, $wp_query->max_num_pages ); ?></h5>

		</div>

		<div class="clear"></div>

	<?php endif; ?>

	<div class="content section-inner">



		<?php $count=1; if (have_posts()) : ?>

			<div class="posts">

					<?php  while (have_posts()) : the_post();  ?>


						<?php if(get_field('nota_destacada')==1){

							$count++;?>

							<div class="post-container">

							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

									<?php get_template_part( 'content', get_post_format() ); ?>

								</div> <!-- /post -->

							</div>


							<?php if($count==3){?>

								<!-- corte para que tire los mas visto -->
								<div class="post-container">


								<div class="widget-home widget widget_recent_entries">

									<span class="sticky-eye"><?php _e('Sticky post', 'baskerville'); ?></span>

										<div class="widget-content">

												<h3 class="widget-title">LO MÁS VISITADO</h3>


										<?php
											$args = array( 'numberposts' => '4', 'post_status' => 'publish' );
											$recent_posts = wp_get_recent_posts( $args );
											foreach( $recent_posts as $recent ){
												echo '<p>#<a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </p> ';


											}
										?>


								</div>

								<div class="clear"></div>


								</div>

								<div class="" style="margin-top:20px; height:500px;">
									<!-- widget twitter -->
									<a class="twitter-timeline" data-width="420" data-height="500" data-theme="dark" data-link-color="#d6123e" href="https://twitter.com/TwitterDev/lists/national-parks">A Twitter List by TwitterDev</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
									<!-- widget twitter -->
								</div>


							</div>

							<?php }  	} ?>








						<?php  endwhile; ?>


						<?php while (have_posts()) : the_post();?>


							<?php if(get_field('nota_destacada')!=1){$count++;?>

								<div class="post-container">

								<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

										<?php get_template_part( 'content', get_post_format() ); ?>

									</div> <!-- /post -->

								</div>


								<?php if($count==3){?>

									<!-- corte para que tire los mas visto -->
									<div class="post-container">


									<div class="widget-home widget widget_recent_entries">

										<span class="sticky-eye"><?php _e('Sticky post', 'baskerville'); ?></span>

											<div class="widget-content">

													<h3 class="widget-title">LO MÁS VISITADO</h3>


											<?php
												$args = array( 'numberposts' => '4', 'post_status' => 'publish' );
												$recent_posts = wp_get_recent_posts( $args );
												foreach( $recent_posts as $recent ){
													echo '<p>#<a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </p> ';


												}
											?>


									</div>

									<div class="clear"></div>


									</div>

									<div class="" style="margin-top:20px; height:500px;">
										<!-- widget twitter -->
										<a class="twitter-timeline" data-width="420" data-height="500" data-theme="dark" data-link-color="#d6123e" href="https://twitter.com/TwitterDev/lists/national-parks">A Twitter List by TwitterDev</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
										<!-- widget twitter -->
									</div>


								</div>

								<?php } } ?>








							<?php  endwhile; ?>


			<?php endif; ?>

		</div> <!-- /posts -->


	</div> <!-- /content -->


	<?php if ( $wp_query->max_num_pages > 1 ) : ?>

		<div class="archive-nav section-inner">

			<?php echo get_next_posts_link( '&laquo; ' . __('Older posts', 'baskerville')); ?>

			<?php echo get_previous_posts_link( __('Newer posts', 'baskerville') . ' &raquo;'); ?>

			<div class="clear"></div>

		</div> <!-- /post-nav archive-nav -->

	<?php endif; ?>

	<div class="clear"></div>

</div> <!-- /wrapper -->

<?php get_footer(); ?>
