<div class=" pt-5 pb-3 xl:pt-8 xl:pb-4">
	<h3 class="text-center text-3xl font-bold capitalize lg:text-5xl">
		Nuestras marcas
	</h3>
	<div class="container my-10 flex justify-center">
		<div
			class="scroller box-border max-w-[1250px] pointer-events-none select-none"
			data-speed="fast"
			data-direction="left"
		>
			<ul class="tag-list scroller__inner flex flex-wrap gap-4 text-white">
				<?php $frontPageBrands = new WP_Query( [
					'post_type' => 'brand'
				] );
				while ( $frontPageBrands->have_posts() ) : $frontPageBrands->the_post();
					$imgBrandURL = get_field( 'logotipo_de_la_marca' ); ?>
					<!--                        <div>--><?php //echo $imgBrandURL['sizes']['logotiposDeEmpresas'] ?><!--</div>-->

					<img class="max-h-16 w-full mx-3" src="<?= $imgBrandURL['sizes']['logotiposDeEmpresas'] ?>"
					     alt=""/>

				<?php endwhile;
				wp_reset_postdata(); ?>
			</ul>
		</div>
	</div>
</div>