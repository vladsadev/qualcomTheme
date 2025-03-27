<?php

/*
 *Esta función puede recibir valores de "title","leyenda" e imagen del banner
 *
 */

function banner( $args = [] ) {
	// recibimos la imagen del usuario en "args" y accedemos al tamaño que asignamos en "functions.php"
	$pageBannerImage = $args['image']['sizes']['pageBanner'] ?? get_theme_file_uri( '/images/ocean.jpg' );
	$leyenda         = get_field( 'leyenda_de_pagina' ) ?? ( $args['leyenda_de_pagina'] ?? ' ' );
	?>
    <div class="min-h-72 mt-16 sm:mt-28 py-6 md:py-16 lg:py-20 bg-center md:bg-cover bg-black/45 bg-blend-multiply
    text-white text-shadow-md"
         style="background-image: url(<?=
	     $pageBannerImage ?>); ">
        <div class="container flex h-full flex-col justify-center">
            <h3 class="text-4xl font-thin md:text-5xl xl:text-6xl">
				<?= is_category() ? the_archive_title() : $args['title'] ?? the_title() ?>
            </h3>
            <p class="my-3 md:pr-24 lg:pr-[20rem]  text-base md:text-xl xl:text-2xl">
				<?= $args['leyenda'] ?? ( is_category() ? the_archive_description() : $leyenda ); ?>
            </p>
        </div>
    </div>
<?php } ?>
