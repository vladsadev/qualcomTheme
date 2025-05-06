<?php get_header(); ?>

<main>
    <!--~~~~~~~~~~~~~~~ HOME ~~~~~~~~~~~~~~~-->
    <section id="home" class="pt-16 text-slate-200 md:pt-24">
        <!-- links hero container -->
        <div class="md:container hidden">
            <ul
                    class="hero__links grid grid-cols-3 justify-items-center gap-2 py-2 md:flex md:h-12 md:items-center md:justify-center md:gap-6"
            >
                <li><a href="#">Más vendidos v2</a></li>
                <li><a href="#"> Ofertas v2</a></li>
                <li><a href="#">Computación v2</a></li>
                <li><a href="#">Insumos</a></li>
                <li><a href="#">Cables y Periféricos v2</a></li>
            </ul>
        </div>
        <!-- portada -->
        <div class="h-[70vh] bg-cover lg:h-[75vh] pt-12 md:pt-24"
             style="background-image: url(<?= get_theme_file_uri( 'src/assets/images/bg-hero-portada.jpg' ) ?>)">
            <div
                    class="container flex h-full flex-col items-center justify-center gap-8 text-center lg:items-start lg:text-left 2xl:px-16"
            >
                <h1 class="max-w-4xl text-shadow-md">
					<?= get_field( 'titulo_portada_principal' ) ?>
                </h1>
                <p class="text-shadow-md text-xl">
					<?= get_field( 'subtitulo_portada_principal' ) ?>
                </p>
                <a class="btn" href="<?= site_url( 'servicios' ) ?>">Ver Más</a>
            </div>
        </div>
        <!-- Detalles del hero-->
        <div class="flex flex-col bg-repeat py-5 md:py-10"
             style="background-image: url(<?= get_theme_file_uri( 'src/assets/images/bg-pcb.png' ) ?>)">
            <div
                    class="container flex flex-col gap-4 md:flex-row md:items-center"
            >
                <div class="text-center md:w-1/2 md:text-left">
                    <h2 class="font-rajdhani text-3xl md:text-4xl lg:text-5xl">
                        ¡Encuentra los mejores productos de tecnología!
                    </h2>
                </div>
                <div class="space-y-5 px-4 text-center md:w-1/2 md:text-left">
                    <p class="pb-2">
						<?= get_field( 'descripcion_productos' ) ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--~~~~~~~~~~~~~~~SOLUCIONES ~~~~~~~~~~~~~~~-->
    <section id="soluciones" class="bg-repeat py-10 text-slate-200" style="background-image:
            url(<?= get_theme_file_uri( 'src/assets/images/bg-pcb.png' ) ?>)">
        <h2
                class="py-3 text-center font-rajdhani text-2xl font-bold lg:text-4xl"
        >
            Soluciones
        </h2>
        <div class="container space-y-4 lg:space-y-5">
            <!-- First Tile -->
            <div
                    class="flex h-[21rem] flex-col items-center justify-center gap-4 bg-cover bg-top py-10 text-center lg:h-[24rem] lg:justify-start 2xl:h-[29rem]"
                    style="background-image: url(<?= get_theme_file_uri( 'src/assets/images/bg-venta.png' ) ?>)"
            >
                <p
                        class="text-shadow max-w-xl font-rajdhani text-4xl font-bold lg:text-5xl"
                >
                    Venta de equipos informáticos y accesorios
                </p>
                <p class="text-shadow max-w-2xl lg:text-lg">
					<?= get_field( 'descripcion_venta_de_equipos' ) ?>
                </p>
                <a class="btn" href="<?= site_url( 'servicios' ) ?>">Conocer más</a>
            </div>

            <!-- second and third tile -->
            <div
                    class="flex flex-col gap-4 text-center md:flex-row lg:gap-5 lg:text-left"
            >
                <!-- second tile -->
                <div
                        class="flex h-[21rem] flex-col items-center justify-center gap-4 bg-cover bg-top py-10 lg:h-[25rem] lg:w-full lg:items-start lg:justify-end lg:p-8 2xl:h-[30rem]"
                        style="background-image: url(<?= get_theme_file_uri( 'src/assets/images/bg-mantenimiento.png' )
						?>)"
                >
                    <p
                            class="text-shadow font-rajdhani text-3xl font-bold lg:max-w-md lg:text-3xl"
                    >
                        Servicio de mantenimiento y repación de equipos
                    </p>
                    <p class="text-shadow lg:max-w-md">
						<?= get_field( 'descripcion_mantenimiento_y_reparacion' ) ?>
                    </p>
                    <a class="btn" href="#">Conocer más</a>
                </div>

                <!-- third tile -->
                <div
                        class="flex h-[21rem] flex-col items-center justify-center gap-4 bg-cover bg-top py-10 lg:h-[25rem] lg:w-full lg:items-start lg:justify-end lg:p-8 2xl:h-[30rem]"
                        style="background-image: url(<?= get_theme_file_uri( 'src/assets/images/bg-soporte.png' ) ?>)"
                >
                    <p
                            class="text-shadow font-rajdhani text-3xl font-bold lg:max-w-md lg:text-3xl"
                    >
                        Asesoramiento y Soporte técnico profesional
                    </p>
                    <p class="text-shadow lg:max-w-md">
						<?= get_field( 'descripcion_soporte_tecnico' ) ?>
                    </p>
                    <a class="btn" href="#">Conocer más</a>
                </div>
            </div>
        </div>
    </section>

    <!--~~~~~~~~~~~~~~~ Nuestras MARCAS ~~~~~~~~~~~~~~-->
    <section id="productos" class="bg-white">
		<?php get_template_part( 'template-parts/content', 'brands' ) ?>
    </section>
    <!--    Nuestros productos-->
    <section class="bg-slate-200 py-4 lg:py-8">
        <div class="relative mb-8 container">
            <!-- CABECERA -->
            <div
                    class="relative flex flex-col items-center justify-between py-6 lg:flex-row">
                <h2 class="text-3xl font-bold">Productos</h2>
                <p class="ml-1 md:ml-3 md:flex-1 self-end">
                    Productos originales de las mejores marcas.
                </p>
                <a class="btn-nf" href="<?= site_url( '/blog' ) ?>">Ver todas</a>
                <p
                        class="absolute -top-2 mx-auto ml-0 mr-0 max-w-max bg-primary_yellow px-1 text-center font-semibold uppercase text-white lg:left-0"
                >
                    Nuestros
                </p>
            </div>
        </div>

    </section>

    <!--~~~~~~~~~~~~~~~ Sobre Nosotros ~~~~~~~~~~~~~~~-->
    <section id="products" class="hidden bg-pcb bg-repeat p-4 lg:py-12">
        <h2
                class="text-center text-2xl font-bold capitalize text-slate-200 lg:text-4xl"
        >
            Sobre Nosotros
        </h2>
        <div
                class="container flex flex-col gap-4 bg-white py-4 lg:mt-2 lg:flex-row lg:gap-8 lg:py-10"
        >
            <!-- video -->
            <div class="lg:w-1/2">
                <img src="<?= get_theme_file_uri( 'src/assets/images/play-video.png' ) ?>" alt=""/>
            </div>
            <!-- descripcion -->
            <div
                    class="flex flex-col items-center gap-3 text-center md:items-start lg:w-1/2 lg:text-left"
            >
                <h3 class="text-3xl font-semibold">
                    Experiencia y Profesionalismo a tu Servicio
                </h3>
                <p>
                    En nuestra tienda online, te ofrecemos una experiencia de compra
                    única, donde la elegancia, el profesionalismo y el servicio
                    amigable son nuestra prioridad. Nuestro objetivo es brindarte los
                    mejores productos y soluciones tecnológicas, para que puedas
                    disfrutar de la máxima calidad en tus equipos informáticos.
                </p>
                <a class="btn-nf" href="">Conocer Más</a>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section id="testimonios" class="bg-pcb bg-repeat py-4 md:py-16">
		<?php get_template_part( 'template-parts/content', 'testimonios' ) ?>
    </section>
    <!--~~~~~~~~~~~~~~~ BLOG ~~~~~~~~~~~~~~~-->
    <section id="publicaciones" class="bg-white py-2">
        <div class="relative mb-8 container mt-8 md:mb-16 md:mt-12 ">
            <!-- CABECERA -->
            <div
                    class="relative flex flex-col items-center justify-between py-6 lg:flex-row">
                <h2 class="text-3xl font-bold">Últimas Noticias</h2>
                <p class="ml-1 md:ml-3 md:flex-1">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit
                </p>
                <a class="btn-nf" href="<?= site_url( '/blog' ) ?>">Ver todas</a>
                <p
                        class="absolute -top-2 mx-auto ml-0 mr-0 max-w-max bg-primary_yellow px-1 text-center font-semibold uppercase text-white lg:left-0"
                >
                    Blog
                </p>
            </div>
            <div class="">
				<?php

				$frontPagePosts = new WP_Query( array(
					'posts_per_page' => 3,


				) );
				?>
                <ul
                        class="grid grid-cols-1 gap-8 px-6 sm:grid-cols-2 md:grid-cols-2 md:px-0 lg:grid-cols-3
                        xl:gap-6"
                >
					<?php while ( $frontPagePosts->have_posts() ) : $frontPagePosts->the_post(); ?>
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
                                <a class="pt-2" href="<?= the_permalink() ?>">
                                    <h3 class="text-xl font-semibold lg:text-2xl">
										<?= the_title() ?>
                                    </h3>
                                </a>
                                <p
                                        class="h-24 text-ellipsis grow overflow-hidden pb-3 pt-1 text-justify text-sm
                                        box-border"
                                >
									<?= ( has_excerpt() ) ? get_the_excerpt() : wp_trim_words( get_the_content(), 18 ) ?>
                                </p>
                                <a class="btn-nf my-2" href="<?= the_permalink() ?>">Leer Más </a>
                            </div>
                        </li>
					<?php endwhile;
					wp_reset_postdata(); ?>
                </ul>
            </div>
            <div class="mt-6 text-primary_yellow font-semibold text-lg">
				<?= paginate_links() ?>
            </div>
        </div>
        <!-- paginacion-->

    </section>

</main>


<?php get_footer() ?>
