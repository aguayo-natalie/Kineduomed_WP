<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

		
		
		<div class="container">
			<div class="col-md-8 espacio">
				<h1 class="upper"><strong><?php the_title() ?></strong></h1>
				<p><time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time></p>
				<?php the_post_thumbnail('entradas_m') ?>
				<div class="espacio"></div>
				<p><?php the_content() ?></p>	
			</div>
			
			<div class="float-right">
				<?php get_sidebar(); ?>
			</div>
		</div>
	
		<div class="espacio_doble"></div>

	<?php } ?>

<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>

<?php get_sidebar() ?>

<?php get_footer() ?>