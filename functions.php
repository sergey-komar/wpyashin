<?php

function yashin_script(){
    wp_enqueue_style('yashin-fancy', get_template_directory_uri() . '/assets/css/fancy.css', [], '2024', 'all');
    wp_enqueue_style('yashin-style', get_template_directory_uri() . '/assets/css/style.min.css', [], '2024', 'all');
    

    wp_enqueue_script('fancy-js', get_template_directory_uri() . '/assets/js/fancy.js', [], '2023', true);
    wp_enqueue_script('yashin-js', get_template_directory_uri() . '/assets/js/main.min.js', [], '2023', true);

}

add_action('wp_enqueue_scripts', 'yashin_script');


function yashin() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    // add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox');
    add_theme_support( 'wc-product-gallery-slider' );


    register_nav_menus([
        'menu-header' => 'меню в шапке',
        'menu-footer' => 'меню в подвале'
    ]);
}

add_action('after_setup_theme', 'yashin');


require_once get_template_directory() . '/inc/breadcrums.php';
require_once get_template_directory() . '/inc/custom-type.php';
require_once get_template_directory() . '/inc/woocommerce-hooks.php';



if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page(array(
        'page_title' 	=> 'Основные настройки',
        'menu_title'	=> 'Настройки шапки и подвала',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    )); 
}



// define ('DISALLOW_FILE_EDIT', true);
// add_action("admin_menu", "remove_menus");
// function remove_menus() {
  
//      remove_menu_page("plugins.php");              
   
// }



function debug($data) {
    echo '<pre>' . print_r($data, 1) .'</pre>';
}

