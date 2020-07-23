    <ul class="list-unstyled list-news m-0">
    <?php  
        $args = array('post_type' => 'post', 'cat' => '-31,-32', 'posts_per_page' => 25);
        $loop = new WP_Query($args);

        while ($loop->have_posts()) : $loop->the_post();
      ?> 
      <li class="m-0 d-flex">
        <div class="post-meta news-meta">
          <div class="text-title"><?php echo get_the_date() ?></div>
          <div class="text-info"><?php echo get_the_date() ?></div>
        </div>
        <a href="<?php the_permalink() ?>" class="post-title d-flex align-items-center">
          <h5 class="text-title mb-0"><?php the_title() ?></h5>
          <div class="published-on"><?php echo get_the_date() ?></div>
        </a>
      </li>
    <?php endwhile; ?>
  </ul>