<?php

/*--------------------------------------------------------------
	CARREGANDO ESTILOS E SCRIPTS
--------------------------------------------------------------*/
add_action('wp_enqueue_scripts', 'btwp_enqueue_scripts');

function btwp_enqueue_scripts() {

	// CARREGA FONTE DO GOOGLE
	wp_register_style('btwp-googleFonts', 'https://fonts.googleapis.com/css?family=Raleway:400,700');
	wp_enqueue_style( 'btwp-googleFonts');

	// CSSs
	wp_enqueue_style('all-min', get_stylesheet_directory_uri() . '/assets/css/all.min.css');

	// CARREGA JQUERY NATIVO
	//wp_enqueue_script('jquery');

	wp_enqueue_script('jquery-1.11.1', get_stylesheet_directory_uri() . '/assets/js/plugins/jquery-1.11.1.min.js');

	// CARREGA SCRIPTS
	wp_enqueue_script('html5shiv', get_stylesheet_directory_uri() . '/assets/js/plugins/html5shiv.min.js');
	wp_enqueue_script('respond', get_stylesheet_directory_uri() . '/assets/js/plugins/respond.min.js');
	wp_enqueue_script('selectivizr', get_stylesheet_directory_uri() . '/assets/js/plugins/selectivizr-min.js');
	wp_enqueue_script('owl.carousel', get_stylesheet_directory_uri() . '/assets/js/plugins/owl.carousel.min.js');
	wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/assets/js/public/scripts.js');
}
