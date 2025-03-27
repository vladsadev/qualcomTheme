<?php get_header(); ?>
<!-- Imagen de cabecera-->
<section class="bg-white py-8">
    <div class="container mt-24">
        <!-- se cambiara por una image con formato -->
        <div class="container md:w-3/4">
            <div class="max-h-[600px] w-full">
                <img class="object-fit object-center" src="<?php the_post_thumbnail_url( 'postBanner' )
				?>" alt="Imagen
                destacada
                del post">
            </div>
        </div>
    </div>
</section>
<main class="bg-white">
    <section class="container">
        <div class="w-3/4 mx-auto pt-2 md:pt-6">
            <h2 class="text-lg md:text-2xl lg:text-3xl font-semibold"><?= the_title() ?></h2>
            <p class="text-sm pb-2 md:pb-6">Publicado el: <?php the_time( 'd/m/y' ) ?> en <span class="font-semibold"><?=
					get_the_category_list
					( ', ' ) ?></span></p>
            <hr class="mb-3 md:mb-6"/>
            <div class="prose prose-2xl mx-auto text-justify">
				<?php the_content(); ?>
            </div>
        </div>
    </section>
    <!-- Noticias Relacionadas -->
    <section class="bg-white">
        <div class="mt-10 container lg:w-3/4">
            <div class="flex flex-col p-2 md:py-8 bg-slate-100/60 gap-4 md:flex-row">
                <div class="relative">
                    <h2
                            class="absolute top-0 inline-block bg-primary_yellow font-rajdhani font-semibold uppercase tracking-[0.2em] text-white"
                    >
                        Blog
                    </h2>
                    <div class="py-2">
                        <h3 class="mt-6 text-3xl font-bold">
                            Noticias relacionadas
                        </h3>

                    </div>
                </div>
            </div>
            <!-- formulario -->
            <div>

            </div>
    </section>
    <!-- Comentarios -->
    <!-- Noticias Relacionadas -->
    <section class="bg-white">
        <div class="mt-10 container lg:w-3/4">
            <div class="flex flex-col p-2 md:py-8 bg-slate-100/60 gap-4 md:flex-row">
                <div class="relative">
                    <h2
                            class="absolute top-0 inline-block bg-primary_yellow font-rajdhani font-semibold uppercase tracking-[0.2em] text-white"
                    >
                        Comentarios
                    </h2>
                    <div class="py-2">
                        <h3 class="mt-6 text-3xl font-bold">
                            Déjanos tus comentarios
                        </h3>

                    </div>
                </div>
            </div>
            <!-- formulario -->
            <div>

            </div>
    </section>
</main>
<?php get_footer() ?>
