<?php
/*
Template Name: elearning
*/
get_header(); ?>
<?php get_template_part('blocks/intro-banner'); ?>

<div class="container py-10">
  <ul class="list-unstyled list-categories">
    <?php if( $terms = wp_list_categories( array( 'child_of' => 31, 'title_li' => '<a href="#" class="btn btn-primary cat-opener">' . __( 'बिषय छान्नुहोस', 'government-school' ) . '</a>'
     ) ) ) :  endif;
    ?>
  </ul>
    <div class="featured-video-material featured-content mb-6">
        <?php get_template_part('template-parts/elearning/elearning-featured-materials'); ?>
    </div>
</div>
<div class="p-6 mb-6">
  <div class="info-box bg-fade-blue">
    <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span class="icon-images mr-1"></span> <?php _e('शिकाई चाैतारी', 'government-school') ?>
    </h2>
    <iframe src="http://learning.cehrd.edu.np/" style="border: none; width:100%; height: 750px"></iframe>
  </div>
</div>
<div class="p-6 mb-6">
  <div class="info-box bg-fade-blue">
    <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span class="icon-images mr-1"></span> <?php _e('ई-पाठ', 'government-school') ?>
    </h2>
    <iframe src="https://pustakalaya.org/epaath/" style="border: none; width:100%; height: 750px"></iframe>
  </div>
</div>
<div class="p-6 mb-6">
  <div class="info-box bg-fade-blue">
    <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span class="icon-images mr-1"></span> <?php _e('प्रारम्भिक कक्षा पढाई', 'government-school') ?>
    </h2>
    <iframe src="https://egr.olenepal.org/" style="border: none; width:100%; height: 750px"></iframe>
  </div>
</div>

<?php get_footer(); ?>