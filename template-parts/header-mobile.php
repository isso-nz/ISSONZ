<div id="menu-mini" class="fixed right-0 z-40 bottom-0 m-8 block lg:hidden fade-in-bottom">
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