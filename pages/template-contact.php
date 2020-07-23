<?php
/*
Template Name: Contact Page
*/
get_header(); ?>
<div class="container">
  <div class="breadcrumbs">
    <?php if(function_exists('bcn_display')) {
    bcn_display();}?>
  </div>
</div>
<?php get_template_part('blocks/intro-banner'); ?>
<div class="google-map-holder">
  <div id="map" class="map-canvas">
    <?php echo do_shortcode('[wpgmza id="1"]') ?>
  </div>
  <div class="px-3 px-lg-20 py-10 py-md-14">
    <div class="row">
      <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4">
        <div class="info-box bg-fade-blue mb-6 mb-md-0">
          <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span class="icon-flag1 mr-1"></span>
            <?php _e('ठेगाना', 'government-school') ?>
          </h2>
          <div class="px-4 py-5">
           <?php if( $footer_address = get_field('footer_address', 'options') ) : ?>
                  <?php echo $footer_address ?>
                <?php endif ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>