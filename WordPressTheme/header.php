<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>CodeUps</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="robots" content="noindex">
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="icon" href="#" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/assets/css/style.css')); ?>" />
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="<?php echo esc_url(get_theme_file_uri('/assets/js/jquery.inview.min.js')); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script defer src="<?php echo esc_url(get_theme_file_uri('/assets/js/script.js')); ?>"></script>
  <?php wp_head(); ?>
</head>

<body>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="header__inner">
      <div class="header__box">
        <h1 class="header__logo logo">
          <a href="/">
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
              <a href="/page-campaign.html" class="pc-nav__link">
                <span class="pc-nav__title">Campaign</span>
                <span class="pc-nav__subtitle">キャンペーン</span>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="/page-about.html" class="pc-nav__link">
                <span class="pc-nav__title">About us</span>
                <span class="pc-nav__subtitle">私たちについて</span>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="/page-information.html" class="pc-nav__link">
                <span class="pc-nav__title">Information</span>
                <span class="pc-nav__subtitle">ダイビング情報</span>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="/home.html" class="pc-nav__link">
                <span class="pc-nav__title">Blog</span>
                <span class="pc-nav__subtitle">ブログ</span>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="/page-voice.html" class="pc-nav__link">
                <span class="pc-nav__title">Voice</span>
                <span class="pc-nav__subtitle">お客様の声</span>
              </a>
            </li>
            <li class="pc-nav__item pc-nav__item--white">
              <a href="/page-price.html" class="pc-nav__link">
                <span class="pc-nav__title">Price</span>
                <span class="pc-nav__subtitle">料金一覧</span>
              </a>
            </li>
            <li class="pc-nav__item pc-nav__item--white">
              <a href="/page-faq.html" class="pc-nav__link">
                <span class="pc-nav__title">FAQ</span>
                <span class="pc-nav__subtitle">よくある質問</span>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="/page-contact.html" class="pc-nav__link">
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
              <a href="/page-campaign.html">キャンペーン</a>
              <ul class="sp-nav__sub-items">
                <li class="sp-nav__sub-item"><a href="#">ライセンス取得</a></li>
                <li class="sp-nav__sub-item"><a href="#">貸切体験ダイビング</a></li>
                <li class="sp-nav__sub-item"><a href="#">ナイトダイビング</a></li>
              </ul>
            </li>
            <li class="sp-nav__item"><a href="/page-about.html">私たちについて</a></li>
            <li class="sp-nav__item">
              <a href="/page-information.html">ダイビング情報</a>
              <ul class="sp-nav__sub-items">
                <li class="sp-nav__sub-item"><a href="#">ライセンス講習</a></li>
                <li class="sp-nav__sub-item"><a href="#">体験ダイビング</a></li>
                <li class="sp-nav__sub-item"><a href="#">ファンダイビング</a></li>
              </ul>
            </li>
            <li class="sp-nav__item"><a href="/home.html">ブログ</a></li>
          </ul>
          <ul class="sp-nav__items">
            <li class="sp-nav__item"><a href="/page-voice.html">お客様の声</a></li>
            <li class="sp-nav__item">
              <a href="/page-price.html">料金一覧</a>
              <ul class="sp-nav__sub-items">
                <li class="sp-nav__sub-item"><a href="#">ライセンス講習</a></li>
                <li class="sp-nav__sub-item"><a href="#">体験ダイビング</a></li>
                <li class="sp-nav__sub-item"><a href="#">ファンダイビング</a></li>
              </ul>
            </li>
            <li class="sp-nav__item"><a href="/page-faq.html">よくある質問</a></li>
            <li class="sp-nav__item"><a href="/page-privacy-policy.html">プライバシー<br>ポリシー</a></li>
            <li class="sp-nav__item"><a href="/page-terms.html">利用規約</a></li>
            <li class="sp-nav__item"><a href="/page-contact.html">お問い合わせ</a></li>
            <li class="sp-nav__item"><a href="/page-sitemap.html">サイトマップ</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <!-- mainview -->
    <div class="mainview">
      <div class="mainview__slide swiper js-top-swiper">
        <div class="swiper-wrapper">
          <picture class="mainview__image swiper-slide">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview1.webp"
              media="(min-width: 768px)" type="image/webp">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview1.jpg"
              media="(min-width: 768px)">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview1-sp.webp"
              type="image/webp">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview1-sp.jpg"
              alt="茶色いウミガメが透き通ったエメラルドグリーンの海中で泳いでいる様子">
          </picture>
          <picture class="mainview__image swiper-slide">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview2.webp"
              media="(min-width: 768px)" type="image/webp">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview2.jpg"
              media="(min-width: 768px)">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview2-sp.webp"
              type="image/webp">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview2-sp.jpg"
              alt="日が差し込む海中で２人のダイバーとウミガメが向かい合って泳いでいる様子">
          </picture>
          <picture class="mainview__image swiper-slide">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview3.webp"
              media="(min-width: 768px)" type="image/webp">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview3.jpg"
              media="(min-width: 768px)">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview3-sp.webp"
              type="image/webp">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview3-sp.jpg"
              alt="晴れた空と島をバックに3台のフェリーが海上を進んでいる様子">
          </picture>
          <picture class="mainview__image swiper-slide">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview4.webp"
              media="(min-width: 768px)" type="image/webp">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview4.jpg"
              media="(min-width: 768px)">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview4-sp.webp"
              type="image/webp">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/mainview4-sp.jpg"
              alt="大きな雲が浮かぶ青空とエメラルドグリーンの海を見渡せる広大な砂浜">
          </picture>
        </div>
      </div>
      <div class="mainview__box">
        <p class="mainview__title">diving</p>
        <p class="mainview__subtitle">into the ocean</p>
      </div>
    </div>