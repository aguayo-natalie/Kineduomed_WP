<?php get_header() ?>
<div class="espacio"></div>
<div class="container">
	<div class="col-md-12 col-md-offset-2">
		<?php the_post() ?>
		
		<?php the_post_thumbnail() ?>
		<?php the_title() ?>
		<?php the_content(); ?>
	</div>
</div>
<?php get_footer() ?>