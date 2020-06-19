<div class="flex-auto justify-center my-8 flex lg:justify-start ">
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