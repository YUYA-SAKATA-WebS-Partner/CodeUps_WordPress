<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>

<?php
$home = esc_url(home_url('/'));
$campaign = esc_url(home_url('/campaign'));
$license = esc_url(home_url('/campaign_category/license/'));
$experience = esc_url(home_url('/campaign_category/experience/'));
$diving = esc_url(home_url('/campaign_category/diving/'));
$about = esc_url(home_url('/about-us'));
$information = esc_url(home_url('/information'));
$blog = esc_url(home_url('/blog'));
$voice = esc_url(home_url('/voice'));
$price = esc_url(home_url('/price'));
$faq = esc_url(home_url('/faq'));
$contact = esc_url(home_url('/contact'));
$policy = esc_url(home_url('/privacy-policy'));
$terms = esc_url(home_url('/terms-of-service'));
$sitemap = esc_url(home_url('/sitemap'));
?>

<body>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="header__inner">
      <div class="header__box">
        <h1 class="header__logo logo">
          <a href="<?php echo $home; ?>">
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
              <a href="<?php echo $campaign; ?>" class="pc-nav__link">
                <span class="pc-nav__title">Campaign</span>
                <span class="pc-nav__subtitle">キャンペーン</span>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $about; ?>" class="pc-nav__link">
                <span class="pc-nav__title">About us</span>
                <span class="pc-nav__subtitle">私たちについて</span>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $information; ?>" class="pc-nav__link">
                <span class="pc-nav__title">Information</span>
                <span class="pc-nav__subtitle">ダイビング情報</span>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $blog; ?>" class="pc-nav__link">
                <span class="pc-nav__title">Blog</span>
                <span class="pc-nav__subtitle">ブログ</span>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $voice; ?>" class="pc-nav__link">
                <span class="pc-nav__title">Voice</span>
                <span class="pc-nav__subtitle">お客様の声</span>
              </a>
            </li>
            <li class="pc-nav__item pc-nav__item--white">
              <a href="<?php echo $price; ?>" class="pc-nav__link">
                <span class="pc-nav__title">Price</span>
                <span class="pc-nav__subtitle">料金一覧</span>
              </a>
            </li>
            <li class="pc-nav__item pc-nav__item--white">
              <a href="<?php echo $faq; ?>" class="pc-nav__link">
                <span class="pc-nav__title">FAQ</span>
                <span class="pc-nav__subtitle">よくある質問</span>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="<?php echo $contact; ?>" class="pc-nav__link">
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
              <a href="<?php echo $campaign; ?>">キャンペーン</a>
              <ul class="sp-nav__sub-items">
                <li class="sp-nav__sub-item"><a href="#">ライセンス取得</a></li>
                <li class="sp-nav__sub-item"><a href="#">貸切体験ダイビング</a></li>
                <li class="sp-nav__sub-item"><a href="#">ナイトダイビング</a></li>
              </ul>
            </li>
            <li class="sp-nav__item"><a href="<?php echo $about; ?>">私たちについて</a></li>
            <li class="sp-nav__item">
              <a href="<?php echo $information; ?>">ダイビング情報</a>
              <ul class="sp-nav__sub-items">
                <li class="sp-nav__sub-item"><a href="#">ライセンス講習</a></li>
                <li class="sp-nav__sub-item"><a href="#">体験ダイビング</a></li>
                <li class="sp-nav__sub-item"><a href="#">ファンダイビング</a></li>
              </ul>
            </li>
            <li class="sp-nav__item"><a href="<?php echo $blog; ?>">ブログ</a></li>
          </ul>
          <ul class="sp-nav__items">
            <li class="sp-nav__item"><a href="<?php echo $voice; ?>">お客様の声</a></li>
            <li class="sp-nav__item">
              <a href="<?php echo $price; ?>">料金一覧</a>
              <ul class="sp-nav__sub-items">
                <li class="sp-nav__sub-item"><a href="#">ライセンス講習</a></li>
                <li class="sp-nav__sub-item"><a href="#">体験ダイビング</a></li>
                <li class="sp-nav__sub-item"><a href="#">ファンダイビング</a></li>
              </ul>
            </li>
            <li class="sp-nav__item"><a href="<?php echo $faq; ?>">よくある質問</a></li>
            <li class="sp-nav__item"><a href="<?php echo $policy; ?>">プライバシー<br>ポリシー</a>
            </li>
            <li class="sp-nav__item"><a href="<?php echo $terms; ?>">利用規約</a></li>
            <li class="sp-nav__item"><a href="<?php echo $contact; ?>">お問い合わせ</a></li>
            <li class="sp-nav__item"><a href="<?php echo $sitemap; ?>">サイトマップ</a></li>
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
    <?php elseif (is_post_type_archive('voice') || is_tax('voice_category')) : ?>
    <div class="sub-mainview">
      <picture class="sub-mainview__image">
        <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/page-voice_mv_pc.jpg"
          media="(min-width: 768px)">
        <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/page-voice_mv_sp.jpg" alt="">
      </picture>
      <div class="sub-mainview__box">
        <h1 class="sub-mainview__title">Voice</h1>
      </div>
    </div>
    <?php elseif (is_post_type_archive('campaign') || is_tax('campaign_category')) : ?>
    <div class="sub-mainview">
      <picture class="sub-mainview__image">
        <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/page-campaign_mv_pc.webp"
          media="(min-width: 768px)">
        <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/page-campaign_mv_sp.webp" alt="">
      </picture>
      <div class="sub-mainview__box">
        <h1 class="sub-mainview__title">Campaign</h1>
      </div>
    </div>
    <?php elseif (is_home() || is_single() || is_date()) : ?>
    <div class="sub-mainview">
      <picture class="sub-mainview__image">
        <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/home_mv_pc.webp"
          media="(min-width: 768px)">
        <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/home_mv_sp.webp" alt="">
      </picture>
      <div class="sub-mainview__box">
        <h1 class="sub-mainview__title">Blog</h1>
      </div>
    </div>
    <?php elseif (is_page('about-us')) : ?>
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
    <?php elseif (is_page('information')) : ?>
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
    <?php elseif (is_page('price')) : ?>
    <div class="sub-mainview">
      <picture class="sub-mainview__image">
        <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-price_mv_pc.webp"
          media="(min-width: 768px)" type="image/webp">
        <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-price_mv_pc.jpg"
          media="(min-width: 768px)">
        <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-price_mv_sp.webp"
          type="image/webp">
        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/page-price_mv_sp.jpg" alt="">
      </picture>
      <div class="sub-mainview__box">
        <h1 class="sub-mainview__title">Price</h1>
      </div>
    </div>
    <?php elseif (is_page('faq')) : ?>
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
    <?php elseif (is_page('contact') || is_page('thanks')) : ?>
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
    <?php elseif (!(is_front_page() || is_404())) : ?>
    <div class="sub-mainview">
      <picture class="sub-mainview__image">
        <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/page-about_mv_pc.webp"
          media="(min-width:768px)" type="image/webp">
        <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/page-about_mv_pc.jpg"
          media="(min-width:768px)">
        <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/page-about_mv_sp.webp"
          type="image/webp">
        <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/page-about_mv_sp.jpg"
          alt="シーサーと青空">
      </picture>
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="sub-mainview__box">
        <h1 class="sub-mainview__title"><?php the_title(); ?></h1>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <?php endif; ?>
    <!-- breadcrumbs -->
    <?php if (!is_front_page()) : ?>
    <div class="breadcrumbs inner" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
    </div>
    <?php endif; ?>