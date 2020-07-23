<?php
/*
Template Name: team page
*/
get_header(); ?>
<div class="container">
  <div class="breadcrumbs">
    <?php if(function_exists('bcn_display')) {
    bcn_display();}?>
  </div>
</div>
<?php get_template_part('blocks/intro-banner'); ?>

<div class="container py-10">
  <div class="row featured-team-row">
    <?php get_template_part('template-parts/about/team-single'); ?>
    <?php get_template_part('template-parts/about/team-popups'); ?>
  </div>
  <div class="row">
    <?php  
        $args = array('post_type' => 'all_team');
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
      <div class="col-md-4 mb-6">
        <div class="member-block">
            <a href="#popup-team-<?php echo $teamId ?>" data-fancybox="team-fancybox" class="img-holder has-bg img-avatar"
              style="background-image:url('<?php echo $image ?>')"></a>
            <div class="description">
              <h5><?php the_title() ?></h5>
              <p><?php echo $role ?></p>
              <a href="#popup-team-<?php echo $teamId ?>" class="btn btn-primary btn-sm lightbox"><?php _e('थप पढ्नुहोस','government-school') ?></a>
            </div>
          </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <div class="popup-holder">
    <?php  
      $args = array('post_type' => 'all_team');
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
      <div id="popup-team-<?php echo $teamId ?>" class="lightbox team-lightbox">
        <div class="container container-sm py-4">
          <div class="main-member-detail text-center text-md-left">
            <div class="img-holder has-bg img-avatar" style="background-image:url('<?php echo $image ?>')"></div>
            <div class="description">
              <h2><?php the_title() ?></h2>
              <?php echo $description ?>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
  </div>

<?php get_footer(); ?>
