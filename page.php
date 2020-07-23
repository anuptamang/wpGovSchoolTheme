<?php get_header() ?>
<div class="container">
  <div class="breadcrumbs">
    <?php if(function_exists('bcn_display')) {
    bcn_display();}?>
  </div>
</div>
<?php get_template_part('blocks/intro-banner'); ?>
<div class="container py-10">
  <div class="row">
    <div class="col-lg-8 mb-8 mb-lg-0" id="content">
      <?php if (have_posts()): while (have_posts()) : the_post() ?>
        <?php the_content() ?>
      <?php endwhile ?>
      <?php edit_post_link( __( 'Edit', 'government-school' ) ); ?>
    </div>
    <div class="col-lg-4" id="sidebar">
      <?php get_template_part('blocks/sidebar') ?>
    </div>
  </div>
  <div class="featured-video-material featured-content mb-6">
    <div class="container py-10">
      <?php get_template_part('template-parts/elearning/elearning-featured-materials'); ?>
    </div>
</div>
</div>
<?php endif ?>
<?php get_footer() ?>
