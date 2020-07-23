<?php
/*
Template Name: Gallery
*/
get_header(); ?>
<div class="container">
  <div class="breadcrumbs">
    <?php if(function_exists('bcn_display')) {
    bcn_display();}?>
  </div>
</div>
<?php get_template_part('blocks/intro-banner'); ?>
  <div class="container py-10">
    <div class="row">
    <?php  
      $args = array('post_type' => 'gallery');
      $loop = new WP_Query($args);

      while ($loop->have_posts()) : $loop->the_post();
      ?>
      <div class="col-md-6 col-lg-4 mb-6">
          <div class="info-box bg-fade-blue">
            <h2 class="h5 block-heading bg-primary text-white px-6 py-4 mb-0"><span
                class="icon-images mr-1"></span> <?php the_title() ?>
            </h2>
            <div class="grid-single-slider">
            <?php while( have_rows('gallery') ) : the_row() ?>
              <div class="slide">
                <a class="has-bg img-slide" href="<?php echo (($image = get_sub_field('image')) ? $image : '') ?>" data-fancybox="gallery" <?php echo (($image = get_sub_field('image')) ? 'style="background-image: url('.$image.')"' : '') ?>>
                  <span class="icon-zoom-in zoom"></span>
                </a>
              </div>
            <?php endwhile ?>                  
            </div>
          </div>
        </div>
        <?php endwhile; ?>
    </div>
  </div>

<?php get_footer(); ?>