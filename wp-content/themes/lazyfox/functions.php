<?php


if(! defined('LAZYFOX_ASSETS_VERSION')) {
    define('LAZYFOX_ASSETS_VERSION', '1.0');
}

if ( ! defined( 'LAZYFOX_ASSETS_URL' ) ) {
    define( 'LAZYFOX_ASSETS_URL', get_template_directory_uri() );
}

add_theme_support('title-tag');
/**
 * Function that enqueue all of our assets
 *
 * @return void
 */

function lazyfox_enqueue_assets() {


    $theme_dir_assets_url = get_template_directory_uri();
    
    //Theme styles
    wp_enqueue_style('bootstrap', LAZYFOX_ASSETS_URL . '/css/bootstrap.min.css', array(), LAZYFOX_ASSETS_VERSION);
    wp_enqueue_style('ionicons', LAZYFOX_ASSETS_URL . '/css/ionicons.min.css', array(), LAZYFOX_ASSETS_VERSION);
    wp_enqueue_style('owl-carousel', LAZYFOX_ASSETS_URL . '/css/owl.carousel.css', array(), LAZYFOX_ASSETS_VERSION);
    wp_enqueue_style('owl-theme', LAZYFOX_ASSETS_URL . '/css/owl.theme.css', array(), LAZYFOX_ASSETS_VERSION);
    wp_enqueue_style('style', LAZYFOX_ASSETS_URL . '/css/style.css', array(), LAZYFOX_ASSETS_VERSION);

    //Theme scripts
    wp_enqueue_script('bootstrap.min', LAZYFOX_ASSETS_URL . '/js/bootstrap.min.js', array('jquery'), LAZYFOX_ASSETS_VERSION, array());
    wp_enqueue_script('owl.carousel', LAZYFOX_ASSETS_URL . '/js/owl.carousel.min.js', array('jquery'), LAZYFOX_ASSETS_VERSION, array());
    wp_enqueue_script('script', LAZYFOX_ASSETS_URL . '/js/script.js', array('jquery'), LAZYFOX_ASSETS_VERSION, array());

    // <script src="js/bootstrap.min.js"></script>
    // <script src="js/owl.carousel.min.js"></script>
    // <script src="js/script.js"></script>
}
add_action('wp_enqueue_scripts', 'lazyfox_enqueue_assets');

function lazyfox_register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
      )
    );
  }
  add_action( 'init', 'lazyfox_register_my_menus' );