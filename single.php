<?php get_header() ?>
<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <section class="intro-banner has-bg has-overlay" style="background-image:url('<?php echo $image[0]; ?>')">
    <div class="container block-vc d-flex align-items-center justify-content-center">
      <div class="caption text-center">
        <h1 class="text-white"><?php echo esc_html( get_the_title() ) ?></h1>
      </div>
    </div>
  </section>
<?php endif; ?>
<div class="container py-10">
  <?php while ( have_posts() ) : the_post() ?>
  <?php the_content() ?>
  <?php edit_post_link( __( 'Edit', 'base' ) ); ?>
<?php endwhile ?>
</div>
<?php get_footer() ?>