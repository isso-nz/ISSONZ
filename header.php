<?php 

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://kit.fontawesome.com/aec5bcb84e.js?ver=5.4.1"></script>
    <?php wp_head(); ?>
</head>
<body class="bg-gray-200">
    <header class="mx-auto w-11/12 h-24 sm:h-32  mt-6 bg-white shadow sm:shadow-md md:shadow-lg lg:shadow-xl flex items-center justify-between fade-in">
        <div class="flex-auto justify-center my-8 flex lg:justify-start fade-in-top">
            <a href="<?php echo get_home_url() ?>">
                <img class="h-16 sm:h-20 mx-4 sm:mx-8" src="<?php echo get_template_directory_uri( ); ?>/src/svg/logo.svg" alt="ISSO LOGO" srcset="">
            </a>
            <div class="my-auto">
                <h1 class="text-secondaray break-normal font-quicksand m-0 text-xl md:text-2xl lg:text-3xl leading-none">ISSO New Zealand</h1>
                <h2 class="text-secondaray font-quicksand m-0 text-lg md:text-lg lg:text-xl  leading-none">Hindu Temples</h2>
            </div>
        </div>
        <div class=" hidden mx-8 lg:block fade-in-top">
            <?php 
                wp_nav_menu(
                    array(
                        'container'  => 'div',
                        'items_wrap' => '%3$s',
                        'container_class' => 'list-none inline-flex ml-auto',
                        'theme_location' => 'primary',
                        'walker' => new ISSO_Walker()
                    )
                );
            ?>
            <a class="p-2 px-6 uppercase text-secondaray font-quicksand hover:text-black duration-300 transition ease-out border-solid border-secondaray border-2 bg-gradient-primary-lite hover:bg-gradient-primary-lite-h font-medium tracking-wide" href="#">Donate</a>
        </div>
        <div id="menu-mini" class="fixed right-0 bottom-0 m-8 block lg:hidden">
            <a class="bg-gradient-primary-lite rounded-full h-16 w-16 flex items-center justify-center border-solid border-secondaray border-2 text-2xl"><i class="fas fa-bars"></i></a>
        </div>
        <div class="mobile-nav hidden z-50" id="nav-mini">
            <div id="menu-bg" class="fixed top-0 left-0 bg-black h-full w-full opacity-75"></div>
            <div id="menu-bg" class="fixed top-0 left-0 h-full w-full flex">
                <div class="w-10/12 m-auto flex justify-center flex-col">
                    <a id="nav-close" href="#"><i class="fas fa-times text-white fixed top-0 right-0 m-8 text-3xl"></i></a>
                    <a class="flex justify-center" href="<?php echo get_home_url() ?>">
                        <img class="h-20 " src="<?php echo get_template_directory_uri( ); ?>/src/svg/logo.svg" alt="ISSO LOGO" srcset="">
                    </a>
                    <?php 
                    wp_nav_menu(
                        array(
                            'container'  => 'div',
                            'items_wrap' => '%3$s',
                            'container_class' => 'list-none p-8',
                            'theme_location' => 'primary',
                            'walker' => new ISSO_Walker_Mini()
                        )
                    );
                ?>
            </div>
        </div>
        </div>
        <?php get_template_part('template-parts/header', 'livestream' ) ?>
    </header>