<?php
function qualcom_post_types()
{
    // POST-TYPE producto
    register_post_type('producto', [
        'label' => 'Productos',
        'labels' => [
            'name' => 'Productos',
            'singular_name' => 'Producto',
            'add_new' => 'Añadir nuevo',
            'add_new_item' => 'Añadir nuevo producto',
            'edit_item' => 'Editar producto',
            'new_item' => 'Nuevo producto',
            'view_item' => 'Ver producto',
            'search_items' => 'Buscar productos',
            'not_found' => 'No se encontraron productos',
            'not_found_in_trash' => 'No hay productos en la papelera',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'producto'],
        'menu_icon' => 'dashicons-cart', // Icono del menú admin
        'show_in_rest' => true, // Para bloques y API REST
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'taxonomies' => ['categoria_producto'], // Asociamos taxonomía personalizada
    ]);

    // Taxonomía personalizada tipo categoría
    register_taxonomy('categoria_producto', 'producto', [
        'label' => 'Categorías de producto',
        'hierarchical' => true,
        'public' => true,
        'rewrite' => ['slug' => 'categoria-producto'],
        'show_in_rest' => true,
    ]);
// POST-TYPE para las "marcas" en el front-page

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