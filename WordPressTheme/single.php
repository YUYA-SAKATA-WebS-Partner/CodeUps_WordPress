<?php get_header(); ?>
<?php
// 記事のビュー数を更新(ログイン中・クローラーは除外)
if (!is_user_logged_in() && !is_robots()) {
  setPostViews(get_the_ID());
}
?>
<!-- content -->
<div class="page-article single-layout">
  <div class="page-article__inner inner">
    <div class="page-article__body">
      <!-- main -->
      <div class="page-article__main">
        <!-- article -->
        <article class="page-article__article article">
          <div class="article__header">
            <div class="article__meta">
              <time class="article__date" datetime="2023-11-17">2023.11/17</time>
            </div>
            <h2 class="article__title">ライセンス取得</h2>
          </div>
          <div class="article__body">
            <picture class="article__image">
              <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/article-image-pc.webp"
                media="(min-width:768px)" type="image/webp">
              <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/article-image-pc.jpg"
                media="(min-width:768px)">
              <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/blog-card.webp"
                type="image/webp">
              <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/blog-card.jpg"
                alt="赤い珊瑚に無数のイソギンチャクがついている様子">
            </picture>
            <p>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/article-image-pc.webp"
                media="(min-width:768px)" type="image/webp">
              <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/article-image-pc.jpg"
                media="(min-width:768px)">
              <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/blog-card.webp"
                type="image/webp">
              <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/blog-card.jpg"
                alt="赤い珊瑚に無数のイソギンチャクがついている様子">
            </picture>
            <p>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
            <ul>
              <li>リスト１</li>
              <li>リスト２</li>
              <li>リスト３</li>
            </ul>
            <p>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </div>
        </article>
        <!-- pagenavi -->
        <div class="page-article__pagenavi wp-pagenavi wp-pagenavi--arrow">
          <a class="previouspostslink" rel="prev" href="#"><span></span></a>
          <a class="nextpostslink" rel="next" href="#"><span></span></a>
        </div>
      </div>
      <!-- sidebar -->
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>