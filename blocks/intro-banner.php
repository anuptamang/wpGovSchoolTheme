  <section class="intro-banner has-bg has-overlay blue" <?php if (has_post_thumbnail( $post->ID ) ) {
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
        echo 'style="background-image: url('.$image[0].')"';        
      } else {
        $placeholder = get_field('banner_blue', 'options');
        echo 'style="background-image: url('.$placeholder.')"';
      }?>>
    <div class="container block-vc d-flex align-items-center justify-content-center">
      <div class="caption text-center">
        <h1 class="text-white"><?php echo esc_html( the_title() ) ?></h1>
      </div>
    </div>
  </section>