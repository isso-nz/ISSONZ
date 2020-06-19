<?php

global $post;

if(!class_exists('Tribe__Events__Main')) return;

$events =tribe_get_events( array(
    'posts_per_page' => 3,
    'start_date' => date( 'Y-m-d H:i:s' ),
) );

if(count($events) < 3) return;

$currentdelay = 0;

?>
<div>
    <h1 data-aos="fade-up" data-aos-duration="800"  data-aos-once="true"  class="text-center text-secondaray text-5xl">Upcoming Events</h1>
    <span data-aos="fade-up" data-aos-duration="800"  data-aos-once="true" class="m-auto block w-2/12 bg-primary h-1 mt-2"></span>
    <div class="w-11/12 m-auto block md:grid md:grid-cols-2 lg:grid-cols-3 gap-2 mt-4">
    <?php
    foreach ( $events as $post ) :
        
        setup_postdata( $post ); ?>
        <article class="mb-4 md:mb-0 <?php if ($currentdelay == 400) : echo "lg:block md:hidden sm:block"; endif; ?>">
            <div data-aos="fade-up" data-aos-duration="800"  data-aos-once="true" data-aos-delay="<?php echo $currentdelay ?>" class="w-full bg-white shadow sm:shadow-md md:shadow-lg lg:shadow-xl hover:shadow-2xl duration-300 transition ease-out">
                <?php get_template_part('template-parts/events/events', 'thumbnail' ) ?>
                <?php get_template_part('template-parts/events/events', 'info' ) ?>
            </div>
        </article>
        
    <?php $currentdelay = $currentdelay + 200; endforeach; ?>
    </div>

</div>