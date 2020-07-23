<div class="info-box bg-fade-blue mb-6">
          <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span class="icon-news mr-1"></span>
            <?php _e('सूचना तथा समाचारहरु','government-school') ?> 
          </h2>
          <ul class="list-unstyled list-news m-0">
           <?php $category = new WP_Query( 
             $args = array(
                'post_type' => 'post',
                'cat' => '-31,-32',
                'posts_per_page' => 10,
                'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
            )
           ); ?>
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
            <?php get_template_part( 'blocks/pager' ) ?>
          </ul>
        </div>