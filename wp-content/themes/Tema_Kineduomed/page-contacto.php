<?php get_header() ?>
	
	<section class="contacto_mapa">
		<div class="embed-responsive embed-responsive-16by9">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.5380183960956!2d-73.0569912433191!3d-36.829588872121235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x478f53ce81c07590!2sEdificio+Milenium!5e0!3m2!1ses-419!2scl!4v1534857247299" width="100%" frameborder="0" style="border:0" allowfullscreen class="embed-responsive-item"></iframe>
		</div>
	</section>

	<section class="contacto_formulario container">
		<h2 class="titulos">
			<span class="linea_center">CONTACTO</span>
		</h2>
		<div class="contacto_formulario__info col-md-5">
			<h4><strong>KINE</strong>DUOMED</h4>
			<p><i class="fas fa-map-marker-alt"></i><span>Angol 463, piso 9, oficina 904, Edificio Milenium, Concepción</span></p>
			<p><a href="https://api.whatsapp.com/send?phone=56963187339&text=&source=&data="><i class="fab fa-whatsapp"></i><span>+56 9 6318 7339</span></a></p>
			<p><a href="mailto:kineduomed@gmail.com"><i class="fas fa-envelope"></i><span>contacto@kineduomed.cl</span></a></p>
		</div>

		<!-- <div class="form-group col-md-7">
			<label for="name">Nombre</label>
			<input id="name" name="name" type="text" class="form-control">

			<label for="email">Correo</label>
			<input id="email" name="email" type="text" class="form-control">

			<label for="message">Mensaje</label>
			<textarea class="form-control" id="message" name="message" rows="5"></textarea>

			<button type="submit" class="btn btn-default">ENVIAR</button>
		</div> -->

		<?= do_shortcode('[contact-form-7 id="186" title="form_bootstrap"]') ?>

	</section>


<?php get_footer() ?>