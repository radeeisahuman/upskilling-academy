<?php
/*
*<!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
*
*/


function enqueue_theme_styles(){
    wp_enqueue_style('theme-build', get_stylesheet_directory_uri() . '/assets/css/dist/output.css', [], wp_get_theme()->get('Version'));
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], '11');
    wp_enqueue_style('googleapis', 'https://fonts.googleapis.com', [], wp_get_theme()->get('Version'));
    wp_enqueue_style('gstatic', 'https://fonts.gstatic.com', [], wp_get_theme()->get('Version'));
    wp_enqueue_style('montserrat-font', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', [], wp_get_theme()->get('Version'));

    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], '11', true);

    if(is_page('home')):
        wp_enqueue_script('home', get_stylesheet_directory_uri() . '/assets/js/home.js', [], wp_get_theme()->get('Version'), true);
    endif;
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');