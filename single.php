<?php setPostViews(get_the_ID()); ?>
<?php get_header() ?>
<div class="container">
  <div class="breadcrumbs">
    <?php if(function_exists('bcn_display')) {
    bcn_display();}?>
  </div>
</div>
<?php get_template_part('blocks/intro-banner'); ?>

<div class="container container-sm py-10">
<?php while ( have_posts() ) : the_post() ?>
  <div class="d-flex align-items-center mb-6">
    <div class="btn btn-primary btn-sm post-date no-after-icon mr-1"><span class="icon-calendar mr-2"></span><?php _e('प्रकाशित मिति:','government-school') ?> <?php echo get_the_date() ?> </div> <div class="btn btn-primary btn-sm no-after-icon views mr-2"> <mark class="bg-danger text-white mx-1"><?php echo getPostViews(get_the_ID()); ?></mark> पटक हेरियो!</div>
    <?php edit_post_link( __( 'Edit', 'government-school' ) ); ?>
  </div>
  
  <?php the_content() ?>
  <div class="post-meta-details d-flex justify-content-end align-items-center">     
     <?php do_action('back_button'); ?>
  </div>
<?php endwhile ?>
</div>
।<div class="container container-sm py-10">
  <?php 
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;
  ?>
</div>
<?php get_footer() ?>