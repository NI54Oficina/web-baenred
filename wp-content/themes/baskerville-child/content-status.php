<?php if($post->post_content != "") : ?>
	<!-- <a href="<?php the_permalink(); ?>"> -->
	<div class="post-excerpt">



		<?php the_excerpt('50'); ?>

	</div> <!-- /post-excerpt -->
	<!-- </a> -->
<?php endif; ?>

<?php baskerville_meta_child(); ?>

<div class="clear"></div>
