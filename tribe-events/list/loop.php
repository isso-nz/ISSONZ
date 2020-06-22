<?php

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<?php
global $post;
global $more;

$currentMonth = 13;

$more = false;
?>

<div class="tribe-events-loop">

	<?php while ( have_posts() ) : the_post(); ?>
		<?php do_action( 'tribe_events_inside_before_loop' ); ?>

		<!-- Month / Year Headers -->
            <?php 

                if($currentMonth != tribe_get_start_date( $post, false, 'm' )){
                    $currentMonth = tribe_get_start_date( $post, false, 'm' );?>
                    <h1 class="text-3xl text-secondaray text-center"><?php
                    echo  tribe_get_start_date( $post, false, 'F Y' );
                    ?></h1><span data-aos="fade-in" data-aos-duration="800" data-aos-once="true" class="m-auto block w-1/2 bg-primary h-1"></span>
                    <?php
                }
            
            ?>
		<!-- Event  -->
		<?php
		$post_parent = '';
		if ( $post->post_parent ) {
			$post_parent = ' data-parent-post-id="' . absint( $post->post_parent ) . '"';
		}
		?>
		<div id="post-<?php the_ID() ?>" class="<?php tribe_events_event_classes() ?>" <?php echo $post_parent; ?>>
			<?php
			$event_type = tribe( 'tec.featured_events' )->is_featured( $post->ID ) ? 'featured' : 'event';

			/**
			 * Filters the event type used when selecting a template to render
			 *
			 * @param $event_type
			 */
			$event_type = apply_filters( 'tribe_events_list_view_event_type', $event_type );

			tribe_get_template_part( 'list/single', $event_type );
			?>
		</div>


		<?php do_action( 'tribe_events_inside_after_loop' ); ?>
	<?php endwhile; ?>

</div><!-- .tribe-events-loop -->