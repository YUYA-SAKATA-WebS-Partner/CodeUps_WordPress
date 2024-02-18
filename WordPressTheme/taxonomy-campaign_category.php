<?php get_header(); ?>

<?php
$campaign = esc_url(home_url('/campaign'));
$contact = esc_url(home_url('/contact'));
$term = get_queried_object();
$term_slug = $term->slug;
?>

<main>
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

  <!-- breadcrumbs -->
  <?php if (!(is_front_page() || is_404())) : ?>
  <div class="breadcrumbs inner" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
  </div>
  <?php endif; ?>

  <div class="page-campaign sub-page-campaign-layout">
    <div class="page-campaign__inner inner">
      <div class="page-campaign__tab tab">
        <ul class="tab__items">
          <div class="tab__box">
            <li class="tab__item tab__item--large">
              <a href="<?php echo $campaign; ?>">all</a>
            </li>
            <?php
          $args = [
            'taxonomy' => 'campaign_category',
            'orderby' => 'description'
          ];
          $terms = get_terms($args);
          foreach ($terms as $term) :
          ?>
            <li class="tab__item">
              <a href="<?php echo get_term_link($term) ?>" class="
              <?php
              if($term_slug === $term->slug) {
                echo 'is-active';
              }
              ?>
              "><?php echo $term->name; ?></a>
            </li>
            <?php endforeach; ?>
          </div>
        </ul>
      </div>
      <div class="page-campaign__body">
        <?php if (have_posts()) : ?>
        <div class="page-campaign__items">
          <?php while (have_posts()) : the_post(); ?>
          <div class="page-campaign__item panel">
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
                  }
                  ?>
              </span>
              <h3 class="panel__title panel__title--large"><?php the_title(); ?></h3>
              <div class="panel__box panel__box--center">
                <p class="panel__sub-title">全部コミコミ(お一人様)</p>
                <div class="panel__price-box">
                  <?php
                    $campaignPrice = get_field('campaign_price');
                    ?>
                  <p class="panel__price">
                    <?php echo "¥" . number_format($campaignPrice['regular_price'], 0, '', ','); ?>
                  </p>
                  <p class="panel__discount">
                    <?php echo "¥" . number_format($campaignPrice['discount_price'], 0, '', ','); ?>
                  </p>
                </div>
              </div>
              <div class="panel__detail u-desktop">
                <p class="panel__text text">
                  <?php echo nl2br(get_field('campaign_description')); ?>
                </p>
                <div class="panel__button">
                  <?php
                    $campaignPeriod = get_field('campaign_period');
                    ?>
                  <div class="panel__date">
                    <?php echo $campaignPeriod['start_date'] . "-" .  $campaignPeriod['end_date']; ?>
                  </div>
                  <p class="panel__lead">ご予約・お問い合わせはコチラ</p>
                  <a href="<?php echo $contact; ?>" class="panel__link button"><span>Contact us</span></a>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
        <?php else: ?>
        <p class="text">現在実施中のキャンペーンはございません。</p>
        <?php endif; ?>
      </div>
      <div class="page-campaign__pagenavi">
        <?php if (function_exists('wp_pagenavi')) {
        wp_pagenavi();
      } ?>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>