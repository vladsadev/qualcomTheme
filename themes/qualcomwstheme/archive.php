<?php get_header();

getPageBanner( [

//    'title' => $title
//	'leyenda' => 'Noticias sobre lo último en tecnología, reseñas de productos y más.',

] );
?>

    <main class="bg-white text-black py-12">
        <!--~~~~~~~~~~~~~~~ POSTS ARCHIVE ~~~~~~~~~~~~~~~-->
        <section id="publicaciones" class="container">
            <div class="relative mb-8 mt-8 md:mb-16 md:mt-12">
				<?php if ( is_category() ): ?>
                    <!--Post generales-->
                    <ul
                            class="grid grid-cols-1 gap-8 px-6 sm:grid-cols-2 md:grid-cols-2 md:px-0 lg:grid-cols-3
                            xl:gap-4 2xl:grid-cols-4"
                    >
						<?php while ( have_posts() ):
							the_post(); ?>
                            <!-- GRIDS - POST -->
                            <li
                                    class="mb-2 flex max-h-[395px] min-h-48 flex-col gap-1 overflow-hidden shadow-lg
                                shadow-slate-200/95 brightness-75 hover:brightness-90 transition-all duration-300"
                            >
                                <div class="h-1/2 overflow-hidden">
                                    <a href="<?= get_the_permalink() ?>">
                                        <img
                                                class="h-full w-full object-cover object-center"
                                                src="<?= get_the_post_thumbnail() ?>"
                                                alt="Imagen del post"
                                        />
                                    </a>
                                </div>
                                <div class="flex h-1/2 px-2 flex-col items-start">
                                    <a class="pt-2" href="<?= get_the_permalink() ?>">
                                        <h3 class="text-lg font-semibold lg:text-xl">
											<?= the_title() ?>
                                        </h3>
                                    </a>
                                    <p
                                            class="h-24 text-ellipsis grow overflow-hidden pb-3 pt-1 text-justify text-sm
                                        box-border"
                                    >
										<?= ( has_excerpt() ) ? get_the_excerpt() : wp_trim_words( get_the_content(), 16 ) ?>
                                    </p>
                                    <a class="btn-nf my-2" href="<?= get_the_permalink() ?>">Leer Más </a>
                                </div>
                            </li>
						<?php endwhile; ?>
                    </ul>
				<?php else: ?>
                    <!--  Productos-->
                    <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 lg:gap-6">
						<?php while ( have_posts() ): the_post(); ?>
                            <!-- Producto X -->
                            <li class="bg-white rounded-2xl shadow-lg card-hover h-96 flex flex-col">
                                <div class="aspect-w-16 aspect-h-12 overflow-hidden">
                                    <a href="<?= get_the_permalink() ?>">
                                        <img src="<?= get_the_post_thumbnail_url( size: 'imgProducto' ) ?>"
                                             alt="imagen-del-producto-individual"
                                             class="w-full h-64 object-cover transition-transform duration-500 hover:scale-110">
                                    </a>
                                </div>
                                <div class="py-6 px-4 flex flex-col flex-1 justify-between">
                                    <div>
                                        <h3 class="text-xl font-bold text-blue-dark mb-2"><?php the_title() ?></h3>
                                        <p class="font-semibold text-primary_yellow">
                                            Bs. <?= get_field( 'precio_del_producto' ) ?></p>
                                    </div>
                                    <a href="<?= get_the_permalink() ?>" class="text-main_blue font-semibold
            cursor-pointer
            md:text-lg hover:text-primary_yellow transition-colors duration-200 mt-4">
                                        Detalles del Producto
                                    </a>
                                </div>
                            </li>
						<?php endwhile; ?>
                    </ul>

				<?php endif; ?>
                <div class="mt-6 text-primary_yellow font-semibold text-lg">
					<?= paginate_links() ?>
                </div>
            </div>
            <!-- paginacion-->

        </section>
    </main>


<?php get_footer();