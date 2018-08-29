<?php 

/**
 * Scripts Enqueue
 * Registers and Enqueue Scripts in footer or head
 *
 * @since   1.0
 * @version 1.2
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_script/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_script/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_scripts() {

	global $theme_options;
	$theme_data = wp_get_theme();

	/* Deregister Scripts */
	wp_deregister_script( 'jquery' );
	wp_deregister_script( 'jquery-migrate' );

	/* Register Scripts */
	wp_register_script('jquery', get_theme_file_uri('/assets/js/lib/jquery.min.js'), null, '3.3.1', true);
	wp_register_script('jquery-migrate', get_theme_file_uri('/assets/js/lib/jquery-migrate.min.js'), array('jquery'), '3.0.0', true);
	
	wp_register_script('jquery-browser', get_theme_file_uri('/assets/js/lib/jquery.browser.min.js'), array('jquery-migrate'), null, true);

	wp_register_script( 'main_js', get_theme_file_uri('/assets/js/functions.js'), array('jquery-migrate', 'jquery-browser'), $theme_data->get( 'Version' ), true );
	
	wp_register_script('g_analytics', 'https://www.googletagmanager.com/gtag/js?id=UA-124174811-1', null, null, false);
	wp_register_script('analytics', get_theme_file_uri('/assets/js/analytics.js'), null, null, false);
	wp_register_script('bootstrap', get_theme_file_uri('/assets/js/lib/bootstrap.js'), null, null, true);
	wp_register_script('swiper', get_theme_file_uri('/assets/js/lib/swiper.jquery.min.js'), null, null, true);
	wp_register_script('kineduomed', get_theme_file_uri('/assets/js/script_kineduomed.js'), null, null, true);


	/* Enqueue Scripts */
	wp_enqueue_script( 'main_js' );
	wp_enqueue_script( 'g_analytics' );
	wp_enqueue_script( 'analytics' );
	wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script( 'swiper' );
	wp_enqueue_script( 'kineduomed' );

}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );