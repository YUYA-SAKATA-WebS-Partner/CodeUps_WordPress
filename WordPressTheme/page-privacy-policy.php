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
      <h1 class="sub-mainview__title">Privacy Policy</h1>
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


  <div class="page-privacy-policy sub-page-privacy-policy-layout">
    <div class="page-privacy-policy__inner inner">
      <div class="page-privacy-policy__body">
        <h2 class="page-privacy-policy__title">プライバシーポリシー</h2>
        <div class="page-privacy-policy__contents">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>