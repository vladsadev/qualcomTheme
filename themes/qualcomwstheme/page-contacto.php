<?php get_header();

banner();
?>
<main>
    <?php while (have_posts()):
        the_post(); ?>
        <!--~~~~~~~~~~~~~~~ VISITANOS ~~~~~~~~~~~~~~~-->
        <section id="#" class="h-96 bg-mid_blue">
            <div
                    class="container flex h-full w-full flex-col items-center justify-center gap-5 py-8 md:flex-row-reverse md:py-14"
            >
                <div
                        class="flex flex-col items-start gap-2 overflow-hidden text-white md:w-1/2"
                >
                    <p
                            class="bg-primary_yellow px-1 text-sm font-bold uppercase text-slate-50"
                    >
                        nuestra dirección
                    </p>
                    <h2 class="text-3xl font-bold">Visítanos</h2>
                    <p class="font-open_sans text-sm">
                        Lorem ipsum dolor Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Soluta, accusantium provident? Necessitatibus
                        ipsum impedit! sit ok pax amet consectetur adipisicing.
                    </p>
                    <p class="text-lg font-semibold">
                        Más Infromación<span class="text-primary_yellow">:(591) </span>
                    </p>
                </div>
                <!-- imagen -->
                <div
                        class="max-h-72 w-full overflow-hidden md:w-1/2"
                >
                    <img
                            class="w-full object-fit"
                            src="<?= get_theme_file_uri('src/assets/images/empresa.jpg') ?>"
                            alt=""
                    />
                </div>
            </div>
        </section>
        <!-- CONTACTANOS -->
        <section class="bg-slate-50">
            <div class="mt-6 bg-gray-200/50 md:py-20">
                <div class="container py-4">
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                        <div class="space-y-2">
                            <h2 class="text-2xl lg:text-4xl font-bold">Contáctanos</h2>
                            <p class="text-sm">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                                quae blanditiis dolore, omnis nesciunt.
                            </p>
                            <h3 class="text-lg lg:text-2xl font-semibold">Infromación de contacto</h3>
                            <p>Calle Colombia #3131 La Paz Bolivia</p>
                            <p>contacto"qualcom.com</p>
                            <p>+(591) 70590109</p>
                        </div>
                        <!-- form -->
                        <div>
                            <div class="min-h-min w-full bg-white p-3">
                                <h4 class="text-3xl font-semibold mb-3">Escríbenos</h4>
                                <?php echo do_shortcode('[fluentform id="1"]') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MAPA-->
        <section id="mapa">
            <div class="container py-8">
                <div class="h-32 w-4/6 mx-auto bg-gray-400 md:h-72">
                    <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825
                    .483334283619!2d-68
                    .13639272485487!3d-16.501679084242173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f21e759d48a0f%3A0x6c28c4b8ed52b7e3!2sQualcom%20SRL!5e0!3m2!1ses!2sbo!4v1740712805726!5m2!1ses!2sbo"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </section>


    <?php endwhile; ?>
</main>
<?php get_footer() ?>
