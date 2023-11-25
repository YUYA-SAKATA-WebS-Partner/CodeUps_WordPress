<?php get_header(); ?>

<?php $voice = esc_url(home_url('/voice')); ?>

<div class="page-voice sub-page-voice-layout">
  <div class="page-voice__inner inner">
    <div class="page-voice__tab tab">
      <div class="tab__inner">
        <ul class="tab__items">
          <div class="tab__box">
            <li class="tab__item tab__item--large is-active js-tab-item">
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
                <li class="tab__item js-tab-item">
                  <a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a>
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
            <div class="text-cards__item text-card js-tab-content">
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
                  <?php echo nl2br(get_field('voice_text')); ?>
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