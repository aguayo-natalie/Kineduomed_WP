
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	

	<?php wp_head() ?>
</head>
<body>
	<div class="container-fluid fixed">
		<header class="cabecera">
			<div class="row blanco">
				<div class="col-xs-12 col-sm-7 col-md-5 col-lg-4">
					<a href="index.html"><img class="logotipo container" src="<?php bloginfo('template_url') ?>/assets/images/logo_kineduomed.svg" alt="logo kineduomed"></a>
				</div>
				<div class="info container">
					<h4>+56 9 6318 7339</h4>
					<p>Angol 463, piso 9, of. 904, Edificio Milenium, Concepción<br><strong>contacto@kineduomed.cl</strong></p>	
				</div>
			</div>
			<div class="row">
				<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
				    
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				    </div>

				   
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <!-- <ul class="nav navbar-nav">
				        <li><a href="index.html">HOME</a></li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICIOS</a>
				          <ul class="dropdown-menu">
				            <li><a href="servicios.html#servicio_musculo">KINESIOLOGÍA MUSCULO-ESQUELÉTICA</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="servicios.html#servicio_respiratoria">KINESIOLOGÍA RESPIRATORIA</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="servicios.html#servicio_reductivo">MASAJES REDUCTIVOS Y YESOTERAPIA</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="servicios.html#servicio_empresas">SALUD Y PREVENCIÓN EN EMPRESAS</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="servicios.html#servicio_domicilio">ATENCIÓN KINÉSICA A DOMICILIO</a></li>
				          </ul>
				        </li>
				        <li><a href="convenios.html">CONVENIOS</a></li>
				        <li><a href="nosotros.html">NOSOTROS</a></li>
				        <li><a href="blog.html">BLOG</a></li>
				        <li><a href="contacto.html">CONTACTO</a></li>
				      </ul> -->

				      <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => null ) ); ?>
					  <?php } ?>


				      <div class="container">
				          <ul class="nav nav-pills navbar-right">
							 <li role="presentation" class="active"><a href="#"><i class="far fa-calendar-alt calendario"></i> AGENDA TU HORA</a></li>
						  </ul>
					  </div>
				    </div>
				  </div>
				</nav>
			</div>	
		</header>
	</div>