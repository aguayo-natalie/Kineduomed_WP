<?php get_header() ?>

	<section class="convenios_main">
		<div class="container">
			<h2 class="titulos">
				<span class="linea_center">CONVENIOS</span>
			</h2>
			<div>
			  	<p>En <strong>KINE</strong>DUOMED contamos con las siguientes empresas en convenio que desean entregar una mejor calidad de vida y mayor bienestar a sus trabajadores, aumentando la vitalidad y disminuyendo el ausentismo. Les ayudaremos a tomar decisiones inteligentes y saludables, además de reducir sus costos en salud.</p>

			  	<div class="convenios_main__logos row">


			  		<?php
						$convenios = array(
							'post_type'			=> 'convenios',
							'posts_per_page'	=> 8
						);

						$get_convenios = new WP_Query( $convenios );

						while ( $get_convenios->have_posts() ) {
							$get_convenios->the_post();
					?>

					<div class="col-md-3">
						<div class= "thumbnail">

							<?php the_post_thumbnail() ?>

						</div>
					</div>		
					<?php } wp_reset_postdata();?>
			  			
			  					  					
			  	</div>
			</div>
		</div>
	</section>


	<section class="convenios_main__escribenos row">
		<div class="imagen_convenios col-md-6">
		</div>
		<div class="convenios_main__textos col-md-6">
			<p>Si estas interesado en dar una atención de calidad a tus funcionarios, como lo merecen, no dudes en consultar nuestras ofertas de lanzamiento.</p>
			<p>También puedes enviar tus propuestas para hacer crecer tu empresa, con calidad y seguridad en salud. Escríbenos a <a href="mailto:kineduomed@gmail.com">contacto@kineduomed.cl</a> o envíanos un mensaje a traves de nuestro formulario de contacto.</p>
			<h5>Te invitamos a ser parte del gran equipo de <strong>KINE</strong>DUOMED,<br> te daremos una buena atención.</h5>
		</div>
	</section>


<?php get_footer() ?>