<?php
if ( has_post_thumbnail() ) : 
?>
<img class="h-19 w-full object-cover" src="<?php echo get_the_post_thumbnail_url( $post, 'isso-event-home' ) ?>" alt="eventbanner">

<?php return; endif; ?>

<div class="h-19 w-full bg-gradient-primary-lite flex justify-center items-center">
    <img class="h-16 sm:h-20 mx-4 sm:mx-8" src="<?php echo get_template_directory_uri( ); ?>/src/svg/logo.svg" alt="ISSO LOGO" srcset="">
</div>

