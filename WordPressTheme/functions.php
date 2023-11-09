<?php

function enqueue_custom_assets()
{
  // Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap');

  // CSS
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
  wp_enqueue_style('custom-style', get_theme_file_uri('/assets/css/style.css'), ['swiper-css'], '1.0');

  // JavaScript
  wp_enqueue_script('jquery-inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), ['jquery']);
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', ['jquery']);
  wp_enqueue_script('custom-script', get_theme_file_uri('/assets/js/script.js'), ['jquery', 'jquery-inview', 'swiper-js'], '1.0');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_assets');
