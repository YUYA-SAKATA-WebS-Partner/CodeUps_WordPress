<?php get_header(); ?>

<?php $home = esc_url(home_url('/')); ?>

<!-- content -->
<div class="page-404 sub-page-404-layout">
  <div class="page-404__inner inner">
    <!-- breadcrumbs -->
    <div class="page-404__breadcrumbs breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
    </div>
    <div class="page-404__box">
      <h1 class="page-404__title">404</h1>
      <p class="page-404__text text text--white">申し訳ありません。<br>お探しのページが見つかりません。</p>
      <div class="page-404__button">
        <a href="<?php echo $home; ?>" class="button button--reverse"><span>Page TOP</span></a>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>