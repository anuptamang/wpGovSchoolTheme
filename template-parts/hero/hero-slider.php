<?php
/**
 * Template part for displaying hero slider
 * **/
?>

<section class="hero-slider">
  <?php 
    $args = array('post_type' => 'hero_slider');
    $loop = new WP_Query($args);
    while($loop->have_posts()) : $loop->the_post();

    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
  ?>
  <div class="slide has-bg has-overlay" style="background-image: url('<?php echo $image[0] ?>');">
    <div class="container">
      <div class="caption">
        <h1 class="text-white"><?php the_title(); ?></h1>
        <a href="<?php echo get_post_permalink($post->ID) ?>" class="btn btn-primary btn-white"><?php _e('थप पढ्नुहोस','government-school') ?></a>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</section>