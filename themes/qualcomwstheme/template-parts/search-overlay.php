<!-- Overlay de búsqueda -->
<div id="search-overlay" class="fixed inset-0 bg-dark_blue bg-opacity-95 z-50 flex flex-col justify-center
    items-center transform transition-all scale-0 opacity-0 duration-300">
    <!-- Contenedor principal -->
    <div class="fixed top-[20%] w-full">
        <div class="container relative mx-auto px-4 md:px-8 py-8 max-w-4xl">
            <!-- Cabecera con logo y botón de cierre -->
            <div class="flex justify-between items-center mb-8">
                <a href="<?= site_url( '/' ) ?>" class="flex items-center">
                    <img class="h-12 md:h-16" src="<?= get_theme_file_uri( 'src/assets/images/logo.png' ) ?>"
                         alt="QUALCOM Logo">
                </a>
                <div class="text-slate-300 flex items-center justify-center md:gap-4">
                    <p class="text-xs md:text-base">Presiona en la <span class="font-bold text-white">x</span> o
                        Esc para
                        salir</p>
                    <button id="close-search"
                            class="text-white text-3xl md:text-[3rem] hover:text-primary_yellow transition
                                duration-300">
                        <i class="ri-close-line"></i>
                    </button>
                </div>

            </div>

            <!-- Formulario de búsqueda -->
            <div class="text-center mb-10">
                <h2 class="text-white text-2xl md:text-4xl mb-6 font-light">¿Qué estás buscando?</h2>
                <form role="search" method="get" class="search-form" action="<?= esc_url( home_url( '/' ) ) ?>">
                    <div class="relative">
                        <input
                                type="search"
                                class="w-full border-b-2 border-white bg-transparent text-white text-xl md:text-2xl py-3 px-4 focus:outline-none focus:border-primary_yellow"
                                placeholder="Escribe aquí para buscar..."
                                name="s"
                                autocomplete="off"
                                id="search-input"
                        >
                        <button type="submit"
                                class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white hover:text-primary_yellow transition duration-300">
                            <i class="ri-search-line text-2xl"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Búsquedas populares o categorías -->
            <div class="text-center">
                <h3 class="text-white text-xl mb-4">Búsquedas populares</h3>
                <div class="flex flex-wrap justify-center gap-3">
                    <a href="<?= site_url( '/?s=servicios' ) ?>"
                       class="bg-blue-800 hover:bg-blue-700 text-white px-4 py-2 rounded-full transition duration-300">Servicios</a>
                    <a href="<?= site_url( '/?s=productos' ) ?>"
                       class="bg-blue-800 hover:bg-blue-700 text-white px-4 py-2 rounded-full transition duration-300">Productos</a>
                    <a href="<?= site_url( '/?s=soporte' ) ?>"
                       class="bg-blue-800 hover:bg-blue-700 text-white px-4 py-2 rounded-full transition duration-300">Soporte
                        técnico</a>
                    <a href="<?= site_url( '/?s=impresoras' ) ?>"
                       class="bg-blue-800 hover:bg-blue-700 text-white px-4 py-2 rounded-full transition duration-300">Impresoras</a>
                    <a href="<?= site_url( '/?s=computadoras' ) ?>"
                       class="bg-blue-800 hover:bg-blue-700 text-white px-4 py-2 rounded-full transition duration-300">Computadoras</a>
                </div>
            </div>
        </div>

        <div id="search-overlay__results" class="text-white flex flex-col justify-center container max-w-5xl
            min-h-10 bg-slate-300/20 mt-4 md:mt-8">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem
            corporis
            deleniti dicta
            doloremque dolorum ea eius exercitationem harum, inventore ipsam itaque molestiae natus nihil numquam
            praesentium quis quod voluptatem.
        </div>
    </div>
</div>
