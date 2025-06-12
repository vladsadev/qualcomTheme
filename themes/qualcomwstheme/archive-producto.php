<?php get_header() ?>
    <!-- Banner -->
<?php getPageBanner( [
    'title' => "Nuestros Productos y Servicios"
] ); ?>

    <main class="bg-white text-black">
        <!--~~~~~~~~~~~~~~~ PRODUCTOS ~~~~~~~~~~~~~~~-->
        <section id="Productos" class="pt-12 pb-6">
            <div class="relative container">
                <!-- CABECERA -->
                <div
                        class="relative flex flex-col items-center justify-between py-6 lg:flex-row"
                >
                    <h2 class="text-3xl font-bold">Productos</h2>
                    <p
                            class="absolute top-0 mx-auto ml-0 mr-0 max-w-max bg-primary_yellow px-1 text-center font-semibold uppercase text-white lg:left-0"
                    >
                        Nuestros
                    </p>
                </div>
                <!--  Productos-->
                <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 lg:gap-6">
					<?php while ( have_posts() ): the_post(); ?>
                        <!-- Dr. X -->
                        <li class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                            <div class="aspect-w-16 aspect-h-12 overflow-hidden">
                                <a href="<?= get_the_permalink() ?>">
                                    <img src="<?= get_the_post_thumbnail_url( size: 'imgProducto' ) ?>"
                                         alt="imagen-del-producto-individual"
                                         class="w-full h-64 object-cover transition-transform duration-500 hover:scale-110">
                                </a>
                            </div>
                            <div class="py-6 px-4">
                                <h3 class="text-xl font-bold text-blue-dark mb-2"><?php the_title() ?></h3>
                                <p class="text-red-light font-semibold mb-3"><?= get_field( 'especialidad' ) ?></p>
                                <a href="<?= get_the_permalink() ?>" class="text-red-lighter cursor-pointer hover:font-semibold
                            md:text-lg
                            hover:text-red-light
                            transition-colors
                            duration-200">
                                    Ver perfil
                                </a>
                            </div>
                        </li>

					<?php endwhile; ?>

                </ul>
            </div>
        </section>

        <!--    Marcas-->
        <section class="py-5 md:py-10 xl:py-14">
			<?php get_template_part( 'template-parts/content', 'brands' ) ?>
        </section>

        <!-- MOSAICO SERVICIOS -->
        <section class="py-8 md:py-16 container" aria-labelledby="services-title">
            <!-- CABECERA -->
            <div
                    class="relative flex flex-col items-center justify-between py-6 lg:flex-row"
            >
                <h2 class="text-3xl font-bold">Servicios</h2>
                <p class="ml-1 md:flex-1">
                </p>
                <p
                        class="absolute top-0 mx-auto ml-0 mr-0 max-w-max bg-primary_yellow px-1 text-center font-semibold uppercase text-white lg:left-0"
                >
                    Nuestros
                </p>
            </div>

            <!-- Mosaicos-->
            <!--            <div class="mx-auto px-4 md:w-11/12 lg:w-3/4 2xl:w-4/6">-->
            <div class="mx-auto ">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:grid-rows-2 lg:gap-6">

                    <!-- Servicio 1: Arma tu PC -->
                    <article
                            class="service-card md:col-span-1 min-h-[220px] 2xl:min-h-[240px] rounded-lg overflow-hidden
                            shadow-lg hover:shadow-xl transition-all duration-300"
                            style="background-image: url('https://images.unsplash.com/photo-1587831990711-23ca6441447b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80')"
                            role="region"
                            aria-labelledby="service-1-title">

                        <div class="service-content flex flex-col justify-end h-full p-6">
                            <h3 id="service-1-title" class="text-xl font-bold lg:text-2xl text-white mb-3 leading-tight">
                                Arma tu PC en simples pasos
                            </h3>
                            <p class="text-gray-200 mb-4 text-sm lg:text-base leading-relaxed">
                                Configura tu computadora ideal con nuestro sistema intuitivo y obtén la mejor relación
                                calidad-precio.
                            </p>
                            <a href="#"
                               class="service-link inline-flex items-center text-white font-semibold hover:text-blue-200 transition-all duration-200 text-sm lg:text-base"
                               aria-label="Ver más sobre cómo armar tu PC">
                                Ver más
                                <svg class="w-4 h-4 ml-2 transition-transform duration-200" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </article>

                    <!-- Servicio 2: Cotización personalizada -->
                    <article
                            class="service-card md:col-span-1 min-h-[220px] 2xl:min-h-[240px] rounded-lg overflow-hidden
                            shadow-lg hover:shadow-xl transition-all duration-300"
                            style="background-image: url('<?= get_theme_file_uri( '/src/assets/images/cotizacionqualcom.webp' )

							?>')"
                            role="region"
                            aria-labelledby="service-2-title">

                        <div class="service-content flex flex-col justify-end h-full p-6">
                            <h3 id="service-2-title" class="text-xl font-bold lg:text-2xl text-white mb-3 leading-tight">
                                Solicita una cotización personalizada
                            </h3>
                            <p class="text-gray-200 mb-4 text-sm lg:text-base leading-relaxed">
                                Recibe asesoría especializada y presupuestos adaptados a tus necesidades específicas y
                                presupuesto.
                            </p>
                            <a href="#"
                               class="service-link inline-flex items-center text-white font-semibold hover:text-blue-200 transition-all duration-200 text-sm lg:text-base"
                               aria-label="Ver más sobre cotizaciones personalizadas">
                                Ver más
                                <svg class="w-4 h-4 ml-2 transition-transform duration-200" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </article>

                    <!-- Servicio 3: Soporte técnico -->
                    <article
                            class="service-card md:col-span-2 min-h-[280px] 2xl:min-h-[340px] rounded-lg overflow-hidden
                            shadow-lg hover:shadow-xl transition-all duration-300"
                            style="background-image: url('<?= get_theme_file_uri( 'src/assets/images/reparaciones-1.webp' )
							?>')"
                            role="region"
                            aria-labelledby="service-3-title">

                        <div class="service-content flex flex-col justify-end h-full p-6">
                            <div class="max-w-2xl">
                                <h3 id="service-3-title"
                                    class="text-xl font-bold lg:text-2xl xl:text-3xl text-white mb-3 leading-tight">
                                    Soporte técnico especializado 24/7
                                </h3>
                                <p class="text-gray-200 mb-4 text-sm lg:text-base xl:text-lg leading-relaxed">
                                    Nuestro equipo de expertos está disponible para resolver cualquier problema técnico y
                                    mantener tu equipo funcionando perfectamente.
                                </p>
                                <a href="#"
                                   class="service-link inline-flex items-center text-white font-semibold hover:text-blue-200 transition-all duration-200 text-sm lg:text-base"
                                   aria-label="Ver más sobre nuestro soporte técnico">
                                    Ver más
                                    <svg class="w-4 h-4 ml-2 transition-transform duration-200" fill="none"
                                         stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>

                </div>
            </div>
        </section>

    </main>

<?php get_footer() ?>