<?php get_header();
the_post();


?>

<div data-aos="fade-up" data-aos-duration="800" data-aos-once="true" class="w-11/12 shadow sm:shadow-md md:shadow-lg lg:shadow-xl m-auto my-4 text-secondaray relative">
    <?php get_template_part('template-parts/page', 'thumbnail' ) ?>
    <div class="bg-gradient-page-cover absolute top-0 left-0 w-full h-full"></div>
    <div class="absolute top-0 left-0 p-8 w-full h-full duration-300 transition ease-out flex flex-col justify-center">
        <h1 class=" text-3xl md:text-4xl lg:text-5xl font-medium"><?php the_title(); ?></h1>
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p class="font-medium" id="breadcrumbs">','</p>' );
            }
            ?>
    </div>
</div>
<div data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" data-aos-once="true" class="w-11/12 m-auto my-4 bg-white shadow sm:shadow-md md:shadow-lg lg:shadow-xl p-8">
    <?php the_content(); ?>
</div>

<?php 
get_footer( ) ?>
