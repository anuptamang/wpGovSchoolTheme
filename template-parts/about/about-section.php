<?php
/**
 * Template part for displaying team section
 * **/
?>

<section class="container py-8 py-lg-15">
  <div class="row">
    <div class="col-lg-8 d-flex mb-6 mb-lg-0 about-summary">
      <?php get_template_part('template-parts/about/school-intro'); ?>
    </div>
    <div class="col-lg-4 d-flex mb-6 mb-lg-0">
      <div class="info-box bg-fade-blue-1 team-summary">
        <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span
            class="icon-multiple-users-silhouette mr-1"></span> <?php _e('पदाधिकारी / कर्मचारी','base') ?> <a href="
              <?php $the_query = new WP_Query('page_id=56'); ?>
              <?php while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>  
              <?php echo the_permalink() ?>
              <?php endwhile;
                  wp_reset_postdata();
                  ?>
            "
            class="link text-white font-sm"><?php _e('सबै हेर्नुहोस', 'base') ?></a>
        </h2>
        <div class="p-6 members-row">
          <div class="row mb-n6">
            <?php get_template_part('template-parts/about/team-single'); ?>
          </div>
        </div>        
        <?php get_template_part('template-parts/about/team-popups'); ?>
      </div>
</div>
  </div>
</section>