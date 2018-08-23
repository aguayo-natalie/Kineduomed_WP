<?php 

/**
 * Style Enqueue
 * Registers and Enqueue Styles in head
 *
 * @since   1.0
 * @version 1.2
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_style/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_style/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_style() {

	global $theme_options;
	$theme_data = wp_get_theme();

	/* Register Scripts */
	
	wp_register_style( 'main_style', get_theme_file_uri( '/assets/css/style.css'), null, $theme_data->get( 'Version' ), 'screen' );
	wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', null, null, 'screen' );
	wp_register_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', null, null, 'screen' );
	wp_register_style( 'montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700', null, null, 'screen' );
	wp_register_style( 'swiper', get_theme_file_uri( '/assets/css/swiper.min.css'), null, null, 'screen' );
	wp_register_style( 'estilo_kineduomed', get_theme_file_uri( '/assets/css/estilo_kineduomed.css'), null, null, 'screen' );
	wp_register_style( 'media_queries', get_theme_file_uri( '/assets/css/media_queries.css'), null, null, 'screen' );

	

	/* Enqueue Scripts */
	
	wp_enqueue_style( 'main_style' );
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'fontawesome' );
	wp_enqueue_style( 'montserrat' );
	wp_enqueue_style( 'swiper' );
	wp_enqueue_style( 'estilo_kineduomed' );
	wp_enqueue_style( 'media_queries' );

}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );

?>