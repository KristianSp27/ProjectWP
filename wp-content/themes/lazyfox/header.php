<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">


</head>

<body>
  <header id="home" class="gradient-violat">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
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

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav  navbar-right">
            <li class="active"><a href="<?php echo home_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="#blog-card">Blog</a></li>
            <li>
              <button id="dark-mode-toggle" class="btn btn-orange border-none btn-rounded-corner btn-navbar">Toggle Dark Mode</button>

            </li>
            <li>

            </li>
          </ul>
        </div>
        <hr class="navbar-divider">

        <?php
        if (has_nav_menu('header-menu')) {
          wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'menu_class'     => 'nav navbar-nav navbar-right',
            'container'      => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'   => 'bs-example-navbar-collapse-1',
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s<li><a href="' . esc_url(get_permalink(get_page_by_title('All Posts'))) . '">Blog</a></li></ul>',
          ));
        }
        ?>


      </div>
    </nav>





  </header>