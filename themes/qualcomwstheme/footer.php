<!--~~~~~~~~~~~~~~~ FOOTER ~~~~~~~~~~~~~~~-->
<footer
        class="mt-auto bg-main_blue pb-0 pt-10 leading-none text-slate-300 md:pt-20 lg:pt-24"
>
    <!-- content -->
    <div
            class="container grid grid-cols-1 justify-items-stretch gap-4 text-center sm:grid-cols-2 md:grid-cols-3 md:gap-6 md:text-left xl:grid-cols-12 xl:gap-14"
    >
        <!-- item 1: sobre nosotros -->
        <div class="space-y-4 xl:col-span-3">
            <div class="mx-auto w-11/12 space-y-4">
                <p class="mb-5 text-xl font-bold">Sobre Nosotros</p>
                <p class="">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam!
                </p>
                <img
                        class="inline-block w-36"
                        src="<?php get_theme_file_uri( 'src/assets/images/logo-dark.png' ) ?>"
                        alt=""
                />
            </div>
        </div>
        <!-- item 2: direccion -->
        <div class="xl:col-span-3">
            <div class="mx-auto w-11/12">
                <p class="mb-5 text-xl font-bold">Dirección</p>
                <div class="flex flex-col gap-1 md:gap-4">
                    <p>Calle colombia esq: Illimani<br/>La Paz - Bolivia</p>
                    <a class="nav-link-footer" href="">info@qualcomsrl.com</a>
                    <a href="">+ 591 762965146</a>
                </div>
            </div>
        </div>
        <!-- item 3: servicio al cliente -->
        <div class="xl:col-span-2">
            <div class="mx-auto w-11/12">
                <p class="mb-5 text-xl font-bold">Servicio al cliente</p>
                <div class="flex flex-col gap-2">
                    <a href="#" class="nav-link-footer">Centro de asistencia</a>
                    <a href="#" class="nav-link-footer">Rastrear un pedido</a>
                    <a href="#" class="nav-link-footer">Política de devoluciones</a>
                    <a href="#" class="nav-link-footer">Sugerencias</a>
                </div>
            </div>
        </div>
        <!-- item 4: accesos directos -->
        <div class="xl:col-span-2">
            <p class="mb-5 text-xl font-bold">Accesos directos</p>
            <div class="flex flex-col gap-2">
                <a class="nav-link-footer" href="contacto.html"></a>
                <a class="nav-link-footer" href="#">Sobre Nosotros</a>
                <a class="nav-link-footer" href="Productos">Productos</a>
                <a class="nav-link-footer" href="contacto.html">Blog/noticias</a>
                <a class="nav-link-footer" href="Productos">Contacto</a>
            </div>
        </div>
        <!-- item 5: nuestras marcas -->
        <div class="xl:col-span-2">
            <p class="mb-5 text-xl font-bold">Nuestras Marcas</p>
            <div class="flex flex-col gap-2">
                <a class="nav-link-footer" href="#"></a>
                <a class="nav-link-footer" href="#">HP</a>
                <a class="nav-link-footer" href="#">Lenovo</a>
                <a class="nav-link-footer" href="#">Asus</a>
                <a class="nav-link-footer" href="#">Dell</a>
            </div>
        </div>
    </div>

    <!-- Socials Icons -->
    <div class="mt-2 w-full lg:mt-16">
        <div class="space-x-8 bg-white/5 p-5 text-center lg:text-2xl">
            <i
                    class="ri-facebook-fill cursor-pointer duration-300 hover:text-yellow-500"
            ></i>
            <i
                    class="ri-twitter-x-line cursor-pointer text-base duration-300 hover:text-yellow-500"
            ></i>
            <i
                    class="ri-instagram-line cursor-pointer duration-300 hover:text-yellow-500"
            ></i>
            <i
                    class="ri-linkedin-fill cursor-pointer duration-300 hover:text-yellow-500"
            ></i>
        </div>
    </div>
</footer>


<?php get_template_part( 'template-parts/search-overlay' ) ?>

<?php wp_footer(); ?>
</body>
</html>