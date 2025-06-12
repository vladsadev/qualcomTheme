<?php get_header();

getPageBanner(); ?>

    <main class="bg-white text-black">
        <?php while (have_posts()): the_post(); ?>
            <!--        Quienes somos-->
            <section id="quienes-somos" class="pt-8">
                <div
                        class="container flex flex-col gap-3 md:flex-row md:items-center md:gap-6"
                >
                    <!-- descripcion -->
                    <div class="md:h-min md:w-1/2">
                        <h2 class="text-4xl font-bold">¿Quienes somos?</h2>
                        <div class="w-16 border border-b-2 border-primary_yellow"></div>
                        <p class="mt-4 text-justify">
                          <?= get_field('quienes_somos')?>
                        </p>
                    </div>
                    <!-- imagen -->
                    <div class="grid justify-items-center md:w-1/2 lg:p-5">
                        <img
                                class="w-11/12 object-cover lg:w-3/4"
                                src="<?= get_theme_file_uri('src/assets/images/empresa.jpg') ?>"
                                alt=""
                        />
                    </div>
                </div>
            </section>
            <!-- nuestra expericiencia -->
            <section class="mt-5 md:mt-12">
                <div class="container text-center">
                    <h3 class="mb-3 mt-4 text-2xl md:text-center md:text-4xl">
                        Nuestra experiencia nos respalda
                    </h3>
                    <p class="text-justify">
                        <?= get_field('nuestra_experiencia')?>
                    </p>
                </div>
                <!-- nuestros valores -->
                <div
                        class="container mt-4 flex min-h-min flex-col gap-3 md:mt-10 md:flex-row md:items-center md:gap-6"
                >
                    <div class="md:w-1/2">
                        <!-- descripcion -->
                        <h2 class="text-4xl font-bold">Nuestros valores</h2>
                        <div class="w-16 border border-b-2 border-primary_yellow"></div>
                        <p class="mt-4 text-justify">
                            <?= get_field('nuestros_valores')?>
                        </p>
                    </div>
                    <!-- imagen -->
                    <div class="grid justify-items-center md:w-1/2 lg:p-5">
                        <img
                                class="w-11/12 object-cover lg:w-3/4"
                                src="<?= get_theme_file_uri('src/assets/images/objetivos.jpg') ?>"
                                alt=""
                        />
                    </div>
                </div>
            </section>

            <!-- Lo que nos diferencia -->
            <section class="mt-10">
                <div class="container text-center">
                    <h3 class="text-4xl font-bold lg:text-5xl">
                        Lo que nos hace diferentes
                    </h3>
                    <div
                            class="mt-5 flex flex-col justify-center gap-3 md:mt-8 md:flex-row lg:gap-6"
                    >
                        <!-- card 1 -->
                        <div class="bg-slate-200 p-4 text-left md:w-1/3">
                            <div class="flex items-center gap-3">
                                <!-- imagen -->
                                <div
                                        class="grid size-11 place-content-center bg-white lg:size-16"
                                >
                                    <i
                                            class="ri-settings-3-line text-4xl text-primary_yellow lg:text-5xl"
                                    ></i>
                                </div>
                                <h3 class="text-xl font-bold md:text-lg lg:text-2xl">
                                    Servicio técnico <br/>
                                    confiable y rápido
                                </h3>
                            </div>
                            <p class="pt-4 text-xs md:text-sm lg:text-base">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Reprehend ipsam quaerat, perferendis it
                            </p>
                        </div>
                        <!-- card 2 -->
                        <div class="bg-slate-200 p-4 text-left md:w-1/3">
                            <div class="flex items-center gap-3">
                                <!-- imagen -->
                                <div
                                        class="grid size-11 place-content-center bg-white lg:size-16"
                                >
                                    <i
                                            class="ri-settings-3-line text-4xl text-primary_yellow lg:text-5xl"
                                    ></i>
                                </div>
                                <h3 class="text-xl font-bold md:text-lg lg:text-2xl">
                                    Servicio técnico <br/>
                                    confiable y rápido
                                </h3>
                            </div>
                            <p class="pt-4 text-xs md:text-sm lg:text-base">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Reprehend ipsam quaerat, perferendis it
                            </p>
                        </div>
                        <!-- card 3 -->
                        <div class="bg-slate-200 p-4 text-left md:w-1/3">
                            <div class="flex items-center gap-3">
                                <!-- imagen -->
                                <div
                                        class="grid size-11 place-content-center bg-white lg:size-16"
                                >
                                    <i
                                            class="ri-settings-3-line text-4xl text-primary_yellow lg:text-5xl"
                                    ></i>
                                </div>
                                <h3 class="text-xl font-bold md:text-lg lg:text-2xl">
                                    Servicio técnico <br/>
                                    confiable y rápido
                                </h3>
                            </div>
                            <p class="pt-4 text-xs md:text-sm lg:text-base">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Reprehend ipsam quaerat, perferendis it
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonios -->
            <section class="bg-repeat py-4 md:py-14 mt-4 md:mt-10"
                     style="background-image: url(<?= get_theme_file_uri('src/assets/images/bg-pcb.png') ?>)">

                <?php get_template_part('template-parts/content-testimonios') ?>
            </section>

        <?php endwhile ?>
    </main>
<?php get_footer() ?>