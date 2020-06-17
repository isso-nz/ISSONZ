<?php 

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body class="bg-gray-200">
    <header class=" w-full  fixed  z-40">
        
        <div class="mx-auto w-11/12 h-24 sm:h-32 bg-white shadow sm:shadow-md md:shadow-lg lg:shadow-xl flex items-center justify-between fade-in">
            <?php get_template_part('template-parts/header', 'bar' ) ?>
        </div>

        <?php get_template_part('template-parts/header', 'mobile' ) ?>

        <?php get_template_part('template-parts/header', 'livestream' ) ?>
        
    </header>
    <div class="h-24 sm:h-32 mt-6">
    
    </div>