<?php get_header() ?>
<div class="espacio_doble"></div>
	<?php the_post() ?>
	
	<?php the_post_thumbnail() ?>
	<?php the_title() ?>
	<?php the_content(); ?>

<?php get_footer() ?>