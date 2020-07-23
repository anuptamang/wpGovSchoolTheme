  <section class="bg-blue-2 has-bg has-overlay has-parallax" <?php 
        $placeholder = get_field('banner_blue', 'options');
        echo 'style="background-image: url('.$placeholder.')"';
      ?>>
    <div class="container py-8 py-lg-15">
      <div class="row">
        <div class="col-lg-7 col-xl-8 scrollable-fixed-height news-featured-section has-anim fadeInLeft">
          <?php get_template_part('template-parts/news/news-block'); ?>
        </div>
        <div class="col-lg-5 col-xl-4">
          <div class="row">
            <div class="col-md-6 col-lg-12 has-anim fadeInRight">
              <?php get_template_part('template-parts/quick-links/quick-links') ?>
            </div>
            <div class="col-md-6 col-lg-12 has-anim fadeInRight">
              <?php get_template_part('template-parts/most-views/most-views') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>