<?php get_header(); ?>

<main>
  <div class="sub-mainview">
    <picture class="sub-mainview__image">
      <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-faq_mv_pc.webp"
        media="(min-width: 768px)" type="image/webp">
      <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-faq_mv_pc.jpg"
        media="(min-width: 768px)">
      <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-faq_mv_sp.webp"
        type="image/webp">
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-faq_mv_sp.jpg"
        alt="広い砂浜と波打ち際の風景">
    </picture>
    <div class="sub-mainview__box">
      <h1 class="sub-mainview__title">FAQ</h1>
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
  <div class="page-faq sub-page-faq-layout">
    <div class="page-faq__inner inner">
      <div class="page-faq__accordions">
        <?php
        $faqs = SCF::get_option_meta('theme_options_faq', 'faq');
        foreach ($faqs as $faq):
          $faq_question = esc_html($faq['faq_question']);
          $faq_answer = esc_html($faq['faq_answer']);
          if ($faq_question && $faq_answer) :
      ?>
        <div class="page-faq__accordion accordion">
          <div class="accordion__header js-accordion-header stay">
            <h2 class="accordion__title"><?php echo $faq_question; ?></h2>
            <button class="accordion__button">
              <span></span>
              <span></span>
            </button>
          </div>
          <div class="accordion__body stay">
            <p class="accordion__text text">
              <?php echo $faq_answer; ?>
            </p>
          </div>
        </div>
        <?php endif;
        endforeach;
      ?>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>