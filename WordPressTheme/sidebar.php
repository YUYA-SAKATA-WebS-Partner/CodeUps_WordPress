<?php
$campaign = esc_url(home_url('/campaign'));
$voice = esc_url(home_url('/voice'));
?>

<aside class="two-column-template__sidebar">
  <div class="sidebar">
    <div class="sidebar__inner">
      <div class="sidebar__widget">
        <div class="popular">
          <div class="popular__title widget-title">
            <span>人気記事</span>
          </div>
          <?php
          $args = [
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'posts_per_page' => 3,
            'order' => 'DESC'
          ];
          $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()) : ?>
          <ul class="popular__items">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="popular__item">
              <a href="<?php the_permalink(); ?>">
                <picture class="popular__image">
                  <?php if (get_the_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php endif; ?>
                </picture>
                <div class="popular__box">
                  <time class="popular__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
                  <div class="popular__box-title"><?php the_title(); ?></div>
                </div>
              </a>
            </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
          <?php endif; ?>
        </div>
      </div>
      <div class="sidebar__widget">
        <div class="widget-voice">
          <div class="widget-voice__title widget-title">
            <span>口コミ</span>
          </div>
          <?php
          $args = [
            'post_type' => 'voice',
            'posts_per_page' => '1'
          ];
          $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()) : ?>
          <ul class="widget-voice__items">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="widget-voice__item">
              <picture class="widget-voice__image">
                <?php if (get_the_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php endif; ?>
              </picture>
              <div class="widget-voice__box">
                <?php
                    $voiceInfo = get_field('voice_info');
                    ?>
                <div class="widget-voice__meta">
                  <?php echo $voiceInfo['voice_age'] . "(" . $voiceInfo['voice_gender'] . ")"; ?>
                </div>
                <div class="widget-voice__item-title"><?php the_title(); ?></div>
              </div>
            </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
          <?php endif; ?>
          <div class="widget-voice__button">
            <a href="<?php echo $voice; ?>" class="widget-voice__link button"><span>View more</span></a>
          </div>
        </div>
      </div>
      <div class="sidebar__widget">
        <div class="widget-campaign">
          <div class="widget-campaign__title widget-title">
            <span>キャンペーン</span>
          </div>
          <?php
          $args = [
            'post_type' => 'campaign',
            'posts_per_page' => '2'
          ];
          $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()) : ?>
          <ul class="widget-campaign__panels">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="widget-campaign__panel panel">
              <picture class="panel__image">
                <?php if (get_the_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php endif; ?>
              </picture>
              <div class="panel__body panel__body--narrow">
                <div class="panel__title panel__title--center"><?php the_title(); ?></div>
                <div class="panel__box">
                  <p class="panel__sub-title">全部コミコミ(お一人様)</p>
                  <div class="panel__price-box">
                    <?php
                        $campaignPrice = get_field('campaign_price');
                        ?>
                    <p class="panel__price panel__price--small">
                      <?php echo "¥" . number_format($campaignPrice['regular_price'], 0, '', ','); ?>
                    </p>
                    <p class="panel__discount panel__discount--small">
                      <?php echo "¥" . number_format($campaignPrice['discount_price'], 0, '', ','); ?>
                    </p>
                  </div>
                </div>
              </div>
            </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
          <?php endif; ?>
          <div class="widget-campaign__button">
            <a href="<?php echo $campaign; ?>" class="widget-button button"><span>View more</span></a>
          </div>
        </div>
      </div>
      <div class="sidebar__widget">
        <div class="widget-archive">
          <div class="widget-archive__title widget-title">
            <span>アーカイブ</span>
          </div>
          <div class="widget-archive__body">
            <div class="widget-archive__accordion archive-accordion">
              <ul class="archive-accordion__header js-archive-accordion__header is-open">
                <?php
                // 年ごとに投稿を取得
                $years = get_posts(array(
                  'posts_per_page' => -1,
                  'post_type' => 'post', // 投稿タイプを指定
                  'orderby' => 'post_date',
                  'order' => 'DESC',
                  'post_status' => 'publish',
                  'suppress_filters' => 0
                ));

                $current_year = '';
                $current_month = '';

                foreach ($years as $year_post) {
                  $year = get_the_date('Y', $year_post);

                  // 年が変わったら年を表示
                  if ($year !== $current_year) {
                    $current_year = $year;
                    echo '<li class="archive-accordion__year">' . $current_year . '年' . '</li>';
                ?>
              </ul>
              <?php
                    // 年ごとの月の投稿を取得
                    $months = get_posts(array(
                      'posts_per_page' => -1,
                      'post_type' => 'post',
                      'orderby' => 'post_date',
                      'order' => 'DESC',
                      'post_status' => 'publish',
                      'year' => $current_year,
                      'suppress_filters' => 0
                    ));

                    echo '<ul class="archive-accordion__body is-open">';

                    foreach ($months as $month_post) {
                      $month = get_the_date('n', $month_post);

                      // 月が変わったら月を表示
                      if ($month !== $current_month) {
                        $current_month = $month;
                        // 指定された年と月の投稿数を取得
                        $post_count = new WP_Query(array(
                          'year' => $current_year,
                          'monthnum' => $current_month,
                          'post_type' => 'post',
                          'post_status' => 'publish',
                          'posts_per_page' => -1, // すべての投稿を取得
                        ));
                        echo '<li class="archive-accordion__month"><a href="' . get_month_link($current_year, $current_month) . '">' . date_i18n('F', mktime(0, 0, 0, $current_month, 1)) . '(' . $post_count->post_count . ')' . '</a></li>';
                      }
                    }
                    echo '</ul>';
                  }
                }
          ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</aside>