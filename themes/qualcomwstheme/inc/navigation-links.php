<?php
// Array centralizado con todos los enlaces de navegación
function navigationLinks()
{
    return [
        'nav_items' => [
            [
                'title' => 'Inicio',
                'url' => site_url('/'),
                'has_arrow' => false,
                'condition' => 'is_front_page',
            ],
            [
                'title' => 'Sobre Nosotros',
                'url' => site_url('/sobre-nosotros'),
                'has_arrow' => false,
                'condition' => "is_page('sobre-nosotros')",
            ],
            [
                'title' => 'Servicios/Productos',
                'url' => site_url('/productos'),
                'has_arrow' => true,
                'condition' => "is_page('productos')",
            ],
            [
                'title' => 'Blog',
                'url' => site_url('/blog'),
                'has_arrow' => false,
                'condition' => "get_post_type() === 'post'",
            ],
            [
                'title' => 'Contacto',
                'url' => site_url('contacto'),
                'has_arrow' => false,
                'condition' => "is_page('contacto')",
            ],
        ],

// Enlaces de usuario (registro e inicio de sesión)
        'user_links' => [
            [
                'title' => 'Registrarse',
                'url' => esc_url(site_url('/wp-signup.php')),
                'class' => 'nav-link'
            ],
            [
                'title' => 'Iniciar Sesión',
                'url' => esc_url(wp_login_url()),
                'class' => 'nav-link'
            ]
        ]];
}