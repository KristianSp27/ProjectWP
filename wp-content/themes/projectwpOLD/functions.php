<?php

function revolve_enqueue_assets() {
    $theme_dir_assets_url = get_template_directory_uri() . '/projectwpOLD/';

    wp_enqueue_style('bootstrap-min-js'. $theme_dir_assets_url . 'http://localhost/ProjectWP/wp-content/themes/projectwpOLD/plugins/bootstrap/css/bootstrap.min.css');
    // <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

	// <!-- THEME CSS
	// ================================================== -->
	// <!-- Bootstrap -->
	// <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	// <!-- Themify -->
	// <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
	// <link rel="stylesheet" href="plugins/slick-carousel/slick-theme.css">
	// <link rel="stylesheet" href="plugins/slick-carousel/slick.css">
	// <!-- Slick Carousel -->
	// <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.min.css">
	// <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.default.min.css">
	// <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
	// <!-- manin stylesheet -->
	// <link rel="stylesheet" href="css/style.css">
}
add_action('wp_enqueue_scripts', 'revolve_enqueue_assets');