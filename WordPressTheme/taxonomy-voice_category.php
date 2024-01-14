<?php get_header(); ?>

<?php
$voice = esc_url(home_url('/voice'));
$term = get_queried_object();
$term_slug = $term->slug;
?>

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
              <li class="tab__item tab__item--large">
                <a href="<?php echo $voice; ?>">all</a>
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
                <a href="<?php echo esc_url(get_term_link($term)); ?>" class="
              <?php
              if($term_slug === $term->slug) {
                echo 'is-active';
              }
              ?>
              "><?php echo esc_html($term->name); ?></a>
              </li>
              <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </ul>
        </div>
      </div>
      <?php if (have_posts()) : ?>
      <div class="page-voice__body">
        <div class="text-cards">
          <?php while (have_posts()) : the_post(); ?>
          <div class="text-cards__item text-card">
            <div class="text-card__header">
              <div class="text-card__box">
                <div class="text-card__meta">
                  <?php
                    $voiceInfo = get_field('voice_info');
                    ?>
                  <div class="text-card__age">
                    <?php echo $voiceInfo['voice_age'] . "(" . $voiceInfo['voice_gender'] . ")"; ?>
                  </div>
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
                <?php if (get_the_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php endif; ?>
              </picture>
            </div>
            <div class="text-card__body">
              <p class="text-card__text text">
                <?php echo get_field('voice_text'); ?>
              </p>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
      <div class="page-voice__pagenavi wp-pagenavi">
        <?php if (function_exists('wp_pagenavi')) {
          wp_pagenavi();
        } ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <?php get_footer(); ?>