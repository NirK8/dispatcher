<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <?php wp_head(); ?>
</head>
<body>
  <header>
      <a href="/dispatcher">
        <img class="logo" src="<?php echo get_template_directory_uri() . "/images/logo.png" ?>"/>
      </a>

      <div class="search-container">
        <span class="search-icon-container"><?php get_template_part('partials/icon', 'null', array('search.png', 'search-icon'))?></span>
        <input id="search" placeholder="Search">
        <?php get_template_part('partials/select', null, array(array(array('Everything', 'everything'), array('Top Headlines', 'top headlines')), false, false, true)) ?>
      </div>
      
      <div class="header-options">
        <?php
          get_template_part('partials/icon', null, array('settings.png'));
          get_template_part('partials/icon', null, array('notifications.png'));
        ?>
        <span class="user-avatar"><span>NK</span><span>
      </div>
  </header>