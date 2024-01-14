<?php get_header(); ?>

<main>
  <div class="sub-mainview">
    <picture class="sub-mainview__image">
      <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-contact_mv_pc.webp"
        media="(min-width: 768px)" type="image/webp">
      <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-contact_mv_pc.jpg"
        media="(min-width: 768px)">
      <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-contact_mv_sp.webp"
        type="image/webp">
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-contact_mv_sp.jpg"
        alt="広い砂浜と波打ち際の風景">
    </picture>
    <div class="sub-mainview__box">
      <h1 class="sub-mainview__title">Contact</h1>
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
  <div class="page-contact sub-page-contact-layout">
    <div class="page-contact__inner inner">
      <div class="page-contact__error">
        <p class="page-contact__error-text"></p>
      </div>
      <?php echo do_shortcode('[contact-form-7 id="1702681" title="お問い合わせ"]'); ?>
    </div>
  </div>
  <?php get_footer(); ?>