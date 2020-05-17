<?php
/**
 * Template part for displaying school intro
 * **/
?>

<?php 
  $args = array('post_type' => 'school_intro');
  $loop = new WP_Query($args);
  while($loop->have_posts()) : $loop->the_post();
?>

<div class="info-box bg-fade-blue-1 pb-lg-20">
    <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span class="icon-comments mr-1"></span>
      <?php the_title(); ?></h2>
    <div class="p-6 text-justify">
      <?php echo wp_trim_words( get_the_content(), 150, ' [...]' ); ?>
      <div class="text-right btn-holder"><a href="<?php echo get_post_permalink() ?>" class="btn btn-primary"><?php _e('थप पढ्नुहोस', 'base') ?></a></div>
    </div>
  </div>
<?php endwhile; ?>