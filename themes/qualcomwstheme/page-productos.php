<?php get_header() ?>
<!-- Banner -->
<?php banner(); ?>

<main class="bg-white text-black">
	<?php while ( have_posts() ): the_post(); ?>
		<?php the_content(); ?>
        <!--~~~~~~~~~~~~~~~ MOSAICO SERVICIOS ~~~~~~~~~~~~~~~-->
        <section>
            <div class="container md:w-11/12 lg:w-3/4 2xl:w-4/6  mt-4 mb-8 md:py-8 lg:py-6">
                <div
                        class="grid grid-cols-1 gap-4 md:grid-cols-2 md:grid-rows-2"
                >
                    <div class="bg-red-600 md:col-span-1 2xl:min-h-56">
                        02
                        <div class="flex flex-col justify-end gap-2 p-4">
                            <h3 class="text-xl font-semibold lg:text-2xl">
                                Arma tu PC en simples pasos
                            </h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            <a href="#">Ver más</a>
                        </div>
                    </div>
                    <!-- <div class="bg-black md:col-span-3 lg:row-span-2">03</div> -->
                    <div class="bg-green-300 md:col-span-1 2xl:min-h-56">
                        03
                        <div class="flex flex-col justify-end gap-2 p-4">
                            <h3 class="text-xl font-semibold lg:text-2xl">
                                Solicita una cotización personalizada
                            </h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            <a href="#">Ver más</a>
                        </div>
                    </div>
                    <div class="bg-blue-500 md:col-span-2  2xl:min-h-56">
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
                </div>
            </div>
        </section>

        <!--    Marcas-->
        <section class="py-5 md:py-10 xl:py-14">
			<?php get_template_part( 'template-parts/content', 'brands' ) ?>
        </section>

	<?php endwhile ?>
</main>
<?php get_footer() ?>
