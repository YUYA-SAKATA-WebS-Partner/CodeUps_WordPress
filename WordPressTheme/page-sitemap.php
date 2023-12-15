<?php get_header(); ?>

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

<!-- content -->
<div class="page-sitemap sub-page-sitemap-layout">
  <div class="page-sitemap__inner inner">
    <nav class="page-sitemap__nav footer-nav footer-nav--wide">
      <div class="footer-nav__box footer-nav__box--wide">
        <ul class="footer-nav__items">
          <li class="footer-nav__item footer-nav__item--black">
            <a href="<?php echo $campaign; ?>">キャンペーン</a>
            <ul class="footer-nav__sub-items">
              <li class="footer-nav__sub-item footer-nav__sub-item--black"><a href="<?php echo $license; ?>">ライセンス取得</a>
              </li>
              <li class="footer-nav__sub-item footer-nav__sub-item--black"><a
                  href="<?php echo $experience; ?>">体験ダイビング</a></li>
              <li class="footer-nav__sub-item footer-nav__sub-item--black"><a href="<?php echo $diving; ?>">ファンダイビング</a>
              </li>
            </ul>
          </li>
          <li class="footer-nav__item footer-nav__item--black"><a href="<?php echo $about; ?>">私たちについて</a></li>
        </ul>
        <ul class="footer-nav__items">
          <li class="footer-nav__item footer-nav__item--black">
            <a href="<?php echo $information; ?>">ダイビング情報</a>
            <ul class="footer-nav__sub-items">
              <li class="footer-nav__sub-item footer-nav__sub-item--black"><a
                  href="<?php echo $information; ?>#license">ライセンス講習</a>
              </li>
              <li class="footer-nav__sub-item footer-nav__sub-item--black"><a
                  href="<?php echo $information; ?>#experience">体験ダイビング</a>
              </li>
              <li class="footer-nav__sub-item footer-nav__sub-item--black"><a
                  href="<?php echo $information; ?>#fun-diving">ファンダイビング</a>
              </li>
            </ul>
          </li>
          <li class="footer-nav__item footer-nav__item--black"><a href="<?php echo $blog; ?>">ブログ</a></li>
        </ul>
      </div>
      <div class="footer-nav__box footer-nav__box--wide">
        <ul class="footer-nav__items">
          <li class="footer-nav__item footer-nav__item--black"><a href="<?php echo $voice; ?>">お客様の声</a></li>
          <li class="footer-nav__item footer-nav__item--black">
            <a href="<?php echo $price; ?>">料金一覧</a>
            <ul class="footer-nav__sub-items">
              <li class="footer-nav__sub-item footer-nav__sub-item--black"><a
                  href="<?php echo $price; ?>#price-license">ライセンス講習</a></li>
              <li class="footer-nav__sub-item footer-nav__sub-item--black"><a
                  href="<?php echo $price; ?>#price-experience">体験ダイビング</a></li>
              <li class="footer-nav__sub-item footer-nav__sub-item--black"><a
                  href="<?php echo $price; ?>#price-fun-diving">ファンダイビング</a></li>
            </ul>
          </li>
        </ul>
        <ul class="footer-nav__items">
          <li class="footer-nav__item footer-nav__item--black"><a href="<?php echo $faq; ?>">よくある質問</a></li>
          <li class="footer-nav__item footer-nav__item--black"><a href="<?php echo $policy; ?>">プライバシー<br
                class="u-mobile">ポリシー</a></li>
          <li class="footer-nav__item footer-nav__item--black"><a href="<?php echo $terms; ?>">利用規約</a></li>
          <li class="footer-nav__item footer-nav__item--black"><a href="<?php echo $contact; ?>">お問い合わせ</a></li>
          <li class="footer-nav__item footer-nav__item--black"><a href="<?php echo $sitemap; ?>">サイトマップ</a></li>
        </ul>
      </div>
    </nav>
  </div>
</div>
<?php get_footer(); ?>