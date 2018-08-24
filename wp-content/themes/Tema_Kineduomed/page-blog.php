<?php get_header() ?>
	


	<?php
		$blog = array(
			'post_type'			=> 'post',
			'posts_per_page'	=> 2,
			'paged'				=> $paged
		);

		$get_blog = new WP_Query( $blog );

		while ( $get_blog->have_posts() ) {
			$get_blog->the_post();
		?>

	
			<?php the_post_thumbnail() ?>
			<h3><?php the_title() ?></h3>
			<div><?php the_content() ?></div>

		<?php } wp_reset_postdata();

	?>

	<?php the_pagination( $get_blog ); ?>

<?php get_footer() ?>