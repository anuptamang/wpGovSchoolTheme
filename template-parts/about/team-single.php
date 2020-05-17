<?php
/**
 * Template part for displaying team single
 * **/
?>

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
  <div class="col-md-4 col-lg-12 mb-6">
    <div class="member-block">
      <a href="#popup-featured-<?php echo $teamId ?>" data-fancybox="team-fancybox" class="img-holder has-bg img-avatar"
        style="background-image:url('<?php echo $image ?>')"></a>
      <div class="description">
        <h5><?php the_title() ?></h5>
        <p><?php echo $role ?></p>
        <a href="#popup-featured-<?php echo $teamId ?>" class="btn btn-primary btn-sm lightbox"><?php _e('थप पढ्नुहोस','base') ?></a>
      </div>
    </div>
  </div>
<?php endwhile; ?>