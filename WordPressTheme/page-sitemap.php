<?php get_header(); ?>
<!-- breadcrumbs -->
<div class="breadcrumbs inner">TOP > サイトマップ</div>

<!-- content -->
<div class="page-sitemap sub-page-sitemap-layout">
  <div class="page-sitemap__inner inner">
    <nav class="page-sitemap__nav footer-nav footer-nav--wide">
      <div class="footer-nav__box footer-nav__box--wide">
        <ul class="footer-nav__items">
          <li class="footer-nav__item footer-nav__item--black">
            <a href="<?php echo esc_url(home_url('/campaign')); ?>">キャンペーン</a>
            <ul class="footer-nav__sub-items">
              <li class="footer-nav__sub-item footer-nav__sub-item--black"><a href="#">ライセンス取得</a></li>
              <li class="footer-nav__sub-item footer-nav__sub-item--black"><a href="#">貸切体験ダイビング</a></li>
              <li class="footer-nav__sub-item footer-nav__sub-item--black"><a href="#">ナイトダイビング</a></li>
            </ul>
          </li>
          <li class="footer-nav__item footer-nav__item--black"><a href="<?php echo esc_url(home_url('/about-us')); ?>">私たちについて</a></li>
        </ul>
        <ul class="footer-nav__items">
          <li class="footer-nav__item footer-nav__item--black">
            <a href="<?php echo esc_url(home_url('/information')); ?>">ダイビング情報</a>
            <ul class="footer-nav__sub-items">
              <li class="footer-nav__sub-item footer-nav__sub-item--black"><a href="#">ライセンス講習</a></li>
              <li class="footer-nav__sub-item footer-nav__sub-item--black"><a href="#">体験ダイビング</a></li>
              <li class="footer-nav__sub-item footer-nav__sub-item--black"><a href="#">ファンダイビング</a></li>
            </ul>
          </li>
          <li class="footer-nav__item footer-nav__item--black"><a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
        </ul>
      </div>
      <div class="footer-nav__box footer-nav__box--wide">
        <ul class="footer-nav__items">
          <li class="footer-nav__item footer-nav__item--black"><a href="<?php echo esc_url(home_url('/voice')); ?>">お客様の声</a></li>
          <li class="footer-nav__item footer-nav__item--black">
            <a href="<?php echo esc_url(home_url('/price')); ?>">料金一覧</a>
            <ul class="footer-nav__sub-items">
              <li class="footer-nav__sub-item footer-nav__sub-item--black"><a href="#">ライセンス講習</a></li>
              <li class="footer-nav__sub-item footer-nav__sub-item--black"><a href="#">体験ダイビング</a></li>
              <li class="footer-nav__sub-item footer-nav__sub-item--black"><a href="#">ファンダイビング</a></li>
            </ul>
          </li>
        </ul>
        <ul class="footer-nav__items">
          <li class="footer-nav__item footer-nav__item--black"><a href="<?php echo esc_url(home_url('/faq')); ?>">よくある質問</a></li>
          <li class="footer-nav__item footer-nav__item--black"><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">プライバシー<br class="u-mobile">ポリシー</a></li>
          <li class="footer-nav__item footer-nav__item--black"><a href="<?php echo esc_url(home_url('/terms')); ?>">利用規約</a></li>
          <li class="footer-nav__item footer-nav__item--black"><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
          <li class="footer-nav__item footer-nav__item--black"><a href="<?php echo esc_url(home_url('/sitemap')); ?>">サイトマップ</a></li>
        </ul>
      </div>
    </nav>
  </div>
</div>
<?php get_footer(); ?>