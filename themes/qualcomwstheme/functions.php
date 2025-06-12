<?php
require_once get_theme_file_path( 'inc/index.php' );
// ===========================
// Encolar scripts y estilos
// ===========================
add_action( 'wp_enqueue_scripts', 'themeLoadAssets' );
function themeLoadAssets() {
	// CSS externos por CDN
	wp_enqueue_style( 'remix-icon', '//cdnjs.cloudflare.com/ajax/libs/remixicon/4.4.0/remixicon.min.css' );
	wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );
	wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css');

	// CSS del tema
	wp_enqueue_style( 'ourmaincss', get_theme_file_uri( '/build/index.css' ) );

	// JS externos por CDN
	wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true );

	// JS del tema
	wp_enqueue_script(
		'ourmainjs',
		get_theme_file_uri( '/build/index.js' ),
		array( 'wp-element', 'jquery' ),
		'1.0',
		true
	);

	// Variables accesibles desde JS
	wp_localize_script( 'ourmainjs', 'ourData', array(
		'root_url' => get_site_url()
	) );
}

// ===========================
// Personalización de la página de login
// ===========================

