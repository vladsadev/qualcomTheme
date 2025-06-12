<div class="brands-section">
    <h3 class="brands-title">Nuestras Marcas</h3>
    <div class="brands-container">
        <div class="scroller" data-animated="true" data-speed="fast" data-direction="left">
            <div class="scroller__inner">
				<?php
				$frontPageBrands = new WP_Query(['post_type' => 'brand']);
				$brands = []; // Guardar para duplicar

				while ($frontPageBrands->have_posts()) : $frontPageBrands->the_post();
					$imgBrandURL = get_field('logotipo_de_la_marca');
					$brands[] = $imgBrandURL;
					?>
                    <img class="brand-logo"
                         src="<?= $imgBrandURL['sizes']['logotiposDeEmpresas'] ?>"
                         alt="<?= get_the_title() ?>">
				<?php endwhile; ?>

				<?php // Duplicar para loop suave
				foreach($brands as $brand) : ?>
                    <img class="brand-logo"
                         src="<?= $brand['sizes']['logotiposDeEmpresas'] ?>"
                         alt="<?= get_the_title() ?>">
				<?php endforeach;
				wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>