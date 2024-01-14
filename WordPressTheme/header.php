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
$diving = esc_url(home_url('/campaign_category/fun-diving/'));
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
                <li class="sp-nav__sub-item"><a href="<?php echo $license; ?>">ライセンス取得</a></li>
                <li class="sp-nav__sub-item"><a href="<?php echo $experience; ?>">体験ダイビング</a></li>
                <li class="sp-nav__sub-item"><a href="<?php echo $diving; ?>">ファンダイビング</a></li>
              </ul>
            </li>
            <li class="sp-nav__item"><a href="<?php echo $about; ?>">私たちについて</a></li>
            <li class="sp-nav__item">
              <a href="<?php echo $information; ?>">ダイビング情報</a>
              <ul class="sp-nav__sub-items">
                <li class="sp-nav__sub-item"><a href="<?php echo $information; ?>#license">ライセンス講習</a></li>
                <li class="sp-nav__sub-item"><a href="<?php echo $information; ?>#experience">体験ダイビング</a></li>
                <li class="sp-nav__sub-item"><a href="<?php echo $information; ?>#fun-diving">ファンダイビング</a></li>
              </ul>
            </li>
            <li class="sp-nav__item"><a href="<?php echo $blog; ?>">ブログ</a></li>
          </ul>
          <ul class="sp-nav__items">
            <li class="sp-nav__item"><a href="<?php echo $voice; ?>">お客様の声</a></li>
            <li class="sp-nav__item">
              <a href="<?php echo $price; ?>">料金一覧</a>
              <ul class="sp-nav__sub-items">
                <li class="sp-nav__sub-item"><a href="<?php echo $price; ?>#price-license">ライセンス講習</a></li>
                <li class="sp-nav__sub-item"><a href="<?php echo $price; ?>#price-experience">体験ダイビング</a></li>
                <li class="sp-nav__sub-item"><a href="<?php echo $price; ?>#price-fun-diving">ファンダイビング</a></li>
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