<div class="info-box bg-fade-blue">
    <?php  
        $args = array('post_type' => 'gallery', 'category_name' => 'featured_gallery');
        $loop = new WP_Query($args);

        while ($loop->have_posts()) : $loop->the_post();
      ?> 
    <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span
        class="icon-images mr-1"></span> <?php _e('फोटो फिचर','government-school') ?>
        <?php edit_post_link( __( 'Edit', 'government-school' ) ); ?>
    </h2>
    <div class="grid-single-slider gallery-widget has-anim fadeInUp">
        <?php while( have_rows('gallery') ) : the_row() ?>
          <div class="slide">
            <a class="has-bg img-slide" href="<?php echo (($image = get_sub_field('image')) ? $image : '') ?>" data-fancybox="gallery" <?php echo (($image = get_sub_field('image')) ? 'style="background-image: url('.$image.')"' : '') ?>>
            <span class="icon-zoom-in zoom"></span>
          </a>
          </div> 
        <?php endwhile ?> 
      <?php endwhile ?>               
    </div>
  </div>