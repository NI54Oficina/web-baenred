<!DOCTYPE html>

<html <?php language_attributes(); ?>>


	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >

		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<div class="header section small-padding bg-dark bg-image" style="">

			<!-- <div class="header section small-padding bg-dark bg-image" style="background-image: url(<?php if (get_header_image() != '') : ?><?php header_image(); ?><?php else : ?><?php echo get_template_directory_uri() . '/images/header.jpg'; ?><?php endif; ?>);"> -->
				<div class="link-social">
					<a  href="#"><img src="<?php echo site_url()?>/wp-content/themes/baskerville-child/images/facebook.svg" alt=""></a>
					<a  href="#"><img src="<?php echo site_url()?>/wp-content/themes/baskerville-child/images/twitter.svg" alt=""></a>
					<a  href="#"><img src="<?php echo site_url()?>/wp-content/themes/baskerville-child/images/youtube.svg" alt=""></a>
					<a  href="#"><img src="<?php echo site_url()?>/wp-content/themes/baskerville-child/images/instagram.svg" alt=""></a>
				</div>



			<div class="header-search-block bg-graphite hidden">

				<!-- <?php get_search_form(); ?> -->

				<form method="get" class="searchform" action="http://localhost/web-baenred/">
						<input type="search" value="" placeholder="Buscar..." name="s" class="s" />
						<input type="submit" class="searchsubmit" value="Search">
				</form>


			</div> <!-- /header-search-block -->

			<div class="header-inner section-inner">

				<?php if ( get_theme_mod( 'baskerville_logo' ) ) : ?>

					<div class="blog-logo">

				        <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>' rel='home'>
				        	<img src='<?php echo esc_url( get_theme_mod( 'baskerville_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>'>
				        </a>

					</div>

				<?php elseif ( get_bloginfo( 'description' ) || get_bloginfo( 'title' ) ) : ?>

						<h1 class="blog-title">
							<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
						</h1>

						<?php if ( get_bloginfo( 'description' ) ) { ?>

							<h3 class="blog-description"><?php echo esc_attr( get_bloginfo( 'description' ) ); ?></h3>

						<?php } ?>

				<?php endif; ?>

			</div> <!-- /header-inner -->

		</div> <!-- /header -->

		<div class="navigation section no-padding bg-dark">

			<div class="navigation-inner section-inner nav-menu">

				<div class="nav-toggle fleft hidden">

					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>

					<div class="clear"></div>

				</div>

				<ul class="main-menu">
					<?php
					$test= wp_get_post_terms();
					var_dump($test) ?>


					<!-- <li class="page_item"><a href="">#DanLaNota</a></li>
					<li class="page_item"><a href="">#Enfoque</a></li>
					<li class="page_item"><a href="">#Enroscate</a></li>
					<li class="page_item"><a href="">#Enterate</a></li>
					<li class="page_item"><a href="">#Mapeo</a></li> -->


					<?php if ( has_nav_menu( 'primary' ) ) {

						wp_nav_menu( array(

							'container' => '',
							'items_wrap' => '%3$s',
							'theme_location' => 'primary',
							'walker' => new baskerville_nav_walker

						) ); } else {

						wp_list_pages( array(

							'container' => '',
							'title_li' => ''

						));

					} ?>

				 </ul> <!-- /main-menu -->

				 <a class="search-toggle fright" href="#"></a>

				 <div class="clear"></div>

			</div> <!-- /navigation-inner -->

		</div> <!-- /navigation -->

		<div class="mobile-navigation section bg-graphite no-padding hidden">

			<ul class="mobile-menu">


					<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a href="">#DanLaNota</a></li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a href="">#Enfoque</a></li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a href="">#Enroscate</a></li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a href="">#Enterate</a></li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a href="">#Mapeo</a></li>




				<!-- <?php if ( has_nav_menu( 'primary' ) ) {

					wp_nav_menu( array(

						'container' => '',
						'items_wrap' => '%3$s',
						'theme_location' => 'primary',
						'walker' => new baskerville_nav_walker

					) ); } else {

					wp_list_pages( array(

						'container' => '',
						'title_li' => ''

					));

				} ?> -->

			 </ul> <!-- /main-menu -->

		</div> <!-- /mobile-navigation -->
