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
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null);

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
the_archive_title 余計な文字を削除
 ****************************/
add_filter( 'get_the_archive_title', function ($title) {
  if (is_category()) {
      $title = single_cat_title('',false);
  } elseif (is_tag()) {
      $title = single_tag_title('',false);
} elseif (is_tax()) {
    $title = single_term_title('',false);
} elseif (is_post_type_archive() ){
  $title = post_type_archive_title('',false);
} elseif (is_year()) {
  $title = get_the_time('Y年');
} elseif (is_date()) {
    $title = get_the_time('Y年n月');
} else {

}
  return $title;
});

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

/****************************
人気の記事
 ****************************/
// 記事のPVを取得
function getPostViews($postID)
{
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count == '') {
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 View";
  }
  return $count . ' Views';
}

// 記事のPVをカウントする
function setPostViews($postID)
{
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count == '') {
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
  } else {
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

//クローラーのアクセス判別
function is_bot() {
  $ua = $_SERVER['HTTP_USER_AGENT'];
  $bot = array(
    "googlebot",
    "msnbot",
    "yahoo"
  );
  foreach( $bot as $bot ) {
    if (stripos( $ua, $bot ) !== false){
      return true;
    }
  }
  return false;
}

/****************************
記事詳細ページ　ナビゲーションにclass名追加
 ****************************/
//前の記事・次の記事のリンクにclassを付与する
function add_prev_post_link_class($output) {
  return str_replace('<a href=', '<a class="previouspostslink" href=', $output); //前の記事リンク
}
add_filter( 'previous_post_link', 'add_prev_post_link_class' );
function add_next_post_link_class($output) {
  return str_replace('<a href=', '<a class="nextpostslink" href=', $output); //次の記事リンク
}
add_filter( 'next_post_link', 'add_next_post_link_class' );

/****************************
カスタム投稿タイプのタイトル一覧をContact Form 7にドロップダウン形式で表示
 ****************************/
function dynamic_field_values ( $tag, $unused ) {
  if ( $tag['name'] != 'select-campaign' )  // Contact Form 7内に記入するフィールド名（独自のフォームタグ名）
      return $tag;
  $args = array (
      'posts_per_page' => -1, // 全件取得（制限が必要な場合は数値を指定）
      'post_type'      => 'campaign', // カスタム投稿タイプ名（投稿タイプスラッグ）
      'orderby'        => 'title', // タイトルでソート
      'order'          => 'ASC', // 昇順
  );
  $custom_posts = get_posts($args);
  if ( ! $custom_posts )
      return $tag;
  foreach ( $custom_posts as $custom_post ) {
      $tag['raw_values'][] = $custom_post->post_title;
      $tag['values'][] = $custom_post->post_title;
      $tag['labels'][] = $custom_post->post_title;
  }
  return $tag;
}
add_filter( 'wpcf7_form_tag', 'dynamic_field_values', 30, 2);

/****************************
Contact Form 7で自動挿入されるPタグ、brタグを削除
****************************/
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
};


/****************************
Contact Form 7（サンクスページに遷移）
****************************/
add_action('wp_footer', 'redirect_to_thanks_page');
function redirect_to_thanks_page() {
  $homeUrl = home_url();
  echo <<< EOD
    <script>
      document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = '{$homeUrl}/thanks/';
      }, false );
    </script>
  EOD;
}