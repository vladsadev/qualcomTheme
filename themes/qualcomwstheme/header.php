<?php
/**
 * Header para el tema
 *
 * Este es la plantilla que muestra la sección <head> y el inicio del <body>
 * incluyendo el encabezado con los enlaces de navegación
 *
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body class=" "<?php body_class(); ?>>
<?php
wp_body_open();
$args = navigationLinks(); //Recuperamos los enlaces de navegación
?>
<header id="navbar" class="fixed bg-slate-100 inset-0 z-20 max-h-min">
    <nav class="w-[95%] mx-auto 2xl:container flex h-16 items-center justify-between pb-6 pt-8 sm:h-24 sm:pb-4
    md:items-end">
        <!-- Hamburger -->
        <div class="cursor-pointer text-xl sm:text-2xl lg:hidden">
            <i id="hamburger-icon" class="ri-menu-4-line"></i>
        </div>

        <!-- Logo -->
        <a class="cursor-pointer" href="<?= site_url( '/' ) ?>">
            <img
                    class="w-28 md:mr-6 md:w-40"
                    src="<?= get_theme_file_uri( 'src/assets/images/logo.png' ) ?>"
                    alt="Main Logo"
            />
        </a>

        <!--   LINKS DE NAVEGACIÓN -->
		<?php navigationTemplate( $args ); ?>
    </nav>
</header>