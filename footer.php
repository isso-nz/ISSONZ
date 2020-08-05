<footer class="my-16 text-center text-secondaray">
    <h1 data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" data-aos-once="true" class="text-xl">ISSO New Zealand</h1>
    <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" data-aos-once="true" class="flex justify-center my-4">
        <a  class="flex flex-col justify-center items-center text-secondaray text-lg md:text-xl font-quicksand font-medium hover:text-primary duration-300 transition ease-out m-2 md:m-0" href="<?php echo get_home_url()  ?>/hub/"><i class="fab mx-2 fa-facebook-square text-4xl mb-2"></i></i></a>

        <a  class="flex flex-col justify-center items-center text-secondaray text-lg md:text-xl font-quicksand font-medium hover:text-primary duration-300 transition ease-out m-2 md:m-0" href="<?php echo get_home_url()  ?>/hub/"><i class="fab mx-2 fa-instagram-square text-4xl mb-2"></i></a>

        <a  class="flex flex-col justify-center items-center text-secondaray text-lg md:text-xl font-quicksand font-medium hover:text-primary duration-300 transition ease-out m-2 md:m-0" href="<?php echo get_home_url()  ?>/hub/"><i class="fab mx-2 fa-youtube-square text-4xl mb-2"></i></a>

        <a  class="flex flex-col justify-center items-center text-secondaray text-lg md:text-xl font-quicksand font-medium hover:text-primary duration-300 transition ease-out m-2 md:m-0" href="<?php echo get_home_url()  ?>/hub/"><i class="fab mx-2 fa-twitter-square  text-4xl mb-2"></i></i></a>
    </div>
    <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" data-aos-once="true" >
    <?php 
        wp_nav_menu(
            array(
                'container'  => 'div',
                'items_wrap' => '%3$s',
                'menu_class' => 'list-none flex justify-center items-center',
                'theme_location' => 'footer',
            )
        );
    ?>
    </div>
    
    <h2 data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" data-aos-once="true" class="mt-8">Jay Swaminarayan</h2>
</footer>
<?php wp_footer(  ); ?>
</body>
</html>