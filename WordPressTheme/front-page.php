<?php get_header(); ?>

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
      <div class="swiper-wrapper">
        <div class="campaign__panel panel swiper-slide">
          <picture class="panel__image">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign1.webp" type="image/webp">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign1.jpg" alt="多数のカラフルな魚が泳いでいる様子">
          </picture>
          <div class="panel__body">
            <span class="panel__category category-tag">ライセンス講習</span>
            <h3 class="panel__title">ライセンス取得</h3>
            <div class="panel__box">
              <p class="panel__sub-title">全部コミコミ(お一人様)</p>
              <div class="panel__price-box">
                <p class="panel__price">¥56,000</p>
                <p class="panel__discount">¥46,000</p>
              </div>
            </div>
          </div>
        </div>
        <div class="campaign__panel panel swiper-slide">
          <picture class="panel__image">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign2.webp" type="image/webp">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign2.jpg" alt="浜辺から見える島や船の景色">
          </picture>
          <div class="panel__body">
            <span class="panel__category category-tag">体験ダイビング</span>
            <h3 class="panel__title">貸切体験ダイビング</h3>
            <div class="panel__box">
              <p class="panel__sub-title">全部コミコミ(お一人様)</p>
              <div class="panel__price-box">
                <p class="panel__price">¥24,000</p>
                <p class="panel__discount">¥18,000</p>
              </div>
            </div>
          </div>
        </div>
        <div class="campaign__panel panel swiper-slide">
          <picture class="panel__image">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign3.webp" type="image/webp">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign3.jpg" alt="暗い水中で無数の小さなクラゲがライトアップされている様子">
          </picture>
          <div class="panel__body">
            <span class="panel__category category-tag">体験ダイビング</span>
            <h3 class="panel__title">ナイトダイビング</h3>
            <div class="panel__box">
              <p class="panel__sub-title">全部コミコミ(お一人様)</p>
              <div class="panel__price-box">
                <p class="panel__price">¥10,000</p>
                <p class="panel__discount">¥8,000</p>
              </div>
            </div>
          </div>
        </div>
        <div class="campaign__panel panel swiper-slide">
          <picture class="panel__image">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign4.webp" type="image/webp">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign4.jpg" alt="海面から4人のダイバーが顔を出している様子">
          </picture>
          <div class="panel__body">
            <span class="panel__category category-tag">ファンダイビング</span>
            <h3 class="panel__title">貸切ファンダイビング</h3>
            <div class="panel__box">
              <p class="panel__sub-title">全部コミコミ(お一人様)</p>
              <div class="panel__price-box">
                <p class="panel__price">¥20,000</p>
                <p class="panel__discount">¥16,000</p>
              </div>
            </div>
          </div>
        </div>
        <div class="campaign__panel swiper-slide">
          <div class="panel">
            <picture class="panel__image">
              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign1.webp" type="image/webp">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign1.jpg" alt="多数のカラフルな魚が泳いでいる様子">
            </picture>
            <div class="panel__body">
              <span class="panel__category category-tag">ライセンス講習</span>
              <h3 class="panel__title">ライセンス取得</h3>
              <div class="panel__box">
                <p class="panel__sub-title">全部コミコミ(お一人様)</p>
                <div class="panel__price-box">
                  <p class="panel__price">¥56,000</p>
                  <p class="panel__discount">¥46,000</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="campaign__panel swiper-slide">
          <div class="panel">
            <picture class="panel__image">
              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign2.webp" type="image/webp">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign2.jpg" alt="浜辺から見える島や船の景色">
            </picture>
            <div class="panel__body">
              <span class="panel__category category-tag">体験ダイビング</span>
              <h3 class="panel__title">貸切体験ダイビング</h3>
              <div class="panel__box">
                <p class="panel__sub-title">全部コミコミ(お一人様)</p>
                <div class="panel__price-box">
                  <p class="panel__price">¥24,000</p>
                  <p class="panel__discount">¥18,000</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="campaign__panel swiper-slide">
          <div class="panel">
            <picture class="panel__image">
              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign3.webp" type="image/webp">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign3.jpg" alt="暗い水中で無数の小さなクラゲがライトアップされている様子">
            </picture>
            <div class="panel__body">
              <span class="panel__category category-tag">体験ダイビング</span>
              <h3 class="panel__title">ナイトダイビング</h3>
              <div class="panel__box">
                <p class="panel__sub-title">全部コミコミ(お一人様)</p>
                <div class="panel__price-box">
                  <p class="panel__price">¥10,000</p>
                  <p class="panel__discount">¥8,000</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="campaign__panel panel swiper-slide">
          <picture class="panel__image">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign4.webp" type="image/webp">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/campaign4.jpg" alt="海面から4人のダイバーが顔を出している様子">
          </picture>
          <div class="panel__body">
            <span class="panel__category category-tag">ファンダイビング</span>
            <h3 class="panel__title">貸切ファンダイビング</h3>
            <div class="panel__box">
              <p class="panel__sub-title">全部コミコミ(お一人様)</p>
              <div class="panel__price-box">
                <p class="panel__price">¥20,000</p>
                <p class="panel__discount">¥16,000</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="campaign__button">
      <a href="#" class="button"><span>View more</span></a>
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
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about2.webp" media="(min-width: 768px)" type="image/webp">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about2.jpg" media="(min-width: 768px)">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about2-sp.webp" type="image/webp">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about2-sp.jpg" alt="瓦葺きの屋根に乗っているシーサーと青い空">
        </picture>
        <picture class="about__wide-image">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about.webp" media="(min-width: 768px)" type="image/webp">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about.jpg" media="(min-width: 768px)">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about-sp.webp" type="image/webp">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about-sp.jpg" alt="海中で２匹の黄色い魚が向かい合っている様子">
        </picture>
      </div>
      <div class="about__body">
        <h3 class="about__heading">Dive into <br class="u-mobile">the Ocean</h3>
        <div class="about__box">
          <p class="about__text text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </p>
          <div class="about__button">
            <a href="#" class="button"><span>View more</span></a>
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
        <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/information.webp" type="image/webp">
        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/information.jpg" alt="珊瑚の群生の近くで多様な魚たちが泳いでいる様子">
      </picture>
      <div class="information__box">
        <h3 class="information__heading">ライセンス講習</h3>
        <p class="information__text text">
          当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
        <div class="information__button">
          <a href="#" class="button"><span>View more</span></a>
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
    <div class="blog__cards cards">
      <a href="#" class="cards__item card">
        <picture class="card__image">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/blog-card.webp" type="image/webp">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/blog-card.jpg" alt="赤い珊瑚に無数のイソギンチャクがついている様子">
        </picture>
        <div class="card__body">
          <time class="card__date" datetime="2023-11-17">2023.11/17</time>
          <h3 class="card__title">ライセンス取得</h3>
          <p class="card__text text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
        </div>
      </a>
      <a href="#" class="cards__item card">
        <picture class="card__image">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/blog-card2.webp" type="image/webp">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/blog-card2.jpg" alt="陽がさす海中をウミガメが泳いでいる様子">
        </picture>
        <div class="card__body">
          <time class="card__date" datetime="2023-11-17">2023.11/17</time>
          <h3 class="card__title">ウミガメと泳ぐ</h3>
          <p class="card__text text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
        </div>
      </a>
      <a href="#" class="cards__item card">
        <picture class="card__image">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/blog-card3.webp" type="image/webp">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/blog-card3.jpg" alt="カクレクマノミがイソギンチャクの間から顔を覗かせている様子">
        </picture>
        <div class="card__body">
          <time class="card__date" datetime="2023-11-17">2023.11/17</time>
          <h3 class="card__title">カクレクマノミ</h3>
          <p class="card__text text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
        </div>
      </a>
    </div>
    <div class="blog__button">
      <a href="#" class="button"><span>View more</span></a>
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
    <div class="voice__cards text-cards">
      <a href="#" class="text-cards__item text-card">
        <div class="text-card__header">
          <div class="text-card__box">
            <div class="text-card__meta">
              <div class="text-card__age">20代(女性)</div>
              <span class="text-card__category category-tag">ライセンス講習</span>
            </div>
            <h3 class="text-card__title">ここにタイトルが入ります。ここにタイトル</h3>
          </div>
          <picture class="text-card__image colorbox js-colorbox">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/voice1.webp" type="image/webp">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/voice1.jpg" alt="麦わら帽子をかぶった笑顔の女性">
          </picture>
        </div>
        <div class="text-card__body">
          <p class="text-card__text text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </div>
      </a>
      <a href="#" class="text-cards__item text-card">
        <div class="text-card__header">
          <div class="text-card__box">
            <div class="text-card__meta">
              <div class="text-card__age">20代(男性)</div>
              <span class="text-card__category category-tag">ファンダイビング</span>
            </div>
            <h3 class="text-card__title">ここにタイトルが入ります。ここにタイトル</h3>
          </div>
          <picture class="text-card__image colorbox js-colorbox">
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/voice2.webp" type="image/webp">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/voice2.jpg" alt="サムズアップしている男性">
          </picture>
        </div>
        <div class="text-card__body">
          <p class="text-card__text text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </div>
      </a>
    </div>
    <div class="voice__button">
      <a href="#" class="button"><span>View more</span></a>
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
        <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/price.webp" media="(min-width:768px)" type="image/webp">
        <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/price.jpg" media="(min-width:768px)">
        <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/price-sp.webp" type="image/webp">
        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/price-sp.jpg" alt="海中をウミガメが泳いでいる様子">
      </picture>
      <div class="price__box">
        <div class="price__list price-list">
          <h3 class="price-list__title">ライセンス講習</h3>
          <dl class="price-list__items">
            <div class="price-list__item">
              <dt class="price-list__item-title">オープンウォーターダイバーコース</dt>
              <dd class="price-list__price">¥50,000</dd>
            </div>
            <div class="price-list__item">
              <dt class="price-list__item-title">アドバンスドオープンウォーターコース</dt>
              <dd class="price-list__price">¥60,000</dd>
            </div>
            <div class="price-list__item">
              <dt class="price-list__item-title">レスキュー＋EFRコース</dt>
              <dd class="price-list__price">¥70,000</dd>
            </div>
          </dl>
        </div>
        <div class="price__list price-list">
          <h3 class="price-list__title">体験ダイビング</h3>
          <dl class="price-list__items">
            <div class="price-list__item">
              <dt class="price-list__item-title">ビーチ体験ダイビング(半日)</dt>
              <dd class="price-list__price">¥7,000</dd>
            </div>
            <div class="price-list__item">
              <dt class="price-list__item-title">ビーチ体験ダイビング(1日)</dt>
              <dd class="price-list__price">¥14,000</dd>
            </div>
            <div class="price-list__item">
              <dt class="price-list__item-title">ボート体験ダイビング(半日)</dt>
              <dd class="price-list__price">¥10,000</dd>
            </div>
            <div class="price-list__item">
              <dt class="price-list__item-title">ボート体験ダイビング(1日)</dt>
              <dd class="price-list__price">¥18,000</dd>
            </div>
          </dl>
        </div>
        <div class="price__list price-list">
          <h3 class="price-list__title">ファンダイビング</h3>
          <dl class="price-list__items">
            <div class="price-list__item">
              <dt class="price-list__item-title">ビーチダイビング(2ダイブ)</dt>
              <dd class="price-list__price">¥14,000</dd>
            </div>
            <div class="price-list__item">
              <dt class="price-list__item-title">ボートダイビング(2ダイブ)</dt>
              <dd class="price-list__price">¥18,000</dd>
            </div>
            <div class="price-list__item">
              <dt class="price-list__item-title">スペシャルダイビング(2ダイブ)</dt>
              <dd class="price-list__price">¥24,000</dd>
            </div>
            <div class="price-list__item">
              <dt class="price-list__item-title">ナイトダイビング(1ダイブ)</dt>
              <dd class="price-list__price">¥10,000</dd>
            </div>
          </dl>
        </div>
        <div class="price__list price-list">
          <h3 class="price-list__title">スペシャルダイビング</h3>
          <dl class="price-list__items">
            <div class="price-list__item">
              <dt class="price-list__item-title">貸切ダイビング(2ダイブ)</dt>
              <dd class="price-list__price">¥24,000</dd>
            </div>
            <div class="price-list__item">
              <dt class="price-list__item-title">1日ダイビング(3ダイブ)</dt>
              <dd class="price-list__price">¥32,000</dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
    <div class="price__button">
      <a href="#" class="price__link button"><span>View more</span></a>
    </div>
  </div>
</section>

<?php get_footer(); ?>