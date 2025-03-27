<!doctype html>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>

</head>
<body class="flex absolute w-full h-screen flex-col <?php body_class(); ?>">

<header id="navbar" class="fixed left-0 top-0 z-10 p-1 w-full bg-slate-50">
    <nav
            class="container flex h-16 items-center justify-between pb-6 pt-8 sm:h-28 sm:pb-4 md:items-end"
    >
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
        <!-- Menu PANEL: navigation links, close icons -->
        <div
                id="nav-menu"
                class="absolute left-[-100%] top-0 z-20 min-h-[90vh] w-full overflow-hidden border-b-2 border-emerald-800 bg-dark_blue px-5 duration-500 ease-out md:w-1/2 md:px-10 lg:static lg:min-h-fit lg:w-auto lg:border-0 lg:bg-transparent"
        >
            <!-- ###### NAVIGATION Links #####  -->
            <ul
                    class="flex flex-col items-start gap-8 pt-24 lg:flex-row lg:items-end lg:pt-0"
            >
                <li <?= is_front_page() ? 'class=active' : 'class=nav-link' ?>>
                    <a href="<?= site_url( '/' ); ?>"
                    >Inicio <i class="ri-arrow-down-s-line"></i>
                    </a>
                </li>
                <li <?= is_page( 'sobre-nosotros' ) ? 'class=active' : 'class=nav-link' ?>>
                    <a
                            href="<?= site_url( '/sobre-nosotros' ) ?>"
                    >Sobre<br>Nosotros<i class="ri-arrow-down-s-line"></i
                        ></a>
                </li>
                <li <?= is_page( 'servicios' ) ? 'class=active' : 'class=nav-link' ?>>

                    <a href="<?= site_url( '/servicios' ) ?>"
                    >Servicios/<br/>Productos<i class="ri-arrow-down-s-line"></i
                        ></a>
                </li>
                <li <?= ( get_post_type() === 'post' ) ? 'class=active' : 'class=nav-link' ?>>
                    <a href=<?= site_url( '/blog' ) ?>
                    >Blogs/<br/>Noticias<i class="ri-arrow-down-s-line"></i
                        ></a>
                </li>
                <li <?= is_page( 'contacto' ) ? 'class=active' : 'class=nav-link' ?>>
                    <a href=<?= site_url( 'contacto' ) ?>
                    >Contacto<i class="ri-arrow-down-s-line"></i
                        ></a>
                </li>
            </ul>
            <!-- Close menu icon mobile version -->
            <div
                    class="absolute right-5 top-5 cursor-pointer text-xl text-slate-200 sm:text-2xl lg:hidden"
            >
                <i class="ri-close-large-line" id="close-icon"></i>
            </div>

            <!-- Top right icons for MOBILE version:search-icon, register and sign in -->
            <div class="flex cursor-pointer items-center gap-5 pt-20 lg:hidden">
                <a class="nav-link" href="#">Registrarse</a>
                <a class="nav-link" href="#">Iniciar Sesión</a>
            </div>
        </div>
        <!-- Top right icons DESKTOP: search-icon, Sign in and login -->
        <div
                class="flex cursor-pointer items-center gap-5 text-xl sm:text-2xl lg:self-center"
        >
<!--            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>-->

            <i class="ri-search-line js-search-trigger hover:text-primary_yellow"></i>
            <!--            <a class="nav-link hidden lg:block" href="#">Registrarse</a>-->
            <a class="nav-link hidden lg:block" href="<?php echo site_url( 'wp-admin' ); ?>">Iniciar Sesión</a>
        </div>
    </nav>
</header>