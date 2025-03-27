<?php
function qualcom_post_types(){
//post-type 'eventos' prueba
register_post_type( 'evento', array(
  'public' => true,
  'has_archive' => true,
  'show_in_rest' => true,
  'supports' => ['title','editor','excerpt'],
  'rewrite' => array('slug' => 'eventos' ),
  'labels' =>[ 
    'name' => 'Eventos',
    'add_new_item' => 'Añadir nuevo evento',
    'edit_item' => 'Editar Evento',
    'all_items' => 'Todos los Eventos',
    'singular-name' => 'Evento'
  ],
  'menu_icon' => 'dashicons-calendar-alt',
) );

// POST-TYPE para las "marcas" en el front-page
  register_post_type( 'brand', array(
    'public' => true,
    'supports'=>['title','thumbnail'],
    'show_in_rest' => true,
    // 'rewrite' => array('slug' => 'marcas' ),
    'labels' =>[ 
      'name' => 'marcas',
      'add_new_item' => 'añadir nueva marca',
      'edit_item' => 'editar marca',
      'all_items' => 'todos las marcas',
      'singular_name' => 'marca'
    ],
    'menu_icon' => 'dashicons-slides',
  ) );
  //POST-TYPE los testimonios
  register_post_type( 'testimonio', array(
    'public' => true,
    'show_in_rest' => true,
    'supports' => ['title','thumbnail'],
    'labels' =>[ 
      'name' => 'Testimonios',
      'add_new_item' => 'Añadir nuevo Testimonio',
      'edit_item' => 'Editar Testimonio',
      'all_items' => 'Todos los Testimonios ',
      'singular_name' => 'Testimonio'
    ],
    'menu_icon' => 'dashicons-format-status',
  ) );
  // POST-TYPE de prueba "profesores"

  register_post_type( 'profesor', array(
    'public' => true,
    'supports' => ['title','editor','thumbnail'],
    'labels' =>[ 
      'name' => 'Profesores',
      'add_new_item' => 'Añadir nuevo Profesor',
      'edit_item' => 'Editar Profesor',
      'all_items' => 'Todos los Profesores',
      'singular_name' => 'Profesor'
    ],
    'menu_icon' => 'dashicons-welcome-learn-more',
  ) );
  }
add_action('init','qualcom_post_types');