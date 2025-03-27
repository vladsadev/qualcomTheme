<div
        class="container flex flex-col gap-4 h-full md:h-64 md:flex-row"
>
    <!-- descripcion de las opiniones -->
    <div class="relative text-white md:w-1/2 lg:w-1/3">
        <h2
                class="absolute top-0 inline-block bg-primary_yellow font-rajdhani font-semibold uppercase tracking-[0.2em] text-white"
        >
            Testimonios
        </h2>
        <div class="py-2">
            <h3 class="mt-6 text-3xl font-bold">
                Opiniones de nuestros clientes
            </h3>
            <p class="py-2">
                La retroalimentación recibida es nuestra motivación para seguir
                mejorando.
            </p>
        </div>
    </div>
    <!-- #### carrusel de testimonios #### -->
    <div class="overflow-hidden md:h-full md:w-1/2 lg:w-2/3">
        <div class="h-full">
            <div class="swiper">
				<?php $frontPageTestimonios = new WP_Query( [
					'post_type' => 'testimonio'
				] ); ?>
                <ul class="swiper-wrapper">
					<?php while ( $frontPageTestimonios->have_posts() ) :
						$frontPageTestimonios->the_post(); ?>
                        <!-- Slides -->
                        <li class="swiper-slide">
                            <div
                                    class="flex md:h-64 flex-col bg-main_blue justify-between overflow-hidden rounded-lg
                                        "
                            >
                                <div
                                        class="flex h-full flex-col justify-center bg-slate-50 p-3"
                                >
                                    <p
                                            class="text-main_blue font-normal h-full overflow-hidden flex flex-col justify-center
                                                py-2
                                                text-justify
                                                text-xs
                                                lg:text-sm"
                                    >
										<?= the_field( 'resena' ); ?>
                                    </p>
                                </div>
                                <div class="w-full bg-main_blue px-2 text-slate-50">
                                    <div
                                            class="flex flex-row items-center justify-start gap-4 p-2"
                                    >
                                        <div class="size-8 rounded-full bg-slate-300"></div>
                                        <div class="text-xs lg:text-sm">
                                            <h4><?= the_field( 'nombre_cliente' ) ?></h4>
                                            <span><?= the_field( 'cargo' ) ?></span>
                                            <h3><?= the_field( 'empresa' ) ?></h3>
                                        </div>
                                        <div class="ml-auto"><?php $valoracion = get_field( 'valoracion' );
											$contador                          = 1;
											while ( $contador <= $valoracion ) : ?>
                                                <i class="ri-star-fill text-primary_yellow "></i>
												<?php
												$contador ++;
											endwhile; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
					<?php endwhile;
					wp_reset_postdata(); ?>
                    ?>
                </ul>
                <!-- <div class="swiper-pagination"></div> -->
            </div>
        </div>
    </div>
</div>
