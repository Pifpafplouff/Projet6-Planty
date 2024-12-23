<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

function ajout_element_menu($items, $args) {
    if (is_user_logged_in() ) {//&& $args->theme_location == 'menu-1' { {
        $adminUrl = get_admin_url();
        $items .= "<li id=\"menu-item-193\"  class=\"menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu\"><a id=\"lien-admin\" href=\"{$adminUrl}\">Admin</a></li>";
    }
    return $items;
    
    
}


add_filter('wp_nav_menu_items', 'ajout_element_menu', 10, 2);


?>
