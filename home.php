<?php get_header(); ?>
<div class="container">
  <div class="breadcrumbs">
    <?php if(function_exists('bcn_display')) {
    bcn_display();}?>
  </div>
</div>
  <section class="page-intro has-bg has-overlay blue" 
    <?php if(is_home()) {
      $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full');
        $featured_image = $img[0];
    }?>
    <?php if ($featured_image ) {
          echo 'style="background-image: url('.$featured_image.')"';        
        } else {
          $placeholder = get_field('banner_green', 'options');
          echo 'style="background-image: url('.$placeholder.')"';
        }?>>
    <div class="container block-vc d-flex align-items-center justify-content-center">
      <div class="caption text-center">
        <h1 class="text-white"><?php echo wp_title() ?></h1>
      </div>
    </div>
  </section>
  <div class="container py-8 py-lg-12">
    <div class="row mb-6">
      <div class="col-lg-8 mb-8 mb-lg-0 news-notices" id="content">
        <?php get_template_part('template-parts/news/all-news') ?>
      </div>
      <div class="col-lg-4" id="sidebar">
        <div class="row">
          <div class="col-lg-7 col-lg-12 mb-6">
            <?php get_template_part('template-parts/most-views/most-views') ?>
          </div>
          <div class="col-lg-5 col-lg-12">
            <div class="row">
              <div class="col-md-6 col-lg-12">
                <?php get_template_part('template-parts/quick-links/quick-links'); ?>
              </div>
              <div class="col-md-6 col-lg-12">
                <?php get_template_part('template-parts/featured-gallery/featured-gallery'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="featured-video-material featured-content mb-6">
        <?php get_template_part('template-parts/elearning/elearning-featured-materials'); ?>
    </div>
  </div>
<?php get_footer(); ?>