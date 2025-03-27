<?php get_header();
banner([

    'title' => 'Nuestro blog',
    'leyenda' => 'Noticias sobre lo último en tecnología, reseñas de productos y más.',

]);
?>

<main class="bg-white text-black">
    <!--~~~~~~~~~~~~~~~ POSTS ARCHIVE ~~~~~~~~~~~~~~~-->
    <section id="publicaciones" class="container">
        <div class="relative mb-8 mt-8 md:mb-16 md:mt-12">
            <!-- CABECERA -->
            <div
                class="relative flex flex-col items-center justify-between py-6 lg:flex-row"
            >
                <h2 class="text-3xl font-bold">Últimas Noticias</h2>
                <p class="ml-1 md:ml-3 md:flex-1">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit
                </p>
                <p
                    class="absolute -top-2 mx-auto ml-0 mr-0 max-w-max bg-primary_yellow px-1 text-center font-semibold uppercase text-white lg:left-0"
                >
                    Blog
                </p>
            </div>
            <div class="">
                <ul
                    class="grid grid-cols-1 gap-8 px-6 sm:grid-cols-2 md:grid-cols-2 md:px-0 lg:grid-cols-3
                            xl:gap-4 2xl:grid-cols-4"
                >

                    <?php while (have_posts()):
                        the_post(); ?>
                        <!-- GRIDS - POST -->
                        <li
                            class="mb-2 flex max-h-[395px] min-h-48 flex-col gap-1 overflow-hidden shadow-lg
                                shadow-slate-200/95 brightness-75 hover:brightness-90 transition-all duration-300"
                        >
                            <div class="h-1/2 overflow-hidden">
                                <a href="<?= the_permalink() ?>">
                                    <img
                                        class="h-full w-full object-cover object-center"
                                        src="<?= the_post_thumbnail() ?>"
                                        alt="Imagen del post"
                                    />
                                </a>
                            </div>
                            <div class="flex h-1/2 px-2 flex-col items-start">
                                <a class="pt-2" href="<?= the_permalink()?>">
                                    <h3 class="text-xl font-semibold lg:text-2xl">
                                        <?= the_title() ?>
                                    </h3>
                                </a>
                                <p
                                    class="h-24 text-ellipsis grow overflow-hidden pb-3 pt-1 text-justify text-sm
                                        box-border"
                                >
                                    <?= (has_excerpt()) ? get_the_excerpt() : wp_trim_words(get_the_content(), 18) ?>
                                </p>
                                <a class="btn-nf my-2" href="<?= the_permalink() ?>">Leer Más </a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="mt-6 text-primary_yellow font-semibold text-lg">
                <?= paginate_links() ?>
            </div>
        </div>
        <!-- paginacion-->

    </section>
</main>


<?php get_footer();