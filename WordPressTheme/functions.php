<?php

/****************************
WordPress標準機能
 ****************************/
function my_setup()
{
  add_theme_support('post-thumbnails'); /* アイキャッチ */
  add_theme_support('automatic-feed-links'); /* RSSフィード */
  add_theme_support('title-tag'); /* タイトルタグ自動生成 */
  add_theme_support(
    'html5',
    array( /* HTML5のタグで出力 */
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');


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


/****************************
管理画面の「投稿」を「ブログ」に変更
 ****************************/
function Change_menulabel()
{
  global $menu;
  global $submenu;
  $name = 'ブログ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name . '一覧';
  $submenu['edit.php'][10][0] = '新しい' . $name;
}
function Change_objectlabel()
{
  global $wp_post_types;
  $name = 'ブログ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name . 'の新規追加';
  $labels->edit_item = $name . 'の編集';
  $labels->new_item = '新規' . $name;
  $labels->view_item = $name . 'を表示';
  $labels->search_items = $name . 'を検索';
  $labels->not_found = $name . 'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');

/****************************
抜粋の文字数変更
 ****************************/
function custom_excerpt_length($length)
{
  return 80;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);


/****************************
管理画面に「ギャラリー」「料金表」「お客様の声」を追加(SCF)
 ****************************/
SCF::add_options_page('ギャラリー', 'ギャラリー', 'manage_options', 'theme_options_gallery', 'dashicons-format-gallery', '9');
SCF::add_options_page('料金表', '料金表', 'manage_options', 'theme_options_price', 'dashicons-money-alt', '9');
SCF::add_options_page('よくある質問', 'よくある質問', 'manage_options', 'theme_options_faq', 'dashicons-microphone', '9');

/****************************
カスタム投稿タイプ(キャンペーン)：アーカイブページの表示件数変更
 ****************************/
function change_set_campaign($query)
{
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  if ($query->is_post_type_archive('campaign')) {
    $query->set('posts_per_page', '4');
    return;
  } elseif ($query->is_post_type_archive('voice')) {
    $query->set('posts_per_page', '6');
    return;
  }
}
add_action('pre_get_posts', 'change_set_campaign');
