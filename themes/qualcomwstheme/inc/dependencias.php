<?php


function themeLoadAssets()
{

    //Dependencias por CDN
    wp_enqueue_style('remix-icon', '//cdnjs.cloudflare.com/ajax/libs/remixicon/4.4.0/remixicon.min.css');
     wp_enqueue_style('swiperjs', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');

    // Dependencias CSS
    wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
    // Dependencias JS
//    wp_enqueue_script('ourmainjs', get_theme_file_uri('/src/index.js'), array('wp-element'), '1.0', true);
	wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element','jquery'), '1.0', true);


    // *****
    wp_localize_script('ourmainjs', 'ourData', array(
        'root_url' => get_site_url()
    ));
}

function agregar_swiper() {
    // Cargar el CSS de Swiper
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');

    // Cargar el JS de Swiper
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'agregar_swiper');