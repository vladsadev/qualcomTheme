<?php get_header();
getPageBanner();
?>
    <main class="bg-white text-black">
		<?php while ( have_posts() ): the_post(); ?>


            <!--~~~~~~~~~~~~~~~ Nuestras MARCAS ~~~~~~~~~~~~~~-->
            <section id="productos" class="bg-white">
				<?php get_template_part( 'template-parts/content', 'brands' ) ?>
            </section>

		<?php endwhile ?>
    </main>
<?php get_footer() ?>