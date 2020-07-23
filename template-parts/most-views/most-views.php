<div class="info-box bg-fade-blue">
    <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span
        class="icon-remove_red_eye mr-1"></span> <?php _e('धेरै हेरिएको समाचार') ?>
    </h2>
      <div class="grid-single-slider has-anim fadeInUp">
        <?php
            query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
            if (have_posts()) : while (have_posts()) : the_post();
          ?>
          <div class="slide">
            <a class="news-block" href="<?php the_permalink(); ?>">
              <div class="img-holder has-bg py-16" <?php if (has_post_thumbnail( $post->ID ) ) {
                // get featured image from post/page
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                  echo 'style="background-image: url('.$image[0].')"';        
                } else {
                  // get image from theme option
                  $placeholder = get_field('post_thumb', 'options');
                  echo 'style="background-image: url('.$placeholder.')"';
                }?>>
                <span class="icon-remove_red_eye zoom"></span>
                </div>
                <div class="px-6 py-4 bg-primary text-white">
                  <h5 class="text-white mb-1 text-truncate"><?php the_title(); ?></h5>
                  <div class="meta font-sm"><?php _e('प्रकाशित मिति:','government-school') ?> <?php echo get_the_date() ?></div>
                </div>
              </a>
          </div>
        <?php
          endwhile; endif;
          wp_reset_query();
          ?>             
        </div>
    </div>