<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>

<body>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="header__inner">
      <div class="header__box">
        <h1 class="header__logo logo">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/logo.svg" alt="CodeUps">
          </a>
        </h1>
        <!-- ハンバーガーメニュー -->
        <button class="header__hamburger hamburger js-hamburger u-mobile">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <!-- PCメニュー -->
        <nav class="header__nav pc-nav u-desktop">
          <ul class="pc-nav__items">
            <li class="pc-nav__item">
              <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="pc-nav__link">
                <span class="pc-nav__title">Campaign</span>
                <span class="pc-nav__subtitle">キャンペーン</span>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo esc_url(home_url('/about-us')); ?>" class="pc-nav__link">
                <span class="pc-nav__title">About us</span>
                <span class="pc-nav__subtitle">私たちについて</span>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo esc_url(home_url('/information')); ?>" class="pc-nav__link">
                <span class="pc-nav__title">Information</span>
                <span class="pc-nav__subtitle">ダイビング情報</span>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo esc_url(home_url('/blog')); ?>" class="pc-nav__link">
                <span class="pc-nav__title">Blog</span>
                <span class="pc-nav__subtitle">ブログ</span>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo esc_url(home_url('/voice')); ?>" class="pc-nav__link">
                <span class="pc-nav__title">Voice</span>
                <span class="pc-nav__subtitle">お客様の声</span>
              </a>
            </li>
            <li class="pc-nav__item pc-nav__item--white">
              <a href="<?php echo esc_url(home_url('/price')); ?>" class="pc-nav__link">
                <span class="pc-nav__title">Price</span>
                <span class="pc-nav__subtitle">料金一覧</span>
              </a>
            </li>
            <li class="pc-nav__item pc-nav__item--white">
              <a href="<?php echo esc_url(home_url('/faq')); ?>" class="pc-nav__link">
                <span class="pc-nav__title">FAQ</span>
                <span class="pc-nav__subtitle">よくある質問</span>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo esc_url(home_url('/contact')); ?>" class="pc-nav__link">
                <span class="pc-nav__title">Contact</span>
                <span class="pc-nav__subtitle">お問合せ</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- SPメニュー -->
    <nav class="header__drawer sp-nav js-drawer">
      <div class="sp-nav__inner">
        <div class="sp-nav__box">
          <ul class="sp-nav__items">
            <li class="sp-nav__item">
              <a href="<?php echo esc_url(home_url('/campaign')); ?>">キャンペーン</a>
              <ul class="sp-nav__sub-items">
                <li class="sp-nav__sub-item"><a href="#">ライセンス取得</a></li>
                <li class="sp-nav__sub-item"><a href="#">貸切体験ダイビング</a></li>
                <li class="sp-nav__sub-item"><a href="#">ナイトダイビング</a></li>
              </ul>
            </li>
            <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/about-us')); ?>">私たちについて</a></li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url(home_url('/information')); ?>">ダイビング情報</a>
              <ul class="sp-nav__sub-items">
                <li class="sp-nav__sub-item"><a href="#">ライセンス講習</a></li>
                <li class="sp-nav__sub-item"><a href="#">体験ダイビング</a></li>
                <li class="sp-nav__sub-item"><a href="#">ファンダイビング</a></li>
              </ul>
            </li>
            <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
          </ul>
          <ul class="sp-nav__items">
            <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/voice')); ?>">お客様の声</a></li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url(home_url('/price')); ?>">料金一覧</a>
              <ul class="sp-nav__sub-items">
                <li class="sp-nav__sub-item"><a href="#">ライセンス講習</a></li>
                <li class="sp-nav__sub-item"><a href="#">体験ダイビング</a></li>
                <li class="sp-nav__sub-item"><a href="#">ファンダイビング</a></li>
              </ul>
            </li>
            <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/faq')); ?>">よくある質問</a></li>
            <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">プライバシー<br>ポリシー</a>
            </li>
            <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/terms')); ?>">利用規約</a></li>
            <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
            <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/sitemap')); ?>">サイトマップ</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <?php if (is_front_page()) : ?>
      <!-- mainview -->
      <div class="mainview">
        <div class="mainview__slide swiper js-top-swiper">
          <div class="swiper-wrapper">
            <picture class="mainview__image swiper-slide">
              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview1.webp" media="(min-width: 768px)" type="image/webp">
              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview1.jpg" media="(min-width: 768px)">
              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview1-sp.webp" type="image/webp">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview1-sp.jpg" alt="茶色いウミガメが透き通ったエメラルドグリーンの海中で泳いでいる様子">
            </picture>
            <picture class="mainview__image swiper-slide">
              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview2.webp" media="(min-width: 768px)" type="image/webp">
              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview2.jpg" media="(min-width: 768px)">
              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview2-sp.webp" type="image/webp">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview2-sp.jpg" alt="日が差し込む海中で２人のダイバーとウミガメが向かい合って泳いでいる様子">
            </picture>
            <picture class="mainview__image swiper-slide">
              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview3.webp" media="(min-width: 768px)" type="image/webp">
              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview3.jpg" media="(min-width: 768px)">
              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview3-sp.webp" type="image/webp">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview3-sp.jpg" alt="晴れた空と島をバックに3台のフェリーが海上を進んでいる様子">
            </picture>
            <picture class="mainview__image swiper-slide">
              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview4.webp" media="(min-width: 768px)" type="image/webp">
              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview4.jpg" media="(min-width: 768px)">
              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview4-sp.webp" type="image/webp">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview4-sp.jpg" alt="大きな雲が浮かぶ青空とエメラルドグリーンの海を見渡せる広大な砂浜">
            </picture>
          </div>
        </div>
        <div class="mainview__box">
          <p class="mainview__title">diving</p>
          <p class="mainview__subtitle">into the ocean</p>
        </div>
      </div>
    <?php elseif (!(is_front_page() || is_404())) : ?>
      <div class="sub-mainview">
        <picture class="sub-mainview__image">
          <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/page-about_mv_pc.webp" media="(min-width:768px)" type="image/webp">
          <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/page-about_mv_pc.jpg" media="(min-width:768px)">
          <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/page-about_mv_sp.webp" type="image/webp">
          <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/page-about_mv_sp.jpg" alt="シーサーと青空">
        </picture>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="sub-mainview__box">
              <h1 class="sub-mainview__title"><?php the_title(); ?></h1>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <!-- sub-mainview -->
    <?php endif; ?>