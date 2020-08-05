<?php

$count = 3;

if ( ! tribe_get_venue_id() ) {
	$count --;
}

$organizer_ids = tribe_get_organizer_ids();

$hasOrganizer = count( $organizer_ids ) > 0;

if( ! $hasOrganizer) {
    $count --;
}

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

<div class="block md:grid grid-cols-<?php echo $count; ?> w-11/12 m-auto gap-4">
    <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true" class=" shadow sm:shadow-md md:shadow-lg lg:shadow-xl bg-primary p-6 text-secondaray">
        <i class="fas fa-calendar-day text-3xl "></i>
        <?php echo tribe_events_event_schedule_details( $event_id, '<h2 class="text-xl">', '</h2>' ); ?>
    </div>

    <?php 

        if (  tribe_get_venue_id() ) {
            ?>

                    <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" data-aos-once="true" class="mt-4 md:mt-0 shadow sm:shadow-md md:shadow-lg lg:shadow-xl bg-primary p-6 text-secondaray">
                        <i class="fas fa-map-marked-alt text-3xl"></i>
                        <h2 class="text-xl"><?php echo tribe_get_full_address(); ?></h2>
                    </div>

            <?php
        }

    ?>


    <?php 

        if (  $hasOrganizer ) {
            ?>

                    <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" data-aos-once="true" class="mt-4 md:mt-0 shadow sm:shadow-md md:shadow-lg lg:shadow-xl bg-primary p-6 text-secondaray">
                        <i class="fas fa-user-cog text-3xl"></i>
                        <h2 class="text-xl"><?php echo tribe_get_organizer(); ?></h2>
                    </div>

            <?php
        }

    ?>

    
</div>


<div data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" data-aos-once="true" class="w-11/12 m-auto my-4 bg-white shadow sm:shadow-md md:shadow-lg lg:shadow-xl p-8">
    <?php the_content(); ?>

    <div class="my-4 block md:flex">
        <a target="_blank" href="<?php echo tribe_get_gcal_link(); ?>" data-aos="fade-in" data-aos-duration="800" data-aos-delay="400" data-aos-once="true" class="m-0 md:m-0 font-quicksand px-8 py-2 bg-secondaray hover:bg-primary text-white w-fit flex justify-content items-center duration-300 transition ease-out">Add to Google Calander</a>
        <a target="_blank" href="<?php echo tribe_get_ical_link(); ?>" data-aos="fade-in" data-aos-duration="800" data-aos-delay="500" data-aos-once="true" class="m-0 mt-4 md:m-0 md:ml-4 font-quicksand px-8 py-2 bg-secondaray hover:bg-primary text-white w-fit flex justify-content items-center duration-300 transition ease-out">Add to Apple Calander</a>
    </div>

    <div class="my-4 block md:flex">
        <a data-aos="fade-in" data-aos-duration="800" data-aos-delay="600" data-aos-once="true" class="m-auto md:m-0 block"><?php tribe_the_prev_event_link( '<h5 class="font-quicksand px-8 py-2 bg-secondaray hover:bg-primary text-white w-fit flex justify-content items-center duration-300 transition ease-out"><i class="fas fa-arrow-left mr-2"></i>%title%</h5>' ) ?></a>
        <a data-aos="fade-in" data-aos-duration="800" data-aos-delay="700" data-aos-once="true" class="m-auto mt-4 md:m-0 md:ml-auto block"><?php tribe_the_next_event_link( '<h5 class="font-quicksand px-8 py-2 bg-secondaray hover:bg-primary text-white w-fit flex justify-content items-center duration-300 transition ease-out">%title% <i class="fas fa-arrow-right ml-2"></i></h5>' ) ?></a>
    </div>
</div>