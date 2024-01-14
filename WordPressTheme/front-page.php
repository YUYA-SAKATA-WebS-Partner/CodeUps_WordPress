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

<main>
  <div class="mainview">
    <div class="mainview__slide swiper js-top-swiper">
      <div class="swiper-wrapper">
        <?php
            $image_pc = get_field('mainview-slider_pc');
            $image_sp = get_field('mainview-slider_sp');
            $image_text = get_field('image_alt');
          ?>
        <picture class="mainview__image swiper-slide">
          <source srcset="<?php echo $image_pc['slider-image1_pc']; ?>" media="(min-width: 768px)">
          <img src="<?php echo $image_sp['slider-image1_sp']; ?>" alt="<?php echo $image_text['image_alt_1']; ?>">
        </picture>
        <picture class="mainview__image swiper-slide">
          <source srcset="<?php echo $image_pc['slider-image2_pc']; ?>" media="(min-width: 768px)">
          <img src="<?php echo $image_sp['slider-image2_sp']; ?>" alt="<?php echo $image_text['image_alt_2']; ?>">
        </picture>
        <picture class="mainview__image swiper-slide">
          <source srcset="<?php echo $image_pc['slider-image3_pc']; ?>" media="(min-width: 768px)">
          <img src="<?php echo $image_sp['slider-image3_sp']; ?>" alt="<?php echo $image_text['image_alt_3']; ?>">
        </picture>
        <picture class="mainview__image swiper-slide">
          <source srcset="<?php echo $image_pc['slider-image4_pc']; ?>" media="(min-width: 768px)">
          <img src="<?php echo $image_sp['slider-image4_sp']; ?>" alt="<?php echo $image_text['image_alt_4']; ?>">
        </picture>
      </div>
    </div>
    <div class="mainview__box">
      <p class="mainview__title">diving</p>
      <p class="mainview__subtitle">into the ocean</p>
    </div>
  </div>

  <!-- campaign -->
  <section class="campaign top-campaign-layout">
    <div class="campaign__inner inner">
      <div class="campaign__title section-title">
        <span class="section-title__main">Campaign</span>
        <h2 class="section-title__sub">キャンペーン</h2>
      </div>
      <div class="campaign__arrows">
        <div class="swiper-button-prev campaign__arrow-prev"></div>
        <div class="swiper-button-next campaign__arrow-next"></div>
      </div>
      <div class="campaign__panels swiper js-top-campaign-swiper">
        <?php
      $args = [
        'post_type' => 'campaign',
        'posts_per_page' => 8
      ];
      $the_query = new WP_Query($args);
      ?>
        <?php if ($the_query->have_posts()) : ?>
        <div class="swiper-wrapper">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="campaign__panel panel swiper-slide">
            <?php if (has_post_thumbnail()) : ?>
            <picture class="panel__image">
              <?php the_post_thumbnail(); ?>
            </picture>
            <?php else : ?>
            <picture class="panel__image">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/noimage.jpg')); ?>">
            </picture>
            <?php endif; ?>
            <div class="panel__body">
              <span class="panel__category category-tag">
                <?php
                  $terms = get_the_terms($post->ID, 'campaign_category');
                  foreach ($terms as $term) {
                    echo $term->name;
                  };
                  ?>
              </span>
              <h3 class="panel__title"><?php the_title(); ?></h3>
              <div class="panel__box">
                <p class="panel__sub-title">全部コミコミ(お一人様)</p>
                <div class="panel__price-box">
                  <?php
                    $campaignPrice = get_field('campaign_price');
                    ?>
                  <p class="panel__price">
                    <?php echo "¥" . number_format($campaignPrice['regular_price'], 0, '', ','); ?>
                  </p>
                  <p class="panel__discount">
                    <?php echo "¥".number_format($campaignPrice['discount_price'], 0, '', ','); ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <div class="campaign__button">
        <a href="<?php echo $campaign; ?>" class="button"><span>View more</span></a>
      </div>
    </div>
  </section>

  <!-- about us -->
  <section class="about top-about-layout">
    <div class="about__inner inner">
      <div class="about__title section-title">
        <span class="section-title__main">About us</span>
        <h2 class="section-title__sub">私たちについて</h2>
      </div>
      <div class="about__container">
        <div class="about__images">
          <picture class="about__thin-image">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about2.webp"
              media="(min-width: 768px)" type="image/webp">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about2.jpg"
              media="(min-width: 768px)">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about2-sp.webp"
              type="image/webp">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about2-sp.jpg"
              alt="瓦葺きの屋根に乗っているシーサーと青い空">
          </picture>
          <picture class="about__wide-image">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about.webp"
              media="(min-width: 768px)" type="image/webp">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about.jpg"
              media="(min-width: 768px)">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about-sp.webp"
              type="image/webp">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about-sp.jpg"
              alt="海中で２匹の黄色い魚が向かい合っている様子">
          </picture>
        </div>
        <div class="about__body">
          <h3 class="about__heading">Dive into <br class="u-mobile">the Ocean</h3>
          <div class="about__box">
            <p class="about__text text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
            <div class="about__button">
              <a href="<?php echo $about; ?>" class="button"><span>View more</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- information -->
  <section class="information top-information-layout">
    <div class="information__inner inner">
      <div class="information__title section-title">
        <span class="section-title__main">Information</span>
        <h2 class="section-title__sub">ダイビング情報</h2>
      </div>
      <div class="information__body">
        <picture class="information__image colorbox js-colorbox">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/information.webp"
            type="image/webp">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/information.jpg"
            alt="珊瑚の群生の近くで多様な魚たちが泳いでいる様子">
        </picture>
        <div class="information__box">
          <h3 class="information__heading">ライセンス講習</h3>
          <p class="information__text text">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
          <div class="information__button">
            <a href="<?php echo $information; ?>" class="button"><span>View more</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- blog -->
  <section class="blog top-blog-layout">
    <div class="blog__inner inner">
      <div class="blog__title section-title">
        <span class="section-title__main section-title__main--white">Blog</span>
        <h2 class="section-title__sub section-title__sub--white">ブログ</h2>
      </div>
      <?php
    $args = [
      'post_type' => 'post',
      'posts_per_page' => 3
    ];
    $the_query = new WP_Query($args);
    ?>
      <?php if ($the_query->have_posts()) : ?>
      <div class="blog__cards cards">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="cards__item card">
          <picture class="card__image">
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
            <?php else : ?>
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/noimage.jpg')); ?>">
            <?php endif; ?>
          </picture>
          <div class="card__body">
            <time class="card__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
            <h3 class="card__title"><?php the_title(); ?></h3>
            <p class="card__text text"><?php echo get_the_excerpt(); ?></p>
          </div>
        </a>
        <?php endwhile; ?>
      </div>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
      <div class="blog__button">
        <a href="<?php echo $blog; ?>" class="button"><span>View more</span></a>
      </div>
    </div>
  </section>

  <!-- voice -->
  <section class="voice top-voice-layout">
    <div class="voice__inner inner">
      <div class="voice__title section-title">
        <span class="section-title__main">Voice</span>
        <h2 class="section-title__sub">お客様の声</h2>
      </div>
      <?php
    $args = [
      'post_type' => 'voice',
      'posts_per_page' => 2
    ];
    $the_query = new WP_Query($args);
    ?>
      <?php if ($the_query->have_posts()) : ?>
      <div class="voice__cards text-cards">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="text-cards__item text-card">
          <div class="text-card__header">
            <div class="text-card__box">
              <div class="text-card__meta">
                <?php
                  $voiceInfo = get_field('voice_info');
                  ?>
                <div class="text-card__age">
                  <?php echo $voiceInfo['voice_age'] . "(" . $voiceInfo['voice_gender'] . ")"; ?></div>
                <span class="text-card__category category-tag">
                  <?php
                  $terms = get_the_terms($post->ID, 'voice_category');
                  foreach ($terms as $term) {
                    echo $term->name;
                  };
                  ?>
                </span>
              </div>
              <h3 class="text-card__title"><?php the_title(); ?></h3>
            </div>
            <picture class="text-card__image colorbox js-colorbox">
              <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
              <?php else : ?>
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/noimage.jpg')); ?>">
              <?php endif; ?>
            </picture>
          </div>
          <div class="text-card__body">
            <p class="text-card__text text">
              <?php
            $voice_text = get_field('voice_text');
            if(mb_strlen($voice_text) > 169){
              echo mb_substr($voice_text,0,169,"UTF-8") . "...";
            }
            else {
              echo $voice_text;
            }
            ?>
            </p>
          </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <?php endif; ?>
      <div class="voice__button">
        <a href="<?php echo $voice; ?>" class="button"><span>View more</span></a>
      </div>
    </div>
  </section>

  <!-- price -->
  <section class="price top-price-layout">
    <div class="price__inner inner">
      <div class="price__title section-title">
        <span class="section-title__main">Price</span>
        <h2 class="section-title__sub">料金一覧</h2>
      </div>
      <div class="price__body">
        <picture class="price__image colorbox js-colorbox">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/price.webp"
            media="(min-width:768px)" type="image/webp">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/price.jpg"
            media="(min-width:768px)">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/price-sp.webp"
            type="image/webp">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/price-sp.jpg"
            alt="海中をウミガメが泳いでいる様子">
        </picture>
        <div class="price__box">
          <div class="price__list price-list">
            <h3 class="price-list__title">ライセンス講習</h3>
            <dl class="price-list__items">
              <?php
            $licenses = SCF::get_option_meta('theme_options_price', 'price_license');
            foreach ($licenses as $license) {
              $license_course = esc_html($license['price_license_course']);
              $license_price = esc_html($license['price_license_price']);
              if ($license_course && $license_price) :
            ?>
              <div class="price-list__item">
                <dt class="price-list__item-title"><?php echo $license_course; ?></dt>
                <dd class="price-list__price"><?php echo "¥" . number_format($license_price, 0, '', ','); ?></dd>
              </div>
              <?php endif;
            }; ?>
            </dl>
          </div>
          <div class="price__list price-list">
            <h3 class="price-list__title">体験ダイビング</h3>
            <dl class="price-list__items">
              <?php
            $experiences = SCF::get_option_meta('theme_options_price', 'price_experience');
            foreach ($experiences as $experience) {
              $experience_course = esc_html($experience['price_experience_course']);
              $experience_price = esc_html($experience['price_experience_price']);
              if ($experience_course && $experience_price) :
            ?>
              <div class="price-list__item">
                <dt class="price-list__item-title"><?php echo $experience_course; ?></dt>
                <dd class="price-list__price"><?php echo "¥" . number_format($experience_price, 0, '', ','); ?></dd>
              </div>
              <?php endif;
            }; ?>
            </dl>
          </div>
          <div class="price__list price-list">
            <h3 class="price-list__title">ファンダイビング</h3>
            <dl class="price-list__items">
              <?php
            $funs = SCF::get_option_meta('theme_options_price', 'price_fun-diving');
            foreach ($funs as $fun) {
              $fun_course = esc_html($fun['price_fun-diving_course']);
              $fun_price = esc_html($fun['price_fun-diving_price']);
              if ($fun_course && $fun_price) :
            ?>
              <div class="price-list__item">
                <dt class="price-list__item-title"><?php echo $fun_course; ?></dt>
                <dd class="price-list__price"><?php echo "¥" . number_format($fun_price, 0, '', ','); ?></dd>
              </div>
              <?php endif;
            }; ?>
            </dl>
          </div>
          <div class="price__list price-list">
            <h3 class="price-list__title">スペシャルダイビング</h3>
            <dl class="price-list__items">
              <?php
            $specials = SCF::get_option_meta('theme_options_price', 'price_special');
            foreach ($specials as $special) {
              $special_course = esc_html($special['price_special_course']);
              $special_price = esc_html($special['price_special_price']);
              if ($special_course && $special_price) :
            ?>
              <div class="price-list__item">
                <dt class="price-list__item-title"><?php echo $special_course; ?></dt>
                <dd class="price-list__price"><?php echo "¥" . number_format($special_price, 0, '', ','); ?></dd>
              </div>
              <?php endif;
            }; ?>
            </dl>
          </div>
        </div>
      </div>
      <div class="price__button">
        <a href="<?php echo $price; ?>" class="price__link button"><span>View more</span></a>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>