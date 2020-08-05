<?php
?>
<div class="glide my-4 fade-in">
  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides">
      <li id="slide-text" data-index="0" class="glide__slide">
        <div class="mx-auto h-banner w-11/12 shadow sm:shadow-md md:shadow-lg lg:shadow-xl relative">
            <img class="w-full h-full object-cover fade-in" src="<?php echo get_template_directory_uri(  ) ?>/src/imgs/slide1.jpg" alt="image" srcset="">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-page-cover-mobile md:bg-gradient-hero-cover flex flex-col pt-24 sm:pt-24 md:pt-40 lg:pt-64 px-12">
                <h1 class="hidden font-quicksand pt-16 sm:pt-0 text-3xl sm:text-4xl md:text-5xl lg:text-6xl fade-in-top">All are welcome!</h1>
                <a  class="hidden fade-in-top font-quicksand px-8 py-2 bg-secondaray duration-300 transition ease-out hover:bg-primary text-white w-fit flex justify-content items-center mt-4" href="<?php echo get_home_url() ?>/location">Directions <i class="fas fa-arrow-right pl-2"></i> </a>
            </div>
        </div>
      </li>
      <li id="slide-text" data-index="1" class="glide__slide">
        <div class="mx-auto h-banner w-11/12 shadow sm:shadow-md md:shadow-lg lg:shadow-xl relative">
            <img class="w-full h-full object-cover fade-in" src="<?php echo get_template_directory_uri(  ) ?>/src/imgs/slide2.jpg" alt="image" srcset="">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-page-cover-mobile md:bg-gradient-hero-cover flex flex-col pt-24 sm:pt-24 md:pt-40 lg:pt-64 px-12">
                <h1 class="hidden font-quicksand pt-16 sm:pt-0 text-3xl sm:text-4xl md:text-5xl lg:text-6xl fade-in-top">Learn about what we offer</h1>
                <a  class="hidden fade-in-top font-quicksand px-8 py-2 bg-secondaray duration-300 transition ease-out hover:bg-primary text-white w-fit flex justify-content items-center mt-4" href="<?php echo get_home_url() ?>/services">Take me there <i class="fas fa-arrow-right pl-2"></i> </a>
            </div>
        </div>
      </li>
      <li id="slide-text" data-index="2" class="glide__slide">
        <div class="mx-auto h-banner w-11/12 shadow sm:shadow-md md:shadow-lg lg:shadow-xl relative">
            <img class="w-full h-full object-cover fade-in" src="<?php echo get_template_directory_uri(  ) ?>/src/imgs/slide3.jpg" alt="image" srcset="">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-page-cover-mobile md:bg-gradient-hero-cover flex flex-col pt-24 sm:pt-24 md:pt-40 lg:pt-64 px-12">
                <h1 class="hidden font-quicksand pt-16 sm:pt-0 text-3xl sm:text-4xl md:text-5xl lg:text-6xl fade-in-top">Never miss out</h1>
                <a  class="hidden fade-in-top font-quicksand px-8 py-2 bg-secondaray duration-300 transition ease-out hover:bg-primary text-white w-fit flex justify-content items-center mt-4" href="<?php echo get_home_url() ?>/live">Watch live <i class="fas fa-arrow-right pl-2"></i> </a>
            </div>
        </div>
      </li>
    </ul>
  </div>
</div>