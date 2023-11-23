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

<?php if (!(is_page(['contact', 'contact/thanks']) || is_404())) : ?>
  <!-- contact -->
  <section class="contact sub-contact-layout">
    <div class="contact__inner inner">
      <div class="contact__body contact-banner">
        <div class="contact-banner__access access">
          <div class="access__logo">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/logo-green.png" alt="CodeUps">
          </div>
          <div class="access__body">
            <div class="access__box">
              <p class="access__text">沖縄県那覇市1-1</p>
              <p class="access__text">TEL:0120-000-0000</p>
              <p class="access__text">営業時間:8:30-19:00</p>
              <p class="access__text">定休日:毎週火曜日</p>
            </div>
            <div class="access__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9517.353159012291!2d127.67425690889368!3d26.23380587573383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56bd2da6906ad%3A0x91b298aa63dcb532!2z44CSOTAwLTAwMDIg5rKW57iE55yM6YKj6KaH5biC5puZ77yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1693257610667!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="contact-banner__contact">
          <div class="contact-banner__title">
            <span class="contact-banner__main-title">Contact</span>
            <h2 class="contact-banner__sub-title">お問い合わせ</h2>
          </div>
          <p class="contact-banner__text">ご予約・お問い合わせはコチラ</p>
          <div class="contact-banner__button">
            <a href="<?php echo $contact; ?>" class="button"><span>Contact us</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<!-- 上へボタン -->
<div class="page-top js-page-top"></div>

</main>
<?php if (is_404()) : ?>
  <footer class="footer footer-layout footer-layout--nomargin">
  <?php else : ?>
    <footer class="footer footer-layout">
    <?php endif; ?>
    <div class="footer__inner inner">
      <div class="footer__header">
        <h2 class="footer__logo">
          <a href="#">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/logo.svg" alt="CodeUps">
          </a>
        </h2>
        <div class="footer__icons">
          <div class="footer__icon">
            <a href="#">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/facebook.png" alt="Facebook">
            </a>
          </div>
          <div class="footer__icon">
            <a href="#">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/instagram.png" alt="Instagram">
            </a>
          </div>
        </div>
      </div>
      <nav class="footer__nav footer-nav">
        <div class="footer-nav__box">
          <ul class="footer-nav__items">
            <li class="footer-nav__item">
              <a href="<?php echo $campaign; ?>"><span>キャンペーン</span></a>
              <ul class="footer-nav__sub-items">
                <li class="footer-nav__sub-item"><a href="#">ライセンス取得</a></li>
                <li class="footer-nav__sub-item"><a href="#">貸切体験ダイビング</a></li>
                <li class="footer-nav__sub-item"><a href="#">ナイトダイビング</a></li>
              </ul>
            </li>
            <li class="footer-nav__item"><a href="<?php echo $about; ?>"><span>私たちについて</span></a>
            </li>
          </ul>
          <ul class="footer-nav__items">
            <li class="footer-nav__item">
              <a href="<?php echo $information; ?>"><span>ダイビング情報</span></a>
              <ul class="footer-nav__sub-items">
                <li class="footer-nav__sub-item"><a href="#">ライセンス講習</a></li>
                <li class="footer-nav__sub-item"><a href="#">体験ダイビング</a></li>
                <li class="footer-nav__sub-item"><a href="#">ファンダイビング</a></li>
              </ul>
            </li>
            <li class="footer-nav__item"><a href="<?php echo $blog; ?>"><span>ブログ</span></a></li>
          </ul>
        </div>
        <div class="footer-nav__box">
          <ul class="footer-nav__items">
            <li class="footer-nav__item"><a href="<?php echo $voice; ?>"><span>お客様の声</span></a>
            </li>
            <li class="footer-nav__item">
              <a href="<?php echo $price; ?>"><span>料金一覧</span></a>
              <ul class="footer-nav__sub-items">
                <li class="footer-nav__sub-item"><a href="#">ライセンス講習</a></li>
                <li class="footer-nav__sub-item"><a href="#">体験ダイビング</a></li>
                <li class="footer-nav__sub-item"><a href="#">ファンダイビング</a></li>
              </ul>
            </li>
          </ul>
          <ul class="footer-nav__items">
            <li class="footer-nav__item"><a href="<?php echo $faq; ?>"><span>よくある質問</span></a></li>
            <li class="footer-nav__item"><a href="<?php echo $policy; ?>"><span>プライバシー<br class="u-mobile">ポリシー</span></a></li>
            <li class="footer-nav__item"><a href="<?php echo $terms; ?>"><span>利用規約</span></a></li>
            <li class="footer-nav__item"><a href="<?php echo $contact; ?>"><span>お問い合わせ</span></a>
            </li>
            <li class="footer-nav__item"><a href="<?php echo $sitemap; ?>"><span>サイトマップ</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="footer__copyright">
      <span>Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.</span>
    </div>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>