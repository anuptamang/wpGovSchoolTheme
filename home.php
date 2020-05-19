<?php get_header(); ?>

  <section class="intro-banner has-bg has-overlay blue" <?php if (has_post_thumbnail( $post->ID ) ) {
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
        echo 'style="background-image: url('.$image[0].')"';        
      } else {
        $placeholder = get_field('banner_green', 'options');
        echo 'style="background-image: url('.$placeholder.')"';
      }?>>
    <div class="container block-vc d-flex align-items-center justify-content-center">
      <div class="caption text-center">
        <h1 class="text-white"><?php echo wp_title() ?></h1>
      </div>
    </div>
  </section>

<h2>सुचना तथा समाचार</h2>
<?php $catquery = new WP_Query( 'category_name=news&posts_per_page=5' ); ?>
  <ul>
  
    <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
  
    <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
    <?php endwhile;
      wp_reset_postdata();
      ?>
  </ul>
  <h2>कार्यक्रमको समाचार</h2>

  <?php $catquery = new WP_Query( 'cat=4&posts_per_page=5' ); ?>
  <ul>
  
    <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
  
    <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
    <?php endwhile;
      wp_reset_postdata();
      ?>
  </ul>
  <h2>परिक्षाको समाचार</h2>
   <?php $catquery = new WP_Query( 'cat=5&posts_per_page=5' ); ?>
  <ul>
  
    <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
  
    <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
    <?php endwhile;
      wp_reset_postdata();
      ?>
  </ul>

<?php get_footer(); ?>