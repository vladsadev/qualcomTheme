<?php get_header();
getPageBanner();
?>
	<main class="container h-[50vh]">

		<div class="error-page py-10 text-center">
			<h1>¡Página no encontrada!</h1>
			<p>Lo sentimos, la página que estás buscando no existe.</p>
			<p>Puedes regresar a la <a class="text-red-light" href="<?php echo home_url(); ?>">página principal</a> o
				usar
				la búsqueda mediante(Ctrl +K).</p>
		</div>

	</main>

<?php get_footer(); ?>