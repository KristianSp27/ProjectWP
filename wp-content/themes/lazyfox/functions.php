<?php


if(! defined('LAZYFOX_ASSETS_VERSION')) {
    define('LAZYFOX_ASSETS_VERSION', '1.0');
}
/**
 * Function that enqueue all of our assets
 *
 * @return void
 */

function lazyfox_enqueue_assets() {


    $theme_dir_assets_url = get_template_directory_uri();
    
    wp_enqueue_style('bootstrap', $theme_dir_assets_url . '/css/bootstrap.min.css', array(), LAZYFOX_ASSETS_VERSION);
    
    // <link rel="stylesheet" href="css/bootstrap.min.css">
    // <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    // <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    // <link rel="stylesheet" href="css/ionicons.min.css">
    // <link rel="stylesheet" href="css/owl.carousel.css">
    // <link rel="stylesheet" href="css/owl.theme.css">
    // <link rel="stylesheet" href="css/style.css">
}
add_action('wp_enqueue_scripts', 'lazyfox_enqueue_assets');