<?php
function getPageBanner( $args = [] ) {
	$pageBannerURL   = get_field( 'imagen_del_banner' );
	$pageBannerImage = $pageBannerURL['sizes']['pageBanner'] ?? get_theme_file_uri( '/src/assets/images/laptop-gamer.jpg' );
	$leyenda         = get_field( 'leyenda_de_pagina' ) ?? ( $args['leyenda_de_pagina'] ?? ' ' );
	?>
    <div class="relative min-h-56 lg:min-h-[18.5rem] flex flex-col justify-end bg-center pb-12 lg:pb-8 md:bg-cover
    bg-black/30
    bg-blend-multiply
    text-white text-shadow-md
    mt-16  mm:mt-24"
         style="background-image: url(<?=
	     $pageBannerImage ?>); ">
        <div class="container flex h-full flex-col justify-end">
			<?php if ( is_author() ): ?>
                <h3 class="text-4xl md:text-5xl xl:text-6xl">
					<?php echo 'Publicaciones de: ' . get_the_author() ?>
                </h3>
                <p class="my-2 text-lg lg:pr-[20rem] md:text-xl xl:text-2xl">
					<?php the_archive_description(); ?>
                </p>
			<?php elseif ( is_category() ): ?>
                <h3 class="text-4xl md:text-5xl xl:text-6xl">
					<?php echo $args['title'] ?? the_archive_title() ?>
                </h3>
                <p class="my-2 text-lg lg:pr-[19rem] md:text-xl xl:text-2xl bg-white">
					<?php the_archive_description() ?? ''; ?>
                </p>
			<?php elseif ( is_tax( 'marca-producto' ) ) : ?>
                <h3 class="text-4xl md:text-5xl xl:text-6xl">
					<?php the_archive_title(); ?>
                </h3>
                <p class="my-2 text-lg lg:pr-[19rem] md:text-xl xl:text-2xl bg-white">
					<?php the_archive_description() ?? ''; ?>
                </p>
			<?php else: ?>
                <h3 class="text-4xl md:text-5xl xl:text-6xl">
					<?= $args['title'] ?? get_field( 'titulo_del_banner' ) ?>
                </h3>
                <p class="my-2 text-2xl lg:pr-[19rem] md:text-4xl xl:text-[44px]">
					<?= $args['leyenda'] ?? $leyenda; ?>
                </p>

			<?php endif; ?>

        </div>
    </div>
<?php } ?>
