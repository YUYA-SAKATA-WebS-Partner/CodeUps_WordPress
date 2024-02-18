<?php get_header(); ?>

<main>
  <div class="sub-mainview">
    <picture class="sub-mainview__image">
      <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-about_mv_pc.webp"
        media="(min-width: 768px)" type="image/webp">
      <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-about_mv_pc.jpg"
        media="(min-width: 768px)">
      <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-about_mv_sp.webp"
        type="image/webp">
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-about_mv_sp.jpg" alt="シーサーと青空">
    </picture>
    <div class="sub-mainview__box">
      <h1 class="sub-mainview__title">About us</h1>
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

  <!-- contents -->
  <div class="page-about sub-page-about-layout">
    <div class="page-about__inner inner">
      <div class="page-about__container">
        <div class="page-about__images">
          <picture class="page-about__thin-image u-desktop">
            <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/about2.webp"
              media="(min-width: 768px)" type="image/webp">
            <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/about2.jpg"
              media="(min-width: 768px)">
            <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/about2-sp.webp"
              type="image/webp">
            <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/about2-sp.jpg"
              alt="瓦葺きの屋根に乗っているシーサーと青い空">
          </picture>
          <picture class="page-about__wide-image">
            <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/about.webp"
              media="(min-width: 768px)" type="image/webp">
            <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/about.jpg"
              media="(min-width: 768px)">
            <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/about-sp.webp"
              type="image/webp">
            <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/about-sp.jpg"
              alt="海中で２匹の黄色い魚が向かい合っている様子">
          </picture>
        </div>
        <div class="page-about__body">
          <h3 class="page-about__heading">Dive into <br class="u-mobile">the Ocean</h3>
          <div class="page-about__box">
            <p class="page-about__text text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- gallery -->
  <div class="gallery about-gallery-layout">
    <div class="gallery__inner inner">
      <div class="gallery__title section-title">
        <span class="section-title__main">Gallery</span>
        <h2 class="section-title__sub">フォト</h2>
      </div>
      <div class="gallery__body">
        <?php
      $galleryImages = SCF::get_option_meta('theme_options_gallery', 'about_gallery');
      foreach ($galleryImages as $galleryImage):
        $imageUrl = wp_get_attachment_image_src($galleryImage['gallery'], 'large');
        $alt = esc_html($galleryImage['alt-text']);
        if ($imageUrl) :
      ?>
        <picture class="gallery__image js-modal-trigger">
          <img src="<?php echo $imageUrl[0]; ?>" alt="<?php echo $alt; ?>">
        </picture>
        <?php else: ?>
        <p class="text">現在準備中です。</p>
        <?php
        endif;
      endforeach;
      ?>
      </div>
    </div>
  </div>

  <!-- modal -->
  <div class="modal js-modal">
    <div class="modal__content">
      <div class="modal__image modal__image--thin js-modal-image">
        <img src="" alt="">
      </div>
    </div>
  </div>
  <?php get_footer(); ?>