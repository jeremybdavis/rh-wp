<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <header>

      <img src="http://robynharrismusic.com/wp-content/themes/robynharris/img/logo-large.png" alt="" />

      <nav>
        <?php
          $defaults = array(
            'container' => false,
            'theme_location' => 'primary-menu',
            'menu_class' => 'no-bullet'
          );
          wp_nav_menu($defaults);
        ?>

      </nav>

    </header>
