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
				<div class="link-social hidden-xs">
					<a  href="https://www.fb.com/BAenRedOK"><img src="<?php echo site_url()?>/wp-content/themes/baskerville-child/images/facebook.svg" alt=""></a>
					<a  href="https://twitter.com/BAenredOK"><img src="<?php echo site_url()?>/wp-content/themes/baskerville-child/images/twitter.svg" alt=""></a>
					<a  href="https://www.youtube.com/channel/UC2hRe8rUbMr5fAedtxdC78w"><img src="<?php echo site_url()?>/wp-content/themes/baskerville-child/images/youtube.svg" alt=""></a>
					<a  href="https://www.instagram.com/baenredok/"><img src="<?php echo site_url()?>/wp-content/themes/baskerville-child/images/instagram.svg" alt=""></a>
				</div>



			<div class="header-search-block bg-graphite hidden">

				<!-- <?php get_search_form(); ?> -->

				<form method="get" class="searchform" action="<?php echo site_url()?>">
						<input type="search" value="" placeholder="Buscar..." name="s" class="s" />
						<input type="submit" class="searchsubmit" value="Search">
				</form>


			</div> <!-- /header-search-block -->

			<d iv class="header-inner section-inner">

				<?php if ( get_theme_mod( 'baskerville_logo' ) ) : ?>

					<div class="blog-logo">

				        <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>' rel='home'>
				        	<img src='<?php echo site_url(); ?>/wp-content/themes/baskerville-child/images/logo-web.png' alt='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>'>
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

				<h3 class="blog-description caveat">Lo que pasa en la ciudad</h3>

			</div> <!-- /header-inner -->

		</div> <!-- /header -->

		<div class="navigation section no-padding bg-dark">

			<div class="navigation-inner section-inner nav-menu">

				<div class="nav-toggle fleft hidden">
					<span class="glyphicon glyphicon-menu-hamburger"></span>
					<!-- <div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>

					<div class="clear"></div> -->

				</div>

				<div class="link-social hidden-lg hidden-md hidden-sm">
					<a  href="https://www.fb.com/BAenRedOK"><img src="<?php echo site_url()?>/wp-content/themes/baskerville-child/images/facebook.svg" alt=""></a>
					<a  href="https://twitter.com/BAenredOK"><img src="<?php echo site_url()?>/wp-content/themes/baskerville-child/images/twitter.svg" alt=""></a>
					<a  href="https://www.youtube.com/channel/UC2hRe8rUbMr5fAedtxdC78w"><img src="<?php echo site_url()?>/wp-content/themes/baskerville-child/images/youtube.svg" alt=""></a>
					<a  href="https://www.instagram.com/baenredok/"><img src="<?php echo site_url()?>/wp-content/themes/baskerville-child/images/instagram.svg" alt=""></a>
				</div>


				<ul class="main-menu">



					<?php
					$categories = wp_list_categories( array('hide_empty' => false,   'title_li'=> "", "echo"=> false));
				//  var_dump($categories);
				$cat= explode("</li>", $categories);
				
				echo $cat[3];
				echo $cat[5];
				echo $cat[0];
				echo $cat[2];
				echo $cat[4];
				
				
				



				//
				// 	foreach($categories as $cat){
				//
				// 	}
  			?>


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
							'title_li' => '',
							"post_type"=>"menu"

						));

					} ?>

				 </ul> <!-- /main-menu -->


				 <a class="search-toggle fright" href="#"></a>


				 <div class="clear"></div>

			</div> <!-- /navigation-inner -->

		</div> <!-- /navigation -->

		<div class="mobile-navigation section bg-graphite no-padding hidden">

			<ul class="mobile-menu">

				<li class="cat-item cat-item-1"><a href="<?php echo site_url()?>">#Inicio</a></li>

				<?php
				$categories = wp_list_categories( array('hide_empty' => false,   'title_li'=> ""));
			//  var_dump($categories);
			?>


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
						'title_li' => '',
						"post_type"=>"menu"

					));

				} ?>


			 </ul> <!-- /main-menu -->

		</div> <!-- /mobile-navigation -->
		<script>
		var urlBase="<?php echo site_url(); ?>";
		</script>
