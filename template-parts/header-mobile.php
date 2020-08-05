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
                <div  class="height-60-screen overflow-y-auto w-11/12 m-auto">
        <?php 
            wp_nav_menu(
                array(
                    'items_wrap' => '%3$s',
                    'link_before' => '<h1 class="hover:text-primary transition ease-in-out duration-200 m-4">',
                    'link_after' => '</h1 >',
                    'menu_class' => 'list-none text-center flex flex-col justify-between items-center w-full text-white text-lg uppercase font-normal',
                    'theme_location' => 'mobile',
                    'container_id' => 'mobile-menu-list',
                )
            );
            
        ?>
    </div>
        </div>
    </div>
</div>