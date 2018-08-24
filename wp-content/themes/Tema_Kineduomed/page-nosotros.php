<?php get_header() ?>
	
	<section class="nosotros_main row">
		<div class="imagen_nosotros col-md-6">
		</div>
		<div class="textos col-md-6">
			<h1 class="titulos"><span class="linea_center">NOSOTROS</span></h1>
			<div class="espacio"></div>
			<p>Somos un Centro Kinésico, creado con el objetivo de atender las necesidades de salud de la población. Nuestra Misión es satisfacer y ofrecer servicios de calidad en necesidades de salud, con el objetivo de mejorar la calidad de vida de nuestros pacientes.</p>

	  		<p>Somos nuevos profesionales, certificados por la Superintendencia de Salud de Chile, para ejercer nuestro trabajo de manera integra y profesional.</p>

	  		<p>Contamos con título profesional de Kinesiólogos y Cursos de Especialización, entre ellos, Uso de Tape Neurmomuscular, Cross Tape, Punción seca, Jornadas de actualización, entre otras.</p>

	  		<p>Te invitamos a ser parte del gran equipo de <strong>KINE</strong>DUOMED, te daremos una buena atención.</p>
		</div>
	</section>

	<section class="nosotros_equipo__fondo">
		<div class="nosotros_equipo container">
			<div class="row">

				<?php
					$equipo = array(
						'post_type'			=> 'equipo',
						'posts_per_page'	=> 6
					);

					$get_equipo = new WP_Query( $equipo );

					while ( $get_equipo->have_posts() ) {
						$get_equipo->the_post();
				?>

				<div class="col-md-4">
					<?php the_post_thumbnail() ?>
		  			<h5><?php the_title() ?></h5>
		  			<p><?php the_field('text') ?></p>
		  		</div>

		  		<?php } wp_reset_postdata();?>

	  		</div>
	  	</div>
	</section>

<?php get_footer() ?>