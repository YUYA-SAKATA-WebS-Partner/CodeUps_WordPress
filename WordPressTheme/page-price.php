<?php get_header(); ?>

<!-- content -->
<div class="page-price sub-page-price-layout">
  <div class="page-price__inner inner">
    <div class="page-price__tables">
      <div class="page-price__table price-table">
        <div class="price-table__heading-box">
          <picture class="price-table__iamge">
            <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/whale_icon.webp" type="image/webp">
            <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/whale_icon.png" alt="クジラのアイコン">
          </picture>
          <h2 class="price-table__heading">ライセンス講習</h2>
        </div>
        <dl class="price-table__lists">
          <?php
          $licenses = SCF::get_option_meta('theme_options_price', 'price_license');
          foreach ($licenses as $license) {
            $license_course = esc_html($license['price_license_course']);
            $license_price = esc_html($license['price_license_price']);
            if ($license_course && $license_price) :
          ?>
              <dt class="price-table__title text"><?php echo $license_course; ?></dt>
              <dd class="price-table__price text"><?php echo "¥" . number_format($license_price, 0, '', ','); ?></dd>
          <?php endif;
          }; ?>
        </dl>
      </div>
      <div class="page-price__table price-table">
        <div class="price-table__heading-box">
          <picture class="price-table__iamge">
            <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/whale_icon.webp" type="image/webp">
            <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/whale_icon.png" alt="クジラのアイコン">
          </picture>
          <h2 class="price-table__heading">体験ダイビング</h2>
        </div>
        <dl class="price-table__lists">
          <?php
          $experiences = SCF::get_option_meta('theme_options_price', 'price_experience');
          foreach ($experiences as $experience) {
            $experience_course = esc_html($experience['price_experience_course']);
            $experience_price = esc_html($experience['price_experience_price']);
            if ($experience_course && $experience_price) :
          ?>
              <dt class="price-table__title text"><?php echo $experience_course; ?></dt>
              <dd class="price-table__price text"><?php echo "¥" . number_format($experience_price, 0, '', ','); ?></dd>
          <?php endif;
          }; ?>
        </dl>
      </div>
      <div class="page-price__table price-table">
        <div class="price-table__heading-box">
          <picture class="price-table__iamge">
            <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/whale_icon.webp" type="image/webp">
            <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/whale_icon.png" alt="クジラのアイコン">
          </picture>
          <h2 class="price-table__heading">ファンダイビング</h2>
        </div>
        <dl class="price-table__lists">
          <?php
          $funs = SCF::get_option_meta('theme_options_price', 'price_fun-diving');
          foreach ($funs as $fun) {
            $fun_course = esc_html($fun['price_fun-diving_course']);
            $fun_price = esc_html($fun['price_fun-diving_price']);
            if ($fun_course && $fun_price) :
          ?>
              <dt class="price-table__title text"><?php echo $fun_course; ?></dt>
              <dd class="price-table__price text"><?php echo "¥" . number_format($fun_price, 0, '', ','); ?></dd>
          <?php endif;
          }; ?>
        </dl>
      </div>
      <div class="page-price__table price-table">
        <div class="price-table__heading-box">
          <picture class="price-table__iamge">
            <source srcset="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/whale_icon.webp" type="image/webp">
            <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/whale_icon.png" alt="クジラのアイコン">
          </picture>
          <h2 class="price-table__heading">スペシャルダイビング</h2>
        </div>
        <dl class="price-table__lists">
          <?php
          $specials = SCF::get_option_meta('theme_options_price', 'price_special');
          foreach ($specials as $special) {
            $special_course = esc_html($special['price_special_course']);
            $special_price = esc_html($special['price_special_price']);
            if ($special_course && $special_price) :
          ?>

              <dt class="price-table__title text"><?php echo $special_course; ?></dt>
              <dd class="price-table__price text"><?php echo "¥" . number_format($special_price, 0, '', ','); ?></dd>
          <?php endif;
          }; ?>
        </dl>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>