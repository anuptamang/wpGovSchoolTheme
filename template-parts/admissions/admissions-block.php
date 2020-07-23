<?php $the_query = new WP_Query(array('pagename' => 'information-center/admissions')); ?>
  <?php while( $the_query -> have_posts() ) : $the_query -> the_post(); ?> 
  <div class="info-box bg-fade-blue mb-6">
    <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span class="icon-news mr-1"></span>
      <?php echo the_title() ?> <a href="<?php echo the_permalink() ?>" class="link text-decoration-none font-sm"><span
          class="icon-remove_red_eye mr-1"></span><?php _e('सबै हेर्नुहोस','government-school') ?></a>
    </h2>
    <div class="jcf-scrollable">
      <?php get_template_part('template-parts/admissions/admissions-list'); ?>
    </div>
  </div>
  <?php endwhile ?>