<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {
  register_nav_menus(
    array(
      'primary-menu' => _('Primary Menu')
    )
  );
}
add_action('init', 'register_theme_menus');

function rh_theme_styles() {

  wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');
  wp_enqueue_style('fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
  wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css?family=Cousine:400,700|Raleway:400,500');
  wp_enqueue_style('font', 'http://db.onlinewebfonts.com/c/1e6ec96c95301fa73aa1d026f161a269?family=MarzoW00-Regular');
  wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'rh_theme_styles');
?>
