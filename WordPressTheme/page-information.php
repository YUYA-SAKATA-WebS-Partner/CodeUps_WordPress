<?php get_header(); ?>

<main>
  <div class="sub-mainview">
    <picture class="sub-mainview__image">
      <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-diving_mv_pc.webp"
        media="(min-width: 768px)" type="image/webp">
      <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-diving_mv_pc.jpg"
        media="(min-width: 768px)">
      <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-diving_mv_sp.webp"
        type="image/webp">
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-diving_mv_sp.jpg" alt="">
    </picture>
    <div class="sub-mainview__box">
      <h1 class="sub-mainview__title">Information</h1>
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


  <!-- page-information -->
  <div class="page-information sub-page-information-layout">
    <div class="page-information__inner inner">
      <ul class="page-information__tab icon-tab">
        <li class="icon-tab__tab js-information-tab current" data-tab="license" id="license">
          <button class="icon-tab__button">ライセンス<br class="u-mobile">講習</button>
        </li>
        <li class="icon-tab__tab js-information-tab" data-tab="fun-diving" id="fun-diving">
          <button class="icon-tab__button">ファン<br class="u-mobile">ダイビング</button>
        </li>
        <li class="icon-tab__tab js-information-tab" data-tab="experience" id="experience">
          <button class="icon-tab__button">体験<br class="u-mobile">ダイビング</button>
        </li>
      </ul>
      <ul class="page-information__cards">
        <li class="page-information__card information-card js-information-card current" data-tab="license">
          <div class="information-card__inner">
            <div class="information-card__body">
              <div class="information-card__content">
                <h2 class="information-card__title">ライセンス講習</h2>
                <div class="information-card__text text">
                  泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                </div>
              </div>
              <picture class="information-card__image">
                <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/diving-info1.webp"
                  type="image/webp">
                <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/diving-info1.jpg"
                  alt="5人のダイバーが海面を泳いでいる様子">
              </picture>
            </div>
          </div>
        </li>
        <li class="page-information__card information-card js-information-card" data-tab="fun-diving">
          <div class="information-card__inner">
            <div class="information-card__body">
              <div class="information-card__content">
                <h2 class="information-card__title">ファンダイビング</h2>
                <div class="information-card__text text">
                  ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                </div>
              </div>
              <picture class="information-card__image">
                <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/diving-info2.webp"
                  type="image/webp">
                <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/diving-info2.jpg"
                  alt="小さな魚の群れが泳いでいる様子">
              </picture>
            </div>
          </div>
        </li>
        <li class="page-information__card information-card js-information-card" data-tab="experience">
          <div class="information-card__inner">
            <div class="information-card__body">
              <div class="information-card__content">
                <h2 class="information-card__title">体験ダイビング</h2>
                <div class="information-card__text text">
                  ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                </div>
              </div>
              <picture class="information-card__image">
                <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/diving-info3.webp"
                  type="image/webp">
                <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/diving-info3.jpg"
                  alt="5人のダイバーが海面を泳いでいる様子">
              </picture>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <?php get_footer(); ?>