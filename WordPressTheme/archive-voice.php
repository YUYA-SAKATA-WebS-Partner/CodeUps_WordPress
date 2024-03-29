<?php get_header(); ?>

<?php $voice = esc_url(home_url('/voice')); ?>

<main>
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

  <!-- breadcrumbs -->
  <?php if (!(is_front_page() || is_404())) : ?>
  <div class="breadcrumbs inner" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
  </div>
  <?php endif; ?>

  <div class="page-voice sub-page-voice-layout">
    <div class="page-voice__inner inner">
      <div class="page-voice__tab tab">
        <div class="tab__inner">
          <ul class="tab__items">
            <div class="tab__box">
              <li class="tab__item tab__item--large is-active">
                <a href="<?php echo $voice; ?>" class="is-active">all</a>
              </li>
              <?php
            $args = [
              'taxonomy' => 'voice_category',
              'orderby' => 'description',
              'hide_empty' => false
            ];
            $terms = get_terms($args);
            if (!empty($terms) && !is_wp_error($terms)) :
              foreach ($terms as $term) :
            ?>
              <li class="tab__item">
                <a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a>
              </li>
              <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </ul>
        </div>
      </div>
      <div class="page-voice__body">
        <?php if (have_posts()) : ?>
        <div class="text-cards">
          <?php while (have_posts()) : the_post(); ?>
          <div class="text-cards__item text-card">
            <div class="text-card__header">
              <div class="text-card__box">
                <div class="text-card__meta">
                  <?php
                    $voiceInfo = get_field('voice_info');
                    $voiceAge = $voiceInfo['voice_age'];
                    $voiceGender = $voiceInfo['voice_gender'];
                    ?>
                  <?php if(!empty($voiceAge) || !empty($voiceGender)): ?>
                  <div class="text-card__age">
                    <?php echo $voiceAge . "(" . $voiceGender . ")"; ?>
                  </div>
                  <?php endif; ?>
                  <span class="text-card__category category-tag">
                    <?php
                      $terms = get_the_terms($post->ID, 'voice_category');
                      foreach ($terms as $term) {
                        echo $term->name;
                      }
                      ?>
                  </span>
                </div>
                <h3 class="text-card__title"><?php the_title(); ?></h3>
              </div>
              <picture class="text-card__image colorbox js-colorbox">
                <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else: ?>
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/noimage.jpg')); ?>" alt="画像なし">
                <?php endif; ?>
              </picture>
            </div>
            <?php
            $voiceText = get_field('voice_text');
            if(!empty($voiceText)):
            ?>
            <div class="text-card__body">
              <p class="text-card__text text">
                <?php echo $voiceText; ?>
              </p>
            </div>
            <?php endif; ?>
          </div>
          <?php endwhile; ?>
        </div>
        <?php else : ?>
        <p class="text">現在準備中です。</p>
        <?php endif; ?>
      </div>
      <div class="page-voice__pagenavi">
        <?php if (function_exists('wp_pagenavi')) {
          wp_pagenavi();
        } ?>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>