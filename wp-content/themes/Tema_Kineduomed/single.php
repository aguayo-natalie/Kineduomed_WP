<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

		<div class="espacio_doble"></div>
		
		<div class="container">
			<div class="col-md-12">
				<div>
					<h1><strong><?php the_title() ?></strong></h1>
					<p><time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time></p>
					<div class="espacio img_blog">
						<?php the_post_thumbnail() ?>
					</div>
					<div class="espacio"></div>
					<p><?php the_content() ?></p>
				</div>
			</div>
		</div>

		<div class="espacio_doble"></div>
	
		


	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>


<?php get_sidebar() ?>
<?php get_footer() ?>