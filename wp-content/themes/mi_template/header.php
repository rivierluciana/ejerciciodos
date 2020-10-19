<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.1.1">
  <meta property="og:url" content="http://localhost:8080/" />
  <meta property="og:title" content="Mi nuevo sitio" />
  <meta property="og:type" content="capacitacion" />
  <meta property="og:image" content="/wp-content/uploads/2020/10/550x550_B8C.jpg" />
  <title><?php wp_title(); ?></title>

  <link rel="canonical" href="<?php bloginfo('url'); ?>">
  
  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="" crossorigin="anonymous">

  <!-- Favicons -->
  <meta name="theme-color" content="#563d7c">
  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <a class="text-muted" href="#">Subscribe</a>
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="<?php bloginfo('url'); ?>">Blog</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <?php echo get_search_form(); ?>
        </div>
      </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
    <?php
      $menuParameters = array(
        'mi_template' => 'navegation',
        'menu' => 'mi-menu',
        'container' => 'div',
        'container_class' => 'navbar-nav',
        'menu_class' => 'navbar-nav',
        'items_wrap' => '%3$s',
        'depth' => 0,
      );
      echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
    ?>
    </div>