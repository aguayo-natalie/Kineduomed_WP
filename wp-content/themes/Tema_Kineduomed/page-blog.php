<?php get_header() ?>

<div class="container">

	<div class="ultimas_entradas col-md-8 float-left">
		
		<?php
			$blog = array(
				'post_type'			=> 'post',
				'posts_per_page'	=> 3,
				'paged'				=> $paged
			);

			$get_blog = new WP_Query( $blog );

			while ( $get_blog->have_posts() ) {
				$get_blog->the_post();
			?>

			<div class="row">
				<div>
					<div class="thumbnail">
						<div class="caption">
							<h4><?php the_title() ?></h4>
							<p><?php the_excerpt() ?></p>
						</div>

						<a href="<?php the_permalink() ?>">
							<?php the_post_thumbnail() ?>
						</a>
					</div>
				</div>
			</div>
			<div class="espacio"></div>
		

			<?php } wp_reset_postdata();?>
		
	</div>
	

	<?php get_sidebar(); ?>
	<?php the_pagination( $get_blog ); ?>
</div>

<?php get_footer() ?>