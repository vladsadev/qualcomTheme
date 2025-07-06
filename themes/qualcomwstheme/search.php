<?php get_header(); ?>

    <main class="bg-white text-black pt-20">
        <section class="container mx-auto px-4 py-8">
            <div class="max-w-4xl mx-auto">

                <!-- Header de resultados -->
                <div class="mb-8">
                    <h1 class="text-3xl md:text-4xl font-rajdhani font-light text-dark_blue mb-4">
                        Resultados de búsqueda
                    </h1>

					<?php if ( have_posts() ) : ?>
                        <p class="text-lg text-gray-600 mb-6">
							<?php
							global $wp_query;
							$search_term   = get_search_query();
							$total_results = $wp_query->found_posts;
							?>
                            Se encontraron <span class="font-semibold text-primary_yellow"><?= $total_results ?></span>
                            resultado<?= $total_results !== 1 ? 's' : '' ?> para
                            "<span class="font-semibold text-dark_blue"><?= esc_html( $search_term ) ?></span>"
                        </p>
					<?php else : ?>
                        <p class="text-lg text-gray-600 mb-6">
                            No se encontraron resultados para
                            "<span class="font-semibold text-dark_blue"><?= esc_html( get_search_query() ) ?></span>"
                        </p>
					<?php endif; ?>

                    <!-- Formulario de búsqueda -->
                    <div class="bg-gray-50 p-6 rounded-lg mb-8">
                        <form role="search" method="get" action="<?= esc_url( home_url( '/' ) ) ?>" class="flex gap-3">
                            <input
                                    type="search"
                                    name="s"
                                    value="<?= esc_attr( get_search_query() ) ?>"
                                    placeholder="Buscar productos, servicios, artículos..."
                                    class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary_yellow focus:border-transparent"
                            >
                            <button
                                    type="submit"
                                    class="btn px-6 py-3"
                            >
                                <i class="ri-search-line mr-2"></i>
                                Buscar
                            </button>
                        </form>
                    </div>
                </div>

				<?php if ( have_posts() ) : ?>
                    <!-- Resultados de búsqueda -->
                    <div class="space-y-6">
						<?php while ( have_posts() ) : the_post(); ?>
                            <article
                                    class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow duration-300">

                                <!-- Tipo de contenido -->
                                <div class="mb-3">
                                <span class="inline-block px-3 py-1 bg-primary_yellow text-black text-sm font-medium rounded-full">
                                    <?php
                                    $post_type = get_post_type();
                                    switch ( $post_type ) {
	                                    case 'post':
		                                    echo 'Artículo';
		                                    break;
	                                    case 'page':
		                                    echo 'Página';
		                                    break;
	                                    case 'producto':
		                                    echo 'Producto';
		                                    break;
	                                    default:
		                                    echo ucfirst( $post_type );
                                    }
                                    ?>
                                </span>
                                </div>

                                <!-- Título -->
                                <h2 class="text-xl md:text-2xl font-rajdhani font-medium text-dark_blue mb-3">
                                    <a href="<?= get_permalink() ?>"
                                       class="hover:text-primary_yellow transition-colors duration-300">
										<?= get_the_title() ?>
                                    </a>
                                </h2>

                                <!-- Extracto -->
                                <div class="text-gray-600 mb-4">
									<?php
									$excerpt = get_the_excerpt();
									if ( ! $excerpt ) {
										$excerpt = wp_trim_words( get_the_content(), 30 );
									}

									// Resaltar término de búsqueda
									$search_term = get_search_query();
									if ( $search_term ) {
										$excerpt = preg_replace(
											'/(' . preg_quote( $search_term, '/' ) . ')/i',
											'<mark class="bg-primary_yellow text-black px-1 rounded">$1</mark>',
											$excerpt
										);
									}
									echo $excerpt;
									?>
                                </div>

                                <!-- Metadatos -->
                                <div class="flex items-center justify-between text-sm text-gray-500">
                                    <div class="flex items-center gap-4">
                                    <span>
                                        <i class="ri-calendar-line mr-1"></i>
                                        <?= get_the_date() ?>
                                    </span>

										<?php if ( get_post_type() === 'producto' && function_exists( 'get_field' ) ) : ?>
											<?php $precio = get_field( 'precio_del_producto' ); ?>
											<?php if ( $precio ) : ?>
                                                <span class="text-primary_yellow font-semibold">
                                                <i class="ri-price-tag-3-line mr-1"></i>
                                                Bs. <?= $precio ?>
                                            </span>
											<?php endif; ?>
										<?php endif; ?>
                                    </div>

                                    <a href="<?= get_permalink() ?>"
                                       class="text-dark_blue hover:text-primary_yellow font-medium transition-colors duration-300">
                                        Ver más <i class="ri-arrow-right-line ml-1"></i>
                                    </a>
                                </div>
                            </article>
						<?php endwhile; ?>
                    </div>

                    <!-- Paginación -->
                    <div class="mt-8 text-center">
                        <div class="text-primary_yellow font-semibold">
							<?= paginate_links( array(
								'prev_text' => '<i class="ri-arrow-left-line"></i> Anterior',
								'next_text' => 'Siguiente <i class="ri-arrow-right-line"></i>',
								'type'      => 'list'
							) ); ?>
                        </div>
                    </div>

				<?php else : ?>
                    <!-- Sin resultados -->
                    <div class="text-center py-12">
                        <div class="mb-6">
                            <i class="ri-search-line text-6xl text-gray-300"></i>
                        </div>

                        <h2 class="text-2xl font-rajdhani font-medium text-dark_blue mb-4">
                            No se encontraron resultados
                        </h2>

                        <p class="text-gray-600 mb-6 max-w-md mx-auto">
                            No pudimos encontrar contenido que coincida con tu búsqueda.
                            Prueba con otros términos o explora nuestras categorías.
                        </p>

                        <!-- Sugerencias de búsqueda -->
                        <div class="bg-gray-50 p-6 rounded-lg max-w-2xl mx-auto">
                            <h3 class="text-lg font-rajdhani font-medium text-dark_blue mb-4">
                                Sugerencias de búsqueda:
                            </h3>

                            <div class="flex flex-wrap justify-center gap-3">
                                <a href="<?= site_url( '/?s=nuestras-marcas' ) ?>"
                                   class="bg-blue-800 hover:bg-blue-700 text-white px-4 py-2 rounded-full transition duration-300">
                                    Nuestras Marcas
                                </a>
                                <a href="<?= site_url( '/?s=productos' ) ?>"
                                   class="bg-blue-800 hover:bg-blue-700 text-white px-4 py-2 rounded-full transition duration-300">
                                    Productos
                                </a>
                                <a href="<?= site_url( '/?s=soporte' ) ?>"
                                   class="bg-blue-800 hover:bg-blue-700 text-white px-4 py-2 rounded-full transition duration-300">
                                    Soporte técnico
                                </a>
                                <a href="<?= site_url( '/?s=impresoras' ) ?>"
                                   class="bg-blue-800 hover:bg-blue-700 text-white px-4 py-2 rounded-full transition duration-300">
                                    Impresoras
                                </a>
                                <a href="<?= site_url( '/?s=computadoras' ) ?>"
                                   class="bg-blue-800 hover:bg-blue-700 text-white px-4 py-2 rounded-full transition duration-300">
                                    Computadoras
                                </a>
                            </div>
                        </div>

                        <div class="mt-6">
                            <a href="<?= home_url() ?>" class="btn">
                                <i class="ri-home-line mr-2"></i>
                                Volver al inicio
                            </a>
                        </div>
                    </div>
				<?php endif; ?>

            </div>
        </section>
    </main>

<?php get_footer(); ?>