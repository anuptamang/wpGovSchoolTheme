<?php
/*
Template Name: e-pati
*/
get_header(); ?>
<div class="page-intro has-bg has-overlay" <?php if (has_post_thumbnail( $post->ID ) ) {
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
        echo 'style="background-image: url('.$image[0].')"';        
      } else {
        $placeholder = get_field('banner_blue', 'options');
        echo 'style="background-image: url('.$placeholder.')"';
      }?>>
  <div class="container py-4 py-md-8">
    <div class="block-caption py-4 text-center">
      <div class="h1 text-white d-md-flex align-items-center mb-0">
        <div class="mb-2 mb-md-0" data-delay="1200" data-words>
          &nbsp;
          <span class="text-anim-items">
            <span class="text-anim-item"><span>लेख</span></span>
            <span class="text-anim-item"><span>रचना </span></span>
            <span class="text-anim-item"><span>कविता</span></span>
            <span class="text-anim-item"><span>मुक्तक</span></span>
            <span class="text-anim-item"><span>गजल</span></span>
            <span class="text-anim-item"><span>चित्रकला</span></span><span
              class="text-anim-item"><span>हस्तकला</span></span>
            <span class="text-anim-item"><span>खेलकुद</span></span>
            <span class="text-anim-item"><span>नृत्य</span></span>
            <span class="text-anim-item"><span>गायन</span></span>
            <span class="text-anim-item"><span>संगित</span></span>
            <span class="text-anim-item"><span>नाटक</span></span>
            <span class="text-anim-item"><span>आविस्कार</span></span>
          </span>
          <span class="anim-line"></span>
        </div>
        <div class="title pl-md-4 mt-md-n2"><span class="icon-IE mr-1"></span>- ईपाटि</div>
      </div>
    </div>
  </div>
</div>
<div class="px-3 px-md-6 py-8 py-lg-12">
    <div class="masonry article-holder">
      <?php $category = new WP_Query( 'category_name=epati&posts_per_page=150' ); ?>
      <?php while($category->have_posts()) : $category->the_post(); ?>
      <div class="grid-item px-2 mb-4">
        <div class="article info-box">
          <div class="block-heading bg-primary text-white px-2 py-2 mb-0">
            <h4 class="h5 m-0 text-white title">
              <span class="icon-pin ico-holder mr-1"></span><?php the_title() ?> <span class="ico-holder fullscreen"><span class="icon-eye-on-screen"></span></span>
            </h4>
          </div>
          <?php the_content() ?>
          <a class="article-link" href="<?php the_permalink() ?>"></a>
        </div>
      </div>
      <?php endwhile;
      wp_reset_postdata();
      ?>
    </div>
  </div>


<?php get_footer(); ?>