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
        <?php if (have_posts()) : ?>
        <article class="page-article__article article">
          <?php while (have_posts()) : the_post(); ?>
          <div class="article__header">
            <div class="article__meta">
              <time class="article__date"
                datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m/d'); ?></time>
            </div>
            <h2 class="article__title"><?php the_title();?></h2>
          </div>
          <div class="article__body">
            <picture class="article__image">
              <?php if(get_the_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title();?>のアイキャッチ画像">
              <?php endif; ?>
            </picture>
            <?php the_content(); ?>
          </div>
          <?php endwhile; ?>
        </article>
        <?php endif; ?>
        <!-- pagenavi -->
        <div class="page-article__pagenavi wp-pagenavi wp-pagenavi--arrow">
          <?php if (get_previous_post()):?>
          <?php previous_post_link('%link', ''); ?>
          <?php endif; ?>

          <?php if (get_next_post()):?>
          <?php next_post_link('%link', ''); ?>
          <?php endif; ?>
        </div>
      </div>
      <!-- sidebar -->
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>