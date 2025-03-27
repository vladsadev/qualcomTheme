<?php get_header() ?>
<!-- Banner -->

<?php banner(
    [
        'image' => get_field('imagen_del_banner'),
    ]
); ?>


<main class="bg-white text-black">
    <?php while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <!--~~~~~~~~~~~~~~~ MOSAICO SERVICIOS ~~~~~~~~~~~~~~~-->
        <section>
            <!-- <div class="grid grid-flow-col grid-rows-3 gap-4"> -->
            <div class="container my-10 md:py-8 lg:py-6">
                <div
                        class="grid grid-cols-1 gap-4 md:grid-cols-2 md:grid-rows-2 lg:grid-cols-3"
                >
                    <div class="bg-orange-300 md:col-span-1 lg:row-span-2 lg:min-h-64">
                        <div class="flex h-full flex-col justify-end gap-2 p-4">
                            <h3 class="text-xl font-semibold lg:text-2xl">
                                Solicita una cotización personalizada
                            </h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            <a href="#">Ver más</a>
                        </div>
                    </div>
                    <div class="bg-red-600 md:col-span-1 lg:col-span-2">
                        02
                        <div class="flex flex-col justify-end gap-2 p-4">
                            <h3 class="text-xl font-semibold lg:text-2xl">
                                Solicita una cotización personalizada
                            </h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            <a href="#">Ver más</a>
                        </div>
                    </div>
                    <!-- <div class="bg-black md:col-span-3 lg:row-span-2">03</div> -->
                    <div class="bg-black/10 md:col-span-1">
                        03
                        <div class="flex flex-col justify-end gap-2 p-4">
                            <h3 class="text-xl font-semibold lg:text-2xl">
                                Solicita una cotización personalizada
                            </h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            <a href="#">Ver más</a>
                        </div>
                    </div>
                    <div class="bg-blue-500 md:col-span-1">
                        04
                        <div class="flex flex-col justify-end gap-2 p-4">
                            <h3 class="text-xl font-semibold lg:text-2xl">
                                Solicita una cotización personalizada
                            </h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            <a href="#">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--~~~~~~~~~~~~~~~ PRODUCTOS ~~~~~~~~~~~~~~~-->
        <section id="Productos" class="">
            <div class="container relative mt-2">
                <!-- CABECERA -->
                <div
                        class="relative flex flex-col items-center justify-between py-6 lg:flex-row"
                >
                    <h2 class="text-3xl font-bold">Productos</h2>
                    <p class="ml-1 md:flex-1">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit
                    </p>
                    <a href="#" class="btn-nf">Ver Todos</a>
                    <p
                            class="absolute top-0 mx-auto ml-0 mr-0 max-w-max bg-primary_yellow px-1 text-center font-semibold uppercase text-white lg:left-0"
                    >
                        Nuestros
                    </p>
                </div>
                <div class="">
                    <ul
                            class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-5 lg:gap-1"
                    >
                        <!-- LAPTOPS-->
                        <li class="item_wrap food">
                            <div
                                    class="bg-primaryColorLight hover:bg-secondaryColor grid h-56 place-items-center rounded-3xl duration-300 ease-linear lg:h-40"
                            >
                                <!-- img -->
                                <div class="h-full w-full bg-hp_laptop bg-cover bg-top"></div>
                            </div>
                            <div class="mt-5">
                                <div class="mb-2">
                                    <!-- <h4 class="card__title">Super Laptop 2024</h4> -->
                                    <h4 class="font-semibold">HP super Laptop 2024</h4>
                                    <p class="">INTEL 13600K</p>
                                </div>
                                <p class="font-semibold text-primary_yellow">$1442.00</p>
                            </div>
                        </li>
                        <li class="item_wrap food">
                            <div
                                    class="bg-primaryColorLight hover:bg-secondaryColor grid h-56 place-items-center rounded-3xl duration-300 ease-linear lg:h-40"
                            >
                                <!-- img -->
                                <div class="h-full w-full bg-slate-400"></div>
                            </div>
                            <div class="mt-5">
                                <div class="mb-2">
                                    <h4 class="font-semibold">Monitor Sansumg 27''</h4>
                                    <p class="paragraph">180HZ, IPS</p>
                                </div>
                                <p class="font-semibold text-primary_yellow">$380.00</p>
                            </div>
                        </li>
                        <li class="item_wrap food">
                            <div
                                    class="bg-primaryColorLight hover:bg-secondaryColor grid h-56 place-items-center rounded-3xl duration-300 ease-linear lg:h-40"
                            >
                                <!-- img -->
                                <div class="h-full w-full bg-slate-400"></div>
                            </div>
                            <div class="mt-5">
                                <div class="mb-2">
                                    <!-- <h4 class="card__title">Super Laptop 2024</h4> -->
                                    <h4 class="font-semibold">HP super Laptop 2024</h4>
                                    <p class="">INTEL 13600K</p>
                                </div>
                                <p class="font-semibold text-primary_yellow">$1442.00</p>
                            </div>
                        </li>
                        <li class="item_wrap food">
                            <div
                                    class="bg-primaryColorLight hover:bg-secondaryColor grid h-56 place-items-center rounded-3xl duration-300 ease-linear lg:h-40"
                            >
                                <!-- img -->
                                <div class="h-full w-full bg-slate-400"></div>
                            </div>
                            <div class="mt-5">
                                <div class="mb-2">
                                    <h4 class="font-semibold">Monitor Sansumg 27''</h4>
                                    <p class="paragraph">180HZ, IPS</p>
                                </div>
                                <p class="font-semibold text-primary_yellow">$380.00</p>
                            </div>
                        </li>
                        <li class="item_wrap food">
                            <div
                                    class="bg-primaryColorLight hover:bg-secondaryColor grid h-56 place-items-center rounded-3xl duration-300 ease-linear lg:h-40"
                            >
                                <!-- img -->
                                <div class="h-full w-full bg-slate-400"></div>
                            </div>
                            <div class="mt-5">
                                <div class="mb-2">
                                    <!-- <h4 class="card__title">Super Laptop 2024</h4> -->
                                    <h4 class="font-semibold">HP super Laptop 2024</h4>
                                    <p class="">INTEL 13600K</p>
                                </div>
                                <p class="font-semibold text-primary_yellow">$1442.00</p>
                            </div>
                        </li>
                        <li class="item_wrap food">
                            <div
                                    class="bg-primaryColorLight hover:bg-secondaryColor grid h-56 place-items-center rounded-3xl duration-300 ease-linear lg:h-40"
                            >
                                <!-- img -->
                                <div class="h-full w-full bg-slate-400"></div>
                            </div>
                            <div class="mt-5">
                                <div class="mb-2">
                                    <h4 class="font-semibold">Monitor Sansumg 27''</h4>
                                    <p class="paragraph">180HZ, IPS</p>
                                </div>
                                <p class="font-semibold text-primary_yellow">$380.00</p>
                            </div>
                        </li>
                        <li class="item_wrap food">
                            <div
                                    class="bg-primaryColorLight hover:bg-secondaryColor grid h-56 place-items-center rounded-3xl duration-300 ease-linear lg:h-40"
                            >
                                <!-- img -->
                                <div class="h-full w-full bg-slate-400"></div>
                            </div>
                            <div class="mt-5">
                                <div class="mb-2">
                                    <!-- <h4 class="card__title">Super Laptop 2024</h4> -->
                                    <h4 class="font-semibold">HP super Laptop 2024</h4>
                                    <p class="">INTEL 13600K</p>
                                </div>
                                <p class="font-semibold text-primary_yellow">$1442.00</p>
                            </div>
                        </li>
                        <li class="item_wrap food">
                            <div
                                    class="bg-primaryColorLight hover:bg-secondaryColor grid h-56 place-items-center rounded-3xl duration-300 ease-linear lg:h-40"
                            >
                                <!-- img -->
                                <div class="h-full w-full bg-slate-400"></div>
                            </div>
                            <div class="mt-5">
                                <div class="mb-2">
                                    <h4 class="font-semibold">Monitor Sansumg 27''</h4>
                                    <p class="paragraph">180HZ, IPS</p>
                                </div>
                                <p class="font-semibold text-primary_yellow">$380.00</p>
                            </div>
                        </li>
                        <li class="item_wrap food">
                            <div
                                    class="bg-primaryColorLight hover:bg-secondaryColor grid h-56 place-items-center rounded-3xl duration-300 ease-linear lg:h-40"
                            >
                                <!-- img -->
                                <div class="h-full w-full bg-slate-400"></div>
                            </div>
                            <div class="mt-5">
                                <div class="mb-2">
                                    <!-- <h4 class="card__title">Super Laptop 2024</h4> -->
                                    <h4 class="font-semibold">HP super Laptop 2024</h4>
                                    <p class="">INTEL 13600K</p>
                                </div>
                                <p class="font-semibold text-primary_yellow">$1442.00</p>
                            </div>
                        </li>
                        <li class="item_wrap food">
                            <div
                                    class="bg-primaryColorLight hover:bg-secondaryColor grid h-56 place-items-center rounded-3xl duration-300 ease-linear lg:h-40"
                            >
                                <!-- img -->
                                <div class="h-full w-full bg-slate-400"></div>
                            </div>
                            <div class="mt-5">
                                <div class="mb-2">
                                    <h4 class="font-semibold">Monitor Sansumg 27''</h4>
                                    <p class="paragraph">180HZ, IPS</p>
                                </div>
                                <p class="font-semibold text-primary_yellow">$380.00</p>
                            </div>
                        </li>
                        <li class="item_wrap food">
                            <div
                                    class="bg-primaryColorLight hover:bg-secondaryColor grid h-56 place-items-center rounded-3xl duration-300 ease-linear lg:h-40"
                            >
                                <!-- img -->
                                <div class="h-full w-full bg-slate-400"></div>
                            </div>
                            <div class="mt-5">
                                <div class="mb-2">
                                    <!-- <h4 class="card__title">Super Laptop 2024</h4> -->
                                    <h4 class="font-semibold">HP super Laptop 2024</h4>
                                    <p class="">INTEL 13600K</p>
                                </div>
                                <p class="font-semibold text-primary_yellow">$1442.00</p>
                            </div>
                        </li>
                        <li class="item_wrap food">
                            <div
                                    class="bg-primaryColorLight hover:bg-secondaryColor grid h-56 place-items-center rounded-3xl duration-300 ease-linear lg:h-40"
                            >
                                <!-- img -->
                                <div class="h-full w-full bg-slate-400"></div>
                            </div>
                            <div class="mt-5">
                                <div class="mb-2">
                                    <!-- <h4 class="card__title">Super Laptop 2024</h4> -->
                                    <h4 class="font-semibold">HP super Laptop 2024</h4>
                                    <p class="">INTEL 13600K</p>
                                </div>
                                <p class="font-semibold text-primary_yellow">$1442.00</p>
                            </div>
                        </li>
                        <li class="item_wrap food">
                            <div
                                    class="bg-primaryColorLight hover:bg-secondaryColor grid h-56 place-items-center rounded-3xl duration-300 ease-linear lg:h-40"
                            >
                                <!-- img -->
                                <div class="h-full w-full bg-slate-400"></div>
                            </div>
                            <div class="mt-5">
                                <div class="mb-2">
                                    <h4 class="font-semibold">Monitor Sansumg 27''</h4>
                                    <p class="paragraph">180HZ, IPS</p>
                                </div>
                                <p class="font-semibold text-primary_yellow">$380.00</p>
                            </div>
                        </li>
                        <li class="item_wrap food">
                            <div
                                    class="bg-primaryColorLight hover:bg-secondaryColor grid h-56 place-items-center rounded-3xl duration-300 ease-linear lg:h-40"
                            >
                                <!-- img -->
                                <div class="h-full w-full bg-slate-400"></div>
                            </div>
                            <div class="mt-5">
                                <div class="mb-2">
                                    <!-- <h4 class="card__title">Super Laptop 2024</h4> -->
                                    <h4 class="font-semibold">HP super Laptop 2024</h4>
                                    <p class="">INTEL 13600K</p>
                                </div>
                                <p class="font-semibold text-primary_yellow">$1442.00</p>
                            </div>
                        </li>
                        <li class="item_wrap food">
                            <div
                                    class="bg-primaryColorLight hover:bg-secondaryColor grid h-56 place-items-center rounded-3xl duration-300 ease-linear lg:h-40"
                            >
                                <!-- img -->
                                <div class="h-full w-full bg-slate-400"></div>
                            </div>
                            <div class="mt-5">
                                <div class="mb-2">
                                    <!-- <h4 class="card__title">Super Laptop 2024</h4> -->
                                    <h4 class="font-semibold">HP super Laptop 2024</h4>
                                    <p class="">INTEL 13600K</p>
                                </div>
                                <p class="font-semibold text-primary_yellow">$1442.00</p>
                            </div>
                        </li>
                        <!-- ***** -->
                    </ul>
                    <!-- SECCION Nuestras marcas -->
                    <div class="my-6 md:my-14 lg:my-16">
                        <h3
                                class="text- text-center text-2xl font-bold capitalize lg:text-4xl"
                        >
                            Nuestras marcas
                        </h3>
                        <div
                                class="container grid w-full grid-cols-3 place-content-center items-center gap-5 pb-6 pt-4 lg:grid-cols-5 lg:py-8"
                        >
                            <img class="" src="assets/images/brand-0.png" alt=""/>
                            <img class="" src="assets/images/brand-1.png" alt=""/>
                            <img src="assets/images/brand-2.png" alt=""/>
                            <img
                                    class="hidden lg:block"
                                    src="assets/images/brand-3.png"
                                    alt=""
                            />
                            <img
                                    class="hidden lg:block"
                                    src="assets/images/brand-3.png"
                                    alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile ?>
</main>
</main>
<?php get_footer() ?>
