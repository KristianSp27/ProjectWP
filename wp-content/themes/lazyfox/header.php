<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head(); ?>
    <!-- Required meta tags always come first -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge"> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    
  </head>
  <body>
    <header id="home" class="gradient-violat">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo home_url(); ?>"><span class="logo-wraper logo-white">
                <img src="<?php echo LAZYFOX_ASSETS_URL; ?>/images/Logo.png" alt="">lazy fox
              </span></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav  navbar-right">
              <li class="active"><a href="#home">Home <span class="sr-only">(current)</span></a></li>
              <li><a href="#blog-card">About</a></li>
              <li><a href="#introduction">Intro</a></li>
              <li><a href="#feature">Product</a></li>
              <li><a href="#newsletter">Contact</a></li>
              <li><a href="#" class="btn btn-orange border-none btn-rounded-corner btn-navbar">Download<span class="icon-on-button"><i class="ion-ios-cloud-download-outline"></i></span></a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
          <hr class="navbar-divider">
        </div><!-- /.container-fluid -->
        <?php
        wp_nav_menu(  $args = array(
	'menu'				=> "bs-example-navbar-collapse-1", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
	'menu_class'		=> "nav navbar-nav  navbar-right", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
	'menu_id'			=> "bs-example-navbar-collapse-1", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
	'container'			=> "container", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
	'container_class'	=> "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
	'container_id'		=> "", // (string) The ID that is applied to the container.
	'fallback_cb'		=> "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
	'before'			=> "", // (string) Text before the link markup.
	'after'				=> "", // (string) Text after the link markup.
	'link_before'		=> "", // (string) Text before the link text.
	'link_after'		=> "", // (string) Text after the link text.
	'echo'				=> "", // (bool) Whether to echo the menu or return it. Default true.
	'depth'				=> "", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
	'walker'			=> "", // (object) Instance of a custom walker class.
	'theme_location'	=> "header_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
	'items_wrap'		=> "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
	'item_spacing'		=> "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
) );
        ?>
      </nav>
    </header>