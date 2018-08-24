<?php get_header() ?>


	<div class="servicios_fondo">
		<div class="container servicios">
			<div class="swiper-container swiper-container-02">
	            <div class="swiper-wrapper swiper-wrapper-02">
	                <div class="swiper-slide">
	                    <a href="<?php bloginfo('url') ?>">
	                        <img src="<?php bloginfo('template_url') ?>/assets/images/iconos_musculo.svg" alt="KINESIOLOGÍA MUSCULO-ESQUELÉTICA">
	                        <p>KINESIOLOGÍA<br>MUSCULO-ESQUELÉTICA</p>
	                    </a>
	                </div>
	                <div class="swiper-slide">
	                    <a href="<?php bloginfo('url') ?>">
	                        <img src="<?php bloginfo('template_url') ?>/assets/images/iconos_respiratoria.svg" alt="KINESIOLOGÍA RESPIRATORIA">
	                        <p>KINESIOLOGÍA<br>RESPIRATORIA</p>
	                    </a>
	                </div>
	                <div class="swiper-slide">
	                    <a href="<?php bloginfo('url') ?>">
	                        <img src="<?php bloginfo('template_url') ?>/assets/images/iconos_reductivo.svg" alt="MASAJES REDUCTIVOS Y YESOTERAPIA">
	                        <p>MASAJES REDUCTIVOS<br>Y YESOTERAPIA</p>
	                    </a>
	                </div>
	                <div class="swiper-slide">
	                    <a href="<?php bloginfo('url') ?>">
	                        <img src="<?php bloginfo('template_url') ?>/assets/images/iconos_empresas.svg" alt="SALUD Y PREVENCIÓN EN EMPRESAS">
	                        <p>SALUD Y PREVENCIÓN<br>EN EMPRESAS</p>
	                    </a>
	                </div>
	                <div class="swiper-slide">
	                    <a href="<?php bloginfo('url') ?>">
	                        <img src="<?php bloginfo('template_url') ?>/assets/images/iconos_domicilio.svg" alt="ATENCIÓN KINÉSICA A DOMICILIO">
	                        <p>ATENCIÓN KINÉSICA<br>A DOMICILIO</p>
	                    </a>
	                </div>   
	            </div>
	            <!-- Add Arrows -->
	            <div class="swiper-button-next swiper-button-next-02 swiper-button-white"></div>
	            <div class="swiper-button-prev swiper-button-prev-02 swiper-button-white"></div>
	        </div>
		</div>
	</div>

	<section class="nosotros_home row">
		<div class="imagen_nosotros_home col-md-6"></div>
		<div class="textos col-md-6">
			<h1 class="titulos"><span class="linea_center"><strong>KINE</strong>DUOMED</span></h1>
			<div class="espacio">
				<p>Somos un centro kinésico ubicado en pleno centro de Concepción. Aquí encontraras atención de calidad y acorde a lo que necesitas.</p>

				<p>Somos nuevos profesionales, certificados por la Superintendencia de Salud de Chile, para ejercer nuestro trabajo de manera integra y profesional.</p> 

	  			<p>Nuestro equipo, esta conformado por profesionales kinesiólogos, con cursos de capacitación en distintas áreas de las ciencias de la salud, entre ellos, Uso de Tape Neurmomuscular, Cross Tape, Punción seca, Jornadas de actualización, entre otras.</p>

				<p>¡Ven a visitarnos! Tenemos descuentos en tu primera visita.</p>
				</div>
			</div>	
	</section>

	<section class="recomendamos container-fluid">
		<h2 class="titulos">
			<span class="linea_center">TE RECOMEDAMOS</span>
		</h2>
		<div class="ultimas_entradas">
			<div class="row">
				
					<?php
						$entradas = array(
							'post_type'			=> 'post',
							'posts_per_page'	=> 3

						);

						$get_entradas = new WP_Query( $entradas );

						while ( $get_entradas->have_posts() ) {
							$get_entradas->the_post();
					?>

					<div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      	<a href="<?php the_permalink() ?>">
					      		<?php the_post_thumbnail() ?>
					      	</a>

					      	<div class="caption">
					        	<h4><?php the_title() ?></h4>
					        	<p><?php the_excerpt() ?></p>
					     	 </div>
					    </div>
					</div>
					<?php } wp_reset_postdata();?>
			</div>
		</div>
		
	</section>

	<section class="mapa">
		<div class="jumbotron">
			<div class="jumbotron_info">
				<a href="<?php bloginfo('url') ?>"><i class="fas fa-map-marker-alt"></i></a>
				<p>Angol 463, piso 9, oficina 904<br>
				Edificio Millenium, Concepción</p>
			</div>
		</div>
	</section>

<?php get_footer() ?>	