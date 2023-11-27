<?php get_header(); ?>

<?php
$blog = esc_url(home_url('/blog'));
?>

<!-- content -->
<div class="sub-blog sub-page-blog-layout">
  <div class="sub-blog__inner inner">
    <div class="sub-blog__date">
      <?php echo get_the_date('Y年n月'); ?>
    </div>
    <div class="sub-blog__body sub-blog__body--archive two-column-template">
      <!-- main -->
      <div class="two-column-template__main">
        <?php if (have_posts()) : ?>
          <div class="two-column-template__cards cards cards--2column">
            <?php while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="cards__item card">
                <picture class="card__image">
                  <?php if (get_the_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php endif; ?>
                </picture>
                <div class="card__body">
                  <time class="card__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m/d'); ?></time>
                  <h3 class="card__title"><?php the_title(); ?></h3>
                  <p class="card__text text">
                    <?php echo get_the_excerpt(); ?>
                  </p>
                </div>
              </a>
            <?php endwhile; ?>
          </div>
          <!-- pagenavi -->
          <div class="two-column-template__pagenavi wp-pagenavi">
            <?php if (function_exists('wp_pagenavi')) {
              wp_pagenavi();
            } ?>
          </div>
        <?php endif; ?>
      </div>
      <!-- sidebar -->
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>