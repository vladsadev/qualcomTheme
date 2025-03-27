<?php get_header(); ?>


<main class="bg-white text-black">
	<?php while ( have_posts() ): the_post(); ?>


	<?php endwhile ?>
</main>
<?php get_footer() ?>
