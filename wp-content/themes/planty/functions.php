<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
}
/*
* Add support for core custom logo.
*
* @link https://codex.wordpress.org/Theme_Logo
*/
$logo_width  = 300;
$logo_height = 100;

add_theme_support(
'custom-logo',
array(
    'height'               => $logo_height,
    'width'                => $logo_width,
    'flex-width'           => true,
    'flex-height'          => true,
    'unlink-homepage-logo' => true,
)
);
register_nav_menus( array(
    'main-menu' => 'Menu principal',
    'footer' => 'Bas de page',
)
);