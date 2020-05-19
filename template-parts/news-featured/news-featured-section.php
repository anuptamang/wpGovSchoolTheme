  <section class="bg-blue-2 has-bg has-overlay has-parallax" <?php 
        $placeholder = get_field('banner_blue', 'options');
        echo 'style="background-image: url('.$placeholder.')"';
      ?>>
    <div class="container py-8 py-lg-15">
      <div class="row">
        <div class="col-lg-7 col-xl-8">
          <div class="info-box bg-fade-blue mb-6 mb-lg-0">
            <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span class="icon-news mr-1"></span>
              <?php _e('सूचना तथा समाचार','government-school') ?> <a href="<?php echo the_permalink() ?>" class="link text-decoration-none font-sm"><span
                  class="icon-remove_red_eye mr-1"></span><?php _e('सबै हेर्नुहोस','government-school') ?></a>
            </h2>
            <div class="jcf-scrollable">
            <?php $category = new WP_Query( 'cat=3&posts_per_page=100' ); ?>
              <ul class="list-unstyled list-news m-0">
              <?php while($category->have_posts()) : $category->the_post(); ?>
                <li class="m-0 d-flex">
                  <div class="post-meta news-meta">
                    <div class="text-title"><?php echo get_the_date() ?></div>
                    <div class="text-info"><?php echo get_the_date() ?></div>
                  </div>
                  <a href="<?php the_permalink() ?>" class="post-title d-flex align-items-center">
                    <h5 class="text-title mb-0"><?php the_title() ?></h5>
                  </a>
                </li>
                <?php endwhile;
                  wp_reset_postdata();
                  ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xl-4">
          <div class="row">
            <div class="col-md-6 col-lg-12">
              <div class="info-box bg-fade-blue mb-6 mb-md-0 mb-lg-6">
                <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span
                    class="icon-external-link"></span> <?php _e('द्रुत लिंक','government-school') ?>
                </h2>
                <div class="px-4 py-5">
                  <ul class="list-inline list-nav-pane row mx-n1 mb-n2">
                   <?php  
                      $args = array('post_type' => 'quick_links', 'order' => 'ASC',);
                      $loop = new WP_Query($args);

                      while ($loop->have_posts()) : $loop->the_post();
                      ?>
                        <?php 
                          $icon_class = get_post_meta(get_the_ID(), 'icon_class', true);
                        ?>
                    <li class="col-6 mb-3 px-1">
                      <a href="<?php the_permalink() ?>" class="btn btn-primary bg-danger btn-sm btn-block no-after-icon"><span
                          class="icon-<?php echo $icon_class ?> mr-1"></span><?php the_title() ?></a>
                    </li>
                    <?php endwhile; ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-12">
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
                <div class="gallery-widget">
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>