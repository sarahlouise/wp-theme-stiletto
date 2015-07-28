<?php
/**
* Enqueues child theme stylesheet, loading first the parent theme stylesheet.
*/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
    wp_enqueue_style( 'twentyfifteen_style', get_template_directory_uri() . '/style.css' );
    //Added Cutive Mono and Dosis Google Fonts
    wp_enqueue_style( 'googleFonts', 'http://fonts.googleapis.com/css?family=Dosis|Cutive+Mono' );
}


