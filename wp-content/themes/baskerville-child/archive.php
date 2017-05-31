<?php get_header(); ?>

<div class="wrapper section medium-padding">

	<div class="page-title section-inner nombre-secciones">

		<?php if ( is_day() ) : ?>
			<h5><?php _e( 'Date', 'baskerville' ); ?></h5> <h3><?php echo get_the_date(); ?></h3>
		<?php elseif ( is_month() ) : ?>
			<h5><?php _e( 'Month', 'baskerville' ); ?></h5> <h3><?php echo get_the_date('F Y'); ?></h3>
		<?php elseif ( is_year() ) : ?>
			<h5><?php _e( 'Year', 'baskerville' ); ?></h5> <h3><?php echo get_the_date('Y'); ?></h3>
		<?php elseif ( is_category() ) : ?>
			<h5><?php _e( 'Category', 'baskerville' ); ?></h5>
			 <h3><?php echo single_cat_title( '', false ); ?></h3>
		<?php elseif ( is_tag() ) : ?>
			<h5><?php _e( 'Tag', 'baskerville' ); ?></h5> <h3><?php echo single_tag_title( '', false ); ?></h3>
		<?php elseif ( is_author() ) : ?>
			<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
			<h5><?php _e( 'Author', 'baskerville' ); ?></h5> <h3><?php echo $curauth->display_name; ?></h3>
		<?php else : ?>
			<h5><?php _e( 'Archive', 'baskerville' ); ?></h5>
		<?php endif; ?>

		<?php
			$tag_description = tag_description();
			if ( ! empty( $tag_description ) )
				echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' );
		?>

	</div>
	 <!-- /page-title -->



	<div class="content section-inner">



		<?php if ( have_posts() ) : ?>

			<div class="posts">

				<?php rewind_posts(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="post-container">

						<div id="post-<?php the_ID(); ?>" onclick="add_link('<?php the_permalink(); ?>')" <?php post_class(); ?>>

							<?php get_template_part( 'content', get_post_format() ); ?>

							<div class="clear"></div>

						</div> <!-- /post -->

					</div>

				<?php endwhile; ?>

			</div> <!-- /posts -->

			<?php if ( $wp_query->max_num_pages > 1 ) : ?>

				<div class="archive-nav">

					<?php echo get_next_posts_link( '&laquo; ' . __('Older posts', 'baskerville')); ?>

					<?php echo get_previous_posts_link( __('Newer posts', 'baskerville') . ' &raquo;'); ?>

					<div class="clear"></div>

				</div> <!-- /post-nav archive-nav -->

				<div class="clear"></div>

			<?php endif; ?>

		<?php endif; ?>




	</div> <!-- /content -->



	<div style="padding: 50px 0">
		<div class="morePost" style="text-align:center; position:absolute; left:0; right:0; margin:auto; width: 50px; height:50px;background-image:url('<?php echo site_url(); ?>/wp-content/themes/baskerville-child/images/mas_articulos.svg'); background-repeat:no-repeat; background-position:center; cursor:pointer"></div>
		<img class="load-post" style="position:absolute; left:0; right:0; margin:auto;width:60px; display:none "src="<?php echo site_url(); ?>/wp-content/themes/baskerville-child/images/giphy.gif" alt="">
	</div>

</div> <!-- /wrapper -->

<script>

postCategory=<?php $categories=get_the_category();
	if ( ! empty( $categories ) ) {
	 echo get_cat_ID($categories[0]->name );
	}
 ?>;
postOffset=10;

</script>

<?php get_footer(); ?>
