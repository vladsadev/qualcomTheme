<?php get_header(); ?>

<main class="bg-white">
    <article class="mt-16 sm:mt-24 py-6 md:py-12">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="flex flex-col md:flex-row">
                <!-- Imagen del producto -->
                <div class="md:w-1/2 bg-gray-200 p-8 flex items-center justify-center">
                    <div class="w-full h-64 bg-gray-300 rounded-lg flex items-center justify-center">
                        <img src="<?= get_the_post_thumbnail_url( '', 'imgProducto' ) ?>"></img>
                    </div>
                </div>

                <!-- Información del producto -->
                <div class="md:w-1/2 p-8">
                    <h1 class="text-2xl font-bold text-gray-800 mb-4">
						<?= get_the_title() ?>
                    </h1>

                    <!-- Calificación con estrellas -->
                    <div class="flex items-center mb-4 hidden">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="text-gray-600 text-sm ml-2">(1 Reseña)</span>
                    </div>

                    <!-- Precio -->
                    <div class="mb-6">
                        <div class="flex items-baseline">
                            <span class="text-3xl font-bold text-orange-500">BS. <?= number_format( get_field( 'precio_del_producto' ), 2, ',', '.' )
	                            ?></span>
                        </div>
                    </div>

                    <!-- Descripción -->
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">
						<?= get_field( 'resumen_del_producto' ) ?>
                    </p>

                    <!-- Selector de cantidad -->
                    <div class="mb-6">
                        <div class="flex items-center">
                            <button class="w-10 h-10 border border-gray-300 rounded-l-lg flex items-center justify-center hover:bg-gray-100 transition-colors">
                                <i class="fas fa-minus text-gray-600"></i>
                            </button>
                            <input type="number" value="1" min="1"
                                   class="w-16 h-10 border-t border-b border-gray-300 text-center focus:outline-none focus:ring-2 focus:ring-orange-500">
                            <button class="w-10 h-10 border border-gray-300 rounded-r-lg flex items-center justify-center hover:bg-gray-100 transition-colors">
                                <i class="fas fa-plus text-gray-600"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Botón de comprar -->
                    <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200 mb-6">
                        COMPRAR
                    </button>

                    <!--descripción del botón de compra-->
                    <div class="text-xs lg:text-sm pb-2 md:pb-4"> Al hacer click en el botón de compra la información del
                        producto será
                        enviada a
                        un
                        operador
                        concretar el pago y forma de entrega del producto.
                    </div>

                    <!-- Información adicional -->
                    <div class="grid grid-cols-2 gap-4 text-sm">
                        <div>
                            <span class="text-gray-500">Marca:</span>
                            <span class="text-gray-800 font-medium ml-2"><?= get_field( 'marca_del_producto' ) ?></span>
                        </div>
                        <div class="hidden">
                            <span class="text-gray-500">Categoría:</span>
                            <span class="text-gray-800 font-medium ml-2">PCs</span>
                        </div>
                        <div class="hidden">
                            <span class="text-gray-500">Etiqueta:</span>
                            <span class="text-gray-800 font-medium ml-2">Escritorio</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <section class="max-w-6xl mx-auto">
        <div class="bg-white rounded-lg shadow-sm p-8">
            <!-- Tabs -->
            <div class="hidden border-b border-gray-200 mb-8">
                <button class="px-6 py-3 text-qualcom-orange border-b-2 border-qualcom-orange font-semibold">
                    Descripción
                </button>
                <button class="hidden px-6 py-3 text-gray-500 hover:text-qualcom-orange transition-colors">
                    Reseñas (1)
                </button>
            </div>

            <!-- Sección Descripción -->
            <div class="mb-12">
                <h2 class="text-3xl text-primary_yellow  font-bold mb-6">Descripción General</h2>
                <p class="text-gray-600 leading-relaxed">
                    <?= get_field('descripcion_del_producto')?>
                </p>
            </div>

            <!-- Sección Productos en oferta-->
            <div>
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900">Productos en Oferta</h3>
                        <p class="text-gray-500 text-sm mt-1">Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                    </div>
                    <button class="flex items-center gap-2 px-6 py-2 border-2 border-primary_yellow text-primary_yellow
                    rounded-full hover:bg-primary_yellow hover:text-white transition-all duration-300">
                        Ver más
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>

                <!-- Grid de productos -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">

                    <!-- Producto 1 -->
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg hover:border-qualcom-orange transition-all duration-300 cursor-pointer group">
                        <div class="h-40 bg-gradient-to-br from-gray-300 to-gray-400 flex items-center justify-center">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="p-3">
                            <h4 class="text-sm font-medium text-gray-900 mb-2 leading-tight">IPASON - Gaming Desktop - AMD
                                3000G</h4>
                            <div class="flex items-center gap-2">
                                <span class="text-gray-400 line-through text-sm">$40</span>
                                <span class="text-qualcom-orange font-bold">$23</span>
                            </div>
                        </div>
                    </div>

                    <!-- Producto 2 -->
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg hover:border-qualcom-orange transition-all duration-300 cursor-pointer group">
                        <div class="h-40 bg-gradient-to-br from-blue-300 to-blue-500 flex items-center justify-center">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="p-3">
                            <h4 class="text-sm font-medium text-gray-900 mb-2 leading-tight">IPASON - Gaming Desktop - AMD
                                3000G</h4>
                            <div class="flex items-center gap-2">
                                <span class="text-gray-400 line-through text-sm">$40</span>
                                <span class="text-qualcom-orange font-bold">$23</span>
                            </div>
                        </div>
                    </div>

                    <!-- Producto 3 -->
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg hover:border-qualcom-orange transition-all duration-300 cursor-pointer group">
                        <div class="h-40 bg-gradient-to-br from-purple-300 to-purple-500 flex items-center justify-center">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="p-3">
                            <h4 class="text-sm font-medium text-gray-900 mb-2 leading-tight">IPASON - Gaming Desktop - AMD
                                3000G</h4>
                            <div class="flex items-center gap-2">
                                <span class="text-gray-400 line-through text-sm">$40</span>
                                <span class="text-qualcom-orange font-bold">$23</span>
                            </div>
                        </div>
                    </div>

                    <!-- Producto 4 -->
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg hover:border-qualcom-orange transition-all duration-300 cursor-pointer group">
                        <div class="h-40 bg-gradient-to-br from-green-300 to-green-500 flex items-center justify-center">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="p-3">
                            <h4 class="text-sm font-medium text-gray-900 mb-2 leading-tight">IPASON - Gaming Desktop - AMD
                                3000G</h4>
                            <div class="flex items-center gap-2">
                                <span class="text-gray-400 line-through text-sm">$40</span>
                                <span class="text-qualcom-orange font-bold">$23</span>
                            </div>
                        </div>
                    </div>

                    <!-- Producto 5 -->
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg hover:border-qualcom-orange transition-all duration-300 cursor-pointer group">
                        <div class="h-40 bg-gradient-to-br from-red-300 to-red-500 flex items-center justify-center">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="p-3">
                            <h4 class="text-sm font-medium text-gray-900 mb-2 leading-tight">IPASON - Gaming Desktop - AMD
                                3000G</h4>
                            <div class="flex items-center gap-2">
                                <span class="text-gray-400 line-through text-sm">$40</span>
                                <span class="text-qualcom-orange font-bold">$23</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

</main>


<?php get_footer(); ?>
