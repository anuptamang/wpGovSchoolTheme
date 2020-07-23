<?php
get_header(); ?>

<?php get_template_part( 'blocks/intro-banner-category' ) ?>

<div class="container py-10">
  <div class="breadcrumbs">
  <?php if(function_exists('bcn_display')) {
  bcn_display();}?>
</div>
  <ul class="list-unstyled list-categories">
    <?php if( $terms = wp_list_categories( array( 'child_of' => 31, 'title_li' => '<a href="#" class="btn btn-primary cat-opener">' . __( 'बिषय छान्नुहोस', 'government-school' ) . '</a>'
     ) ) ) :  endif;
    ?>
  </ul>
    <div class="info-box">
      <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><?php single_cat_title(); ?>
      </h2>
      <div class="p-4 p-lg-6">
        <div class="row mb-n6">
         <?php while ( have_posts() ) : the_post() ?>
          <div class="col-sm-6 col-md-3 mb-6 d-flex text-center">
                <a href="<?php echo the_permalink() ?>" class="video-post has-bg" <?php if (has_post_thumbnail( $post->ID ) ) {
              $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
              echo 'style="background-image: url('.$image[0].')"';        
            } else {
              $placeholder = get_field('banner_blue', 'options');
              echo 'style="background-image: url('.$placeholder.')"';
            }?>>
              <div class="wrap">
                <div class="btn-play"></div>
                <div class="title">
                  <h5 class="text-white m-0"><?php the_title() ?></h5>
                </div>
              </div>
            </a>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
 </div>

<?php get_footer(); ?>