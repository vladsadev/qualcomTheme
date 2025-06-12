<?php

// Array centralizado con todos los enlaces de navegación
function navigationLinks() {
	return [
		'nav_items'  => [
			[
				'title'     => 'Inicio',
				'url'       => site_url( '/' ),
				'has_arrow' => false,
				'condition' => 'is_front_page',
			],
			[
				'title'     => 'Sobre Nosotros',
				'url'       => site_url( '/sobre-nosotros' ),
				'has_arrow' => false,
				'condition' => "is_page('sobre-nosotros')",
			],
			[
				'title'     => 'Productos/Servicios',
				'url'       => site_url( '/productos' ),
				'has_arrow' => true,
				'condition' => "is_page('productos')",
			],
			[
				'title'     => 'Blog',
				'url'       => site_url( '/blog' ),
				'has_arrow' => false,
				'condition' => "get_post_type() === 'post'",
			],
			[
				'title'     => 'Contacto',
				'url'       => site_url( 'contacto' ),
				'has_arrow' => false,
				'condition' => "is_page('contacto')",
			],
		],

// Enlaces de usuario (registro e inicio de sesión)
		'user_links' => [
			[
				'title' => 'Registrarse',
				'url'   => esc_url( site_url( '/wp-signup.php' ) ),
				'class' => 'nav-link'
			],
			[
				'title' => 'Iniciar Sesión',
				'url'   => esc_url( wp_login_url() ),
				'class' => 'nav-link'
			]
		]
	];
}


/**
 * Función auxiliar para verificar condiciones
 */
function check_active_condition( $condition ) {
	switch ( $condition ) {
		case 'is_front_page':
			return is_front_page();
		case "is_page('sobre-nosotros')":
			return is_page( 'sobre-nosotros' );
		case "is_page('servicios')":
			return is_page( 'servicios' );
		case "get_post_type() === 'post'":
			return get_post_type() === 'post';
		case "is_page('contacto')":
			return is_page( 'contacto' );
		default:
			return false;
	}
}
