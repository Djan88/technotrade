<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  <title><?php the_title(); ?></title>
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/img/smal_logo.png" media="(max-width: 768px)">
              <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="">
            </picture>
          </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <form role="search" class="navbar-form navbar-right" method="get" id="searchform" action="<?php bloginfo('siteurl'); ?>">
            <div id="search-input" class="form-group">
              <input id="search_text" placeholder="Что искать?" class="form-control" type="text" value="" name="s" id="s">
            </div>
            <div id="jx-search-submit">
              <button type="submit" class="btn btn-default"><img src="<?php bloginfo('template_url'); ?>/img/search-icon.png" alt=""></i></button>
              <!-- Submit Button -->  
            </div>
          </form>
          <?php 
            $menu = wp_nav_menu(array('menu' => 'Main Navigation', 'container' => false, menu_class => 'nav navbar-nav navbar-right' ));
            echo $menu;
          ?> 
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Header -->
