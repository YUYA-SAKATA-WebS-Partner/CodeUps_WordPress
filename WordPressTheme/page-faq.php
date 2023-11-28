<?php get_header(); ?>

<!-- content -->
<div class="page-faq sub-page-faq-layout">
  <div class="page-faq__inner inner">
    <div class="page-faq__accordions">
      <?php
        $faqs = SCF::get_option_meta('theme_options_faq', 'faq');
        foreach ($faqs as $faq) {
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
      };
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>