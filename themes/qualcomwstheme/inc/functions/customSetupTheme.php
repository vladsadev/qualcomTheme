<?php
add_action( 'after_setup_theme', 'themeAddFeaturesSupport' );
function themeAddFeaturesSupport() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'pageBanner', 1800, 400, true );
	add_image_size( 'postBanner', 1200, 600, true );
	add_image_size( 'logotiposDeEmpresas', 400, 180, true );
	add_image_size( 'imgProducto', 800, 620, true );

}

// Cambiar URL del logo
add_filter( 'login_headerurl', 'ourHeaderUrl' );
function ourHeaderUrl() {
	return esc_url( site_url( '/' ) );
}

// Cambiar título del logo
add_filter( 'login_headertitle', 'ourHeaderTitle' );
function ourHeaderTitle() {
	return get_bloginfo( 'name' );
}

// Añadir estilos personalizados al login
add_action( 'login_enqueue_scripts', 'ourLoginCSS' );
function ourLoginCSS() {
	wp_enqueue_style( 'ourmaincss', get_theme_file_uri( '/build/index.css' ) );
}


