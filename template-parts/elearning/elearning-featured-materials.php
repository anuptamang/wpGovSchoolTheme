<?php $category = new WP_Query( array('category_name' => 'elearning', 'posts_per_page' => 20) ); ?>
  <div class="info-box">
    <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span class="icon-video-camera mr-1"></span> <?php _e('भिडियो सिकाई सामाग्रिहरु', 'government-school') ?>
    </h2>
    <div class="px-4 py-6 has-anim fadeInUp">
      <div class="grid-slider featured-slider">
        <?php while($category->have_posts()) : $category->the_post(); ?>
        <div class="slide d-flex text-center">
              <a href="<?php echo the_permalink() ?>" class="video-post has-bg" <?php if (has_post_thumbnail( $post->ID ) ) {
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
            echo 'style="background-image: url('.$image[0].')"';        
          } else {
            $placeholder = get_field('banner_blue', 'options');
            echo 'style="background-image: url('.$placeholder.')"';
          }?>>
            <div class="wrap">
              <div class="btn-play"></div>
              <div class="title">
                <h5 class="text-white m-0"><?php the_title() ?></h5>
                <?php $cat = get_the_category(); echo $cat[1]->name; ?>
              </div>
            </div>
          </a>
        </div>
        <?php endwhile;
          wp_reset_postdata();
          ?>
      </div>
    </div>
  </div>