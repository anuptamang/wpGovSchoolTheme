<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<?php get_template_part('template-parts/hero/hero-slider'); ?>
<?php get_template_part('template-parts/about/about-section'); ?>
<?php get_template_part('template-parts/news/news-featured-section'); ?>
<div class="">
  <div class="container py-10">
    <div class="featured-video-material featured-content mb-6">
        <?php get_template_part('template-parts/elearning/elearning-featured-materials'); ?>
    </div>
    <div class="featured-gallery">
        <div class="info-box">
          <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span class="icon-images mr-1"></span><?php _e('फोटो ग्यालेरी', 'government-school') ?>
          </h2>
          <div class="px-4 px-lg-6 pt-6 pb-0 has-anim fadeInUp">
            <div class="row">
          <?php  
            $args = array('post_type' => 'gallery', 'posts_per_page' => 3);
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
        </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
