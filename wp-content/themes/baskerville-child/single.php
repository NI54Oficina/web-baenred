<?php

	get_header();

	$format = get_post_format();

?>




<div class="wrapper section medium-padding <?php $post = get_post(); if($post->post_type=='menu') echo "menu-design"; ?>">

	<?php include 'title.php'; ?>

	<div class="section-inner body-post">

		<div class="content fleft">


			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="tags-post-inner">
					<?php
						$post_categories = wp_get_post_categories( get_the_ID() );
						foreach($post_categories as $c){
						$cat = get_category( $c );
						echo $cat->name."  ";
						}
					?>

					</h2>





					<?php if ($format == 'quote' || $format == 'link' || $format == 'audio' || $format == 'status' || $format == 'chat') : ?>

						<?php if ( has_post_thumbnail() ) : ?>

							<div class="featured-media">

								<?php the_post_thumbnail('post-image'); ?>

								<?php if ( !empty(get_post(get_post_thumbnail_id())->post_excerpt) ) : ?>

									<div class="media-caption-container">

										<p class="media-caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>

									</div>

								<?php endif; ?>

							</div> <!-- /featured-media -->

						<?php endif; ?>

					<?php endif; ?>

					<div class="post-header">

					    <h1 class="post-title"><?php the_title(); ?></h1>


								<?php include 'share.php'; ?>
							<p class="date-post-body"><?php the_time( 'j F, Y' ); ?>    Edición #<?php echo get_field('numero_de_edicion') ?></p>

							<img class="icono-enfoque" src="<?php echo site_url()?>/wp-content/themes/baskerville-child/images/enfoque-icono.svg" alt="">
					</div> <!-- /post-header -->

					<?php if ($format == 'link') : ?>

						<div class="post-link">

							<?php

								// Fetch post content
								$content = get_post_field( 'post_content', get_the_ID() );

								// Get content parts
								$content_parts = get_extended( $content );

								echo $content_parts['main'];
							?>

						</div> <!-- /post-link -->

					<?php elseif ($format == 'quote') : ?>

						<div class="post-quote">

							<?php

								// Fetch post content
								$content = get_post_field( 'post_content', get_the_ID() );

								// Get content parts
								$content_parts = get_extended( $content );

								echo $content_parts['main'];

							?>


						</div>

					<?php elseif ($format == 'gallery') : ?>

						<div class="featured-media">


							<?php baskerville_flexslider('post-image'); ?>

						</div> <!-- /featured-media -->


					<?php elseif ($format == 'video') : ?>

						<?php if ($pos=strpos($post->post_content, '<!--more-->')): ?>

							<div class="featured-media">

								<?php

									// Fetch post content
									$content = get_post_field( 'post_content', get_the_ID() );

									// Get content parts
									$content_parts = get_extended( $content );

									// oEmbed part before <!--more--> tag
									$embed_code = wp_oembed_get($content_parts['main']);

									echo $embed_code;

								?>

							</div> <!-- /featured-media -->

						<?php endif; ?>

					<?php elseif ( has_post_thumbnail() ) : ?>

						<div class="featured-media">

							<?php the_post_thumbnail('post-image'); ?>

							<?php if ( !empty(get_post(get_post_thumbnail_id())->post_excerpt) ) : ?>

								<div class="media-caption-container">

									<p class="media-caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>

								</div>

							<?php endif; ?>

						</div> <!-- /featured-media -->

					<?php endif; ?>

					<div class="post-content">

						<?php
							if ($format == 'link' || $format == 'quote' || $format == 'video') {
								$content = $content_parts['extended'];
								$content = apply_filters('the_content', $content);
								echo $content;
							} else {
								the_content();
							}

							wp_link_pages();
						?>

						<div class="clear"></div>

					</div> <!-- /post-content -->

					<?php  $post = get_post(); if( comments_open() && $post->post_type!='menu') : ?>

					<div class="post-meta-container">

						<div class="post-author">

							<div class="post-author-content">

								<h4><?php the_author_meta('display_name'); ?></h4>

								<p><?php the_author_meta('description'); ?></p>

								<?php
									if(isset($_GET['author_name'])) :
										$curauth = get_userdatabylogin($author_name);
									else :
										$curauth = get_userdata(intval($author));
									endif;
								?>

								<div class="author-links">

									<a class="author-link-posts" title="<?php _e('Author archive','baskerville'); ?>" href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php _e('Author archive','baskerville'); ?></a>

									<?php $author_url = get_the_author_meta('user_url');

									$author_url = preg_replace('#^https?://#', '', rtrim($author_url,'/'));

									if (!empty($author_url)) : ?>

										<a class="author-link-website" title="<?php _e('Author website','baskerville'); ?>" href="<?php the_author_meta('user_url'); ?>"><?php _e('Author website','baskerville'); ?></a>

									<?php endif;

									$author_mail = get_the_author_meta('email');

									$show_mail = get_the_author_meta('showemail');

									if ( !empty($author_mail) && ($show_mail == "yes") ) : ?>

										<a class="author-link-mail" title="<?php echo $author_mail; ?>" href="mailto:<?php echo $author_mail ?>"><?php echo $author_mail; ?></a>

									<?php endif;

									$author_twitter = get_the_author_meta('twitter');

									if (!empty($author_twitter)) : ?>

										<a class="author-link-twitter" title="<?php echo '@' . $author_twitter . ' '; ?><?php _e('on Twitter','baskerville'); ?>" href="http://www.twitter.com/<?php echo $author_twitter ?>"><?php echo '@' . $author_twitter . ' '; ?><?php _e('on Twitter','baskerville'); ?></a>

									<?php endif; ?>

								</div> <!-- /author-links -->

							</div> <!-- /post-author-content -->

						</div> <!-- /post-author -->

						<div class="post-meta">

							<p>Link a tu Twitter</p>

							<!-- <p class="post-date"><?php the_time( get_option( 'date_format' ) ); ?></p>

							<?php if( function_exists('zilla_likes') ) zilla_likes(); ?>

							<p class="post-categories"><?php the_category(', '); ?></p>

							<?php if (has_tag()) : ?>

								<p class="post-tags"><?php the_tags('', ', '); ?></p>

							<?php endif; ?>

							<div class="clear"></div>

							<div class="post-nav">

								<?php
								$prev_post = get_previous_post();
								if (!empty( $prev_post )): ?>

									<a class="post-nav-prev" title="<?php _e('Previous post:', 'baskerville'); echo ' ' . esc_attr( get_the_title($prev_post) ); ?>" href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php _e('Previous post', 'baskerville'); ?></a>

								<?php endif; ?>

								<?php
								$next_post = get_next_post();
								if (!empty( $next_post )): ?>

									<a class="post-nav-next" title="<?php _e('Next post:', 'baskerville'); echo ' ' . esc_attr( get_the_title($next_post) ); ?>" href="<?php echo get_permalink( $next_post->ID ); ?>"><?php _e('Next post', 'baskerville'); ?></a>

								<?php endif; ?>

								<?php edit_post_link( __('Edit post', 'baskerville')); ?>

								<div class="clear"></div>

							</div> -->

						</div> <!-- /post-meta -->

						<div class="clear"></div>

					</div> <!-- /post-meta-container -->



					<?php comments_template( '', true ); ?>

				<?php endif; ?>  <!-- Termina el chekeoo de si existe o no comentarios  -->

			   	<?php endwhile; else: ?>



					<p><?php _e("We couldn't find any posts that matched your query. Please try again.", "baskerville"); ?></p>



				<?php endif; ?>

			</div> <!-- /post -->

		</div> <!-- /content -->

		<?php get_sidebar(); ?>

		<div class="clear"></div>

	</div> <!-- /section-inner -->

</div> <!-- /wrapper -->

<?php get_footer(); ?>
