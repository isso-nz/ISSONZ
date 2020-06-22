<?php 
?>


<?php do_action( 'tribe_events_before_template' );?>

<div data-aos="fade-up" data-aos-duration="800" data-aos-once="true" class="w-11/12 shadow sm:shadow-md md:shadow-lg lg:shadow-xl m-auto my-4 text-secondaray relative">
    <img class="h-19 w-full object-cover" src="<?php echo get_template_directory_uri(  ) ?>/src/imgs/events.jpg" alt="eventbanner">
    <div class="bg-gradient-page-cover absolute top-0 left-0 w-full h-full"></div>
    <div class="absolute top-0 left-0 p-8 w-full h-full duration-300 transition ease-out flex flex-col justify-center">
        <h1 class=" text-3xl md:text-4xl lg:text-5xl font-medium"><?php tribe_get_template_part( 'list/title-bar' ); ?></h1>
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p class="font-medium" id="breadcrumbs">','</p>' );
            }
            ?>
    </div>
</div>

<div data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" data-aos-once="true" class="w-11/12 shadow sm:shadow-md md:shadow-lg lg:shadow-xl m-auto my-4 text-secondaray bg-white">
    <?php  tribe_get_template_part( 'list/content' ); ?>
</div>



</div>


<?php
do_action( 'tribe_events_after_template' );