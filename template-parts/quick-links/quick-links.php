<div class="info-box bg-fade-blue mb-6 mb-md-0 mb-lg-6">
    <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span
        class="icon-external-link"></span> <?php _e('द्रुत लिंक','government-school') ?>
    </h2>
    <div class="px-4 py-5 has-anim fadeInUp">
      <ul class="list-inline list-nav-pane row mx-n1 mb-n2">
        <?php  
          $args = array('post_type' => 'quick_links', 'order' => 'ASC',);
          $loop = new WP_Query($args);

          while ($loop->have_posts()) : $loop->the_post();
          ?>
            <?php 
              $page_url = get_post_meta(get_the_ID(), 'page_url', true);
              $icon_class = get_post_meta(get_the_ID(), 'icon_class', true);
            ?>
          <li class="col-6 mb-3 px-1">
            <a href="<?php echo $page_url ?>" class="btn btn-primary bg-danger btn-sm btn-block no-after-icon"><span
                class="icon-<?php echo $icon_class ?> mr-1"></span><?php the_title() ?></a>
          </li>
        <?php endwhile; ?>
      </ul>
    </div>
  </div>