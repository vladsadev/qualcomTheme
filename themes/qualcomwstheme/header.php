<!doctype html>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>

</head>
<body class="flex absolute w-full h-screen flex-col <?php body_class(); ?>">
<?php

// ENLACES DE NAVEGACIÓN
$args = navigationLinks();
/**
 * Función auxiliar para verificar condiciones
 */
function check_active_condition($condition)
{
    switch ($condition) {
        case 'is_front_page':
            return is_front_page();
        case "is_page('sobre-nosotros')":
            return is_page('sobre-nosotros');
        case "is_page('servicios')":
            return is_page('servicios');
        case "get_post_type() === 'post'":
            return get_post_type() === 'post';
        case "is_page('contacto')":
            return is_page('contacto');
        default:
            return false;
    }
}

?>

<header id="navbar" class="fixed left-0 top-0 z-10 p-1 w-full bg-slate-50">
    <nav class="w-[95%] mx-auto 2xl:container flex h-16 items-center justify-between pb-6 pt-8 sm:h-24 sm:pb-4
    md:items-end">
        <!-- Hamburger -->
        <div class="cursor-pointer text-xl sm:text-2xl lg:hidden">
            <i id="hamburger-icon" class="ri-menu-4-line"></i>
        </div>

        <!-- Logo -->
        <a class="cursor-pointer" href="<?= site_url('/') ?>">
            <img
                    class="w-28 md:mr-6 md:w-40"
                    src="<?= get_theme_file_uri('src/assets/images/logo.png') ?>"
                    alt="Main Logo"
            />
        </a>

        <!--   LINKS DE NAVEGACIÓN -->
        <?php navigationTemplate($args); ?>
    </nav>
</header>