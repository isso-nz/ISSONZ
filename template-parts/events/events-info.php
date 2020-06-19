<?php 

?>
<div class="p-8 text-center font-quicksand text-secondaray">
    <h2 class="text-xl"><?php echo tribe_get_organizer_link( tribe_get_organizer_ids( $post ) ); ?></h2>
    <h1 class="text-4xl"><?php the_title(); ?></h1>
    <h2 class="text-xl"><?php echo tribe_events_event_schedule_details( $post ) ?></h2>

    <a class="font-quicksand mx-auto my-2 px-8 py-2 bg-secondaray hover:bg-primary text-white w-fit flex justify-content items-center duration-300 transition ease-out" href="<?php echo esc_url( tribe_get_event_link( $post ) ); ?>"><?php esc_html_e( 'Continue Reading', 'isso' ); ?> <i class="fas fa-arrow-right pl-2"></i></a>

</div>