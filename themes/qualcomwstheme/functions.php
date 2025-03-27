<?php
require_once get_template_directory() . '/inc/dependencias.php';
require_once get_template_directory() . '/inc/my-functions.php';

add_action( 'wp_enqueue_scripts', 'themeLoadAssets' );


function themeAddFeaturesSupport() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'pageBanner', 1800, 400, true );
	add_image_size( 'postBanner', 1200, 600, true );
	add_image_size( 'logotiposDeEmpresas', 400, 180, true );
}

add_action( 'after_setup_theme', 'themeAddFeaturesSupport' );

function qualcom_estilos_propios_wp() {
	add_theme_support( 'wp-block-styles' ); // Activa los estilos por defecto de los bloques
	wp_enqueue_style( 'core-blocks', get_theme_file_uri( '/style.css' ), array(), wp_get_theme()->get( 'Version' ) );
}

add_action( 'after_setup_theme', 'qualcom_estilos_propios_wp' );

function agregar_estilos_wp() {
	wp_enqueue_style( 'wp-block-library' ); // Carga los estilos por defecto de WordPress
	wp_enqueue_style( 'wp-block-library-theme' ); // Estilos adicionales de los bloques
}

add_action( 'wp_enqueue_scripts', 'agregar_estilos_wp' );

require_once get_template_directory() . '/inc/banner.php';
