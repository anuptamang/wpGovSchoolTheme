<?php $category = new WP_Query( 'category_name=results&posts_per_page=100' ); ?>
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