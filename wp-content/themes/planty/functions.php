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
    'footer-menu' => 'Bas de page',
)
);

add_filter('wpcf7_autop_or_not', '__return_false');

function add_admin_button($items, $args){
    if (is_user_logged_in() && $args->theme_location == 'main-menu') {
    $admin_link = '<li class="menu-item"><a href="' . site_url() .'/wp-admin/">Admin</a></li>';
    $menu_items = explode('</li>', $items);
    $insert_index = 1;
    array_splice($menu_items, $insert_index, 0, $admin_link);
    $items = implode('</li>', $menu_items);
    }
return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_button', 10, 2);