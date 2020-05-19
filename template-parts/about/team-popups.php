<div class="popup-holder">
  <?php  
    $args = array('post_type' => 'featured_team');
    $loop = new WP_Query($args);
    $teamId = 0;

    while ($loop->have_posts()) : $loop->the_post();
    $teamId++
    ?>
      <?php 
        $role = get_post_meta(get_the_ID(), 'role', true);
        $description = get_post_meta(get_the_ID(), 'description', true);
        $image_id = get_post_meta(get_the_ID(), 'image', true);
        $image =  wp_get_attachment_image_src($image_id, 'full')[0];
      ?>
    <div id="popup-featured-<?php echo $teamId ?>" class="lightbox team-lightbox">
      <div class="container container-sm py-4">
        <div class="main-member-detail text-center text-md-left">
          <div class="img-holder has-bg img-avatar" style="background-image:url('<?php echo $image ?>')"></div>
          <div class="description">
            <h2><?php the_title() ?></h2>
            <?php echo $description ?>
            <?php edit_post_link(__('Edit', 'government-school')); ?>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
</div>