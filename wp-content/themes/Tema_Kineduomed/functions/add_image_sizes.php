<?php

/**
 * Custom Images Names
 * Adds custom images sizes ready to use on administrator
 *
 * @param  
 *
 * @return array
 * @since  1.0
 */
function dl_image_sizes( $sizes ) {

	$add_sizes = array(
		'slideshow'		=> __( 'Tamaño del slideshow' ),
		'custom_logo'	=> __( 'Tamaño personalizado del logo' ),
		'entradas_s'	=> __( 'Tamaño personalizado imagenes small entradas' ),
		'entradas_m'	=> __( 'Tamaño personalizado imagenes medium entradas' ),
		'custom_equipo'	=> __( 'Tamaño personalizado imagenes equipo' ),
		'empresas_logo'	=> __( 'Tamaño personalizado logos empresas' )
		
	);

	return array_merge( $sizes, $add_sizes );

}


/**
 * Custom Images Sizes
 * Adds custom images sizes on posts
 *
 * @return void
 * @since  1.0
 * @see    https://developer.wordpress.org/reference/functions/add_image_size/
 * @see    https://codex.wordpress.org/Plugin_API/Filter_Reference/image_size_names_choose
 */
if ( function_exists( 'add_theme_support' ) ) {

	add_image_size( 'slideshow', 800, 600, true );			// Personalización del tamaño del slideshow
	add_image_size( 'custom_logo', 800, 600, true );		// Personalización del tamaño del logo
	add_image_size( 'entradas_s', 498, 304, true );			// Tamaño personalizado imagenes small entradas
	add_image_size( 'entradas_m', 550, 336, true );			// Tamaño personalizado imagenes medium entradas
	add_image_size( 'custom_equipo', 400, 400, true );		// Tamaño personalizado imagenes equipo
	add_image_size( 'empresas_logo', 214, 125, true );		// Tamaño personalizado logos empresas
	

	add_filter( 'image_size_names_choose', 'dl_image_sizes' );

}
