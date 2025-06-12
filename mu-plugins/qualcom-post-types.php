<?php
function qualcom_post_types()
{

    register_post_type('brand', array(
        'public' => true,
        'supports' => ['title', 'thumbnail'],
        'show_in_rest' => true,
        // 'rewrite' => array('slug' => 'marcas' ),
        'labels' => [
            'name' => 'marcas',
            'add_new_item' => 'añadir nueva marca',
            'edit_item' => 'editar marca',
            'all_items' => 'todos las marcas',
            'singular_name' => 'marca'
        ],
        'menu_icon' => 'dashicons-slides',
    ));
    //POST-TYPE los testimonios

    register_post_type('testimonio', array(
        'public' => true,
        'show_in_rest' => true,
        'supports' => ['title', 'thumbnail'],
        'labels' => [
            'name' => 'Testimonios',
            'add_new_item' => 'Añadir nuevo Testimonio',
            'edit_item' => 'Editar Testimonio',
            'all_items' => 'Todos los Testimonios ',
            'singular_name' => 'Testimonio'
        ],
        'menu_icon' => 'dashicons-format-status',
    ));
    // POST-TYPE de prueba "profesores"

}

add_action('init', 'qualcom_post_types');