<?php get_header() ?>
<?php get_template_part('template-parts/content', 'slider' ) ?>
<?php get_template_part('template-parts/content', 'quickinfo' ) ?>
<?php get_template_part('template-parts/content', 'learnmore' ) ?>
<?php get_template_part('template-parts/content', 'soicalplug' ) ?>
<?php get_template_part('template-parts/content', 'upcoming' ) ?>
<div data-aos="fade-up" data-aos-duration="800" data-aos-delay="600"  data-aos-once="true" class="w-11/12 shadow sm:shadow-md md:shadow-lg lg:shadow-xl m-auto my-4 h-22 relative">
    <img class="w-full h-full object-cover" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Shaqi_jrvej.jpg/1200px-Shaqi_jrvej.jpg" alt="">
    <div class="bg-black absolute top-0 left-0 w-full h-full opacity-50"></div>
    <a href="#" class="absolute top-0 left-0 w-full h-full text-white hover:text-primary text-center duration-300 transition ease-out flex flex-col justify-center">
        <i class="fas fa-play text-5xl my-2"></i> 
        <h2 class="text-3xl font-quicksand">Auckland Promo Video</h2>
    </a>
</div>
<div data-aos="fade-up" data-aos-duration="800" data-aos-delay="600"  data-aos-once="true" class="w-11/12 shadow sm:shadow-md md:shadow-lg lg:shadow-xl p-10 m-auto my-4 bg-white">
    <h1 class="text-3xl font-quicksand">Latest Posts</h1>
    <span class=" block w-2/12 bg-primary h-1 mt-2"></span>
    <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) :

            while ( have_posts() ) : the_post();
            ?>
            <a rel="bookmark" class="my-2 block" href="<?php echo esc_url( get_permalink() ) ?>">
                <?php the_title( '<h1 class="text-2xl">', '</h1>' ); ?>
                <h4><?php echo get_the_date( ); ?></h4>
            </a>

            <?php
            endwhile;

            // the_posts_navigation();

            ?>
        <?php else :

        echo "No posts found!";

        endif; ?>

    </main>
</div>
<div data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" data-aos-once="true" class="w-11/12 shadow sm:shadow-md md:shadow-lg lg:shadow-xl p-10 py-16 m-auto my-4 bg-primary flex items-center">
    <div>
        <span class=" block w-2/12 bg-secondaray h-1 mt-2"></span>
        <h1 class="text-3xl text-secondaray font-quicksand">Newsletter</h1>
        <h6>Sign up so you don't miss any new events or posts!</h6>
    </div>
    <a class="ml-auto font-quicksand px-8 py-2 bg-secondaray hover:bg-primary border-secondaray border-2 text-white hover:text-secondaray w-fit flex justify-content items-center duration-300 transition ease-out" href="#">Sign up</a>
</div>
<?php get_footer( ) ?>
