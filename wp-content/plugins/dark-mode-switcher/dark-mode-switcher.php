<?php
/**
 * Plugin Name: Dark Mode Switcher
 * Description: A simple WordPress plugin to toggle between light and dark modes.
 * Version: 1.0
 * Author: Kristian
 */
//fix the global dark mode
function dark_mode_switcher_enqueue_scripts() {
    wp_enqueue_script('jquery');

    wp_enqueue_script('dark-mode-switcher-script', plugin_dir_url(__FILE__) . 'dark-mode-switcher.js', array('jquery'), '1.0', true);

    wp_add_inline_script('dark-mode-switcher-script', 'var darkModeSwitcherParams = ' . json_encode(array(
        'ajaxurl'     => admin_url('admin-ajax.php'),
        'currentMode' => get_option('dark_mode', 'light')
    )) . ';');

    wp_enqueue_style('dark-mode-style', plugin_dir_url(__FILE__) . 'dark-mode.css', array(), '1.0');
}

add_action('wp_enqueue_scripts', 'dark_mode_switcher_enqueue_scripts');



function toggle_dark_mode() {
    $current_mode = get_option('dark_mode', 'light');
    $new_mode = ($current_mode === 'light') ? 'dark' : 'light';

    update_option('dark_mode', $new_mode);

    echo $new_mode;
    wp_die();
}

add_action('wp_ajax_toggle_dark_mode', 'toggle_dark_mode');
add_action('wp_ajax_nopriv_toggle_dark_mode', 'toggle_dark_mode');
