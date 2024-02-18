<?php get_header(); ?>

<main>
  <div class="sub-mainview">
    <picture class="sub-mainview__image">
      <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-sitemap_mv_pc.webp"
        media="(min-width: 768px)" type="image/webp">
      <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-sitemap_mv_pc.jpg"
        media="(min-width: 768px)">
      <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-sitemap_mv_sp.webp"
        type="image/webp">
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-sitemap_mv_sp.jpg"
        alt="広い砂浜と波打ち際の風景">
    </picture>
    <div class="sub-mainview__box">
      <h1 class="sub-mainview__title">Terms of Service</h1>
    </div>
  </div>

  <!-- breadcrumbs -->
  <?php if (!(is_front_page() || is_404())) : ?>
  <div class="breadcrumbs inner" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
  </div>
  <?php endif; ?>

  <!-- content -->
  <div class="page-terms sub-page-terms-layout">
    <div class="page-terms__inner inner">
      <div class="page-terms__body">
        <h2 class="page-terms__title">利用規約</h2>
        <?php if (have_posts()) : ?>
        <div class="page-terms__contents">
          <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; ?>
          <?php else: ?>
          <p class="text">現在準備中です。</p>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>