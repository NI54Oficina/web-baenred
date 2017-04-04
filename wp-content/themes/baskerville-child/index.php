<?php get_header(); ?>

<div class="wrapper section medium-padding">


	<script type='text/javascript' src='http://demo.acosmin.com/themes/justwrite/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
	<script src="jquery-migrate.min.js"> </script>
	<script src="carrousel.min.js"></script>

	<!--
#ac-widget-featured-posts-slider-3

 -->

 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 	<p class="col-lg-3 col-md-3 col-sm-3 col-xs-3">TITULO</p>
	<p class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Titulo nota 1</p>
	<p class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Titulo nota 2</p>
	<p class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Titulo nota 3</p>
 </div>

	<section id="ac-widget-featured-posts-slider-3" class="n-mb container ss-slider builder clearfix">

							<div class="col twelvecol clearfix">

								<div class="ss-nav-btn alignleft"><a href="#" class="ss-prev-3"><span class="glyphicon glyphicon-menu-left"></span></a></div>
								<div class="ss-nav-btn alignright"><a href="#" class="ss-next-3"><span class="glyphicon glyphicon-menu-right"></span></a></div>

								<div class="slider-container slider-number-3 owl-carousel">

									<div class="item">
											<figure class="sc-thumbnail">
												<img width="900" height="520" src="http://demo.acosmin.com/themes/justwrite/wp-content/uploads/2015/10/house_of_cards_frank_underwood_kevin_spacey_102090_3840x2160.jpg" class="attachment-ac-masonry-2x-thumbnail size-ac-masonry-2x-thumbnail wp-post-image" alt="house_of_cards_frank_underwood_kevin_spacey_102090_3840x2160"  sizes="(max-width: 900px) 100vw, 900px" />				<figcaption class="st-overlay">
													<span class="s-social">
														<a href="" class="social-btn facebook"></a>
														<a href="https://plus.google.com/share?url=http://demo.acosmin.com/themes/justwrite/typography-and-headings-go-so-well-together-all-the-time/" class="social-btn google-plus">
															<i class="fa fa-google-plus"></i>
														</a>

													</span>
													<a href="" rel="nofollow" class="st-overlay-link"></a>
													<div class="st-title-wrap">
															<aside class="s-info si-center clearfix">
																<!-- <a href="" rel="nofollow" class="com"> </a> -->
																<!-- <time class="date" datetime="2015-05-26">May 26, 2015</time> -->
																<a href="" class="category" title="" ><p style="text-align: center;color: white;  margin-bottom: 10%;">#MapeoPorteño</p></a>
															</aside>
															<h3 class="section-title st-wrapped st-large st-bold" style="border: none;
    text-align: center;
    border: none;
    background: transparent;
    color: white;">
																<a href="" rel="bookmark">#TITULO DE NOTA</a>
															</h3>
													</div>
												</figcaption>
											</figure>
									</div>




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




		<?php if (have_posts()) : ?>

			<div class="posts">

		    	<?php while (have_posts()) : the_post(); ?>

		    		<div class="post-container">

						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				    		<?php get_template_part( 'content', get_post_format() ); ?>

			    		</div> <!-- /post -->

		    		</div>

		        <?php endwhile; ?>

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
