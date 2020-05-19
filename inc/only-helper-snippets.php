<!-- Get Site Title -->
<?php echo get_bloginfo('title') ?>

<!-- Get Dates -->
<!-- Get current english date -->
 <?php echo date('l jS \of F Y'); ?>
 <!-- Get current Nepali date -->
  <?php echo get_nepali_today_date(); ?>
<!-- Get only year  -->
<?php echo date( 'Y' )  ?> 

<!-- Get Home URL -->
<?php echo home_url() ?>

<!-- Get logo from theme option => generates inline IMG -->
<?php if( $logo = get_field('logo', 'options') ) : ?>
  <?php echo wp_get_attachment_image($logo, 'full') ?>
<?php endif ?>

<!-- Generate navigation -->
<?php if( has_nav_menu( 'primary' ) )
    wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary',
      'menu_id'        => 'navigation',
      'menu_class'     => 'navigation',
      'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'walker'         => new Custom_Walker_Nav_Menu
  )); ?>

<!-- Get search form -->
<?php get_search_form() ?>

<!-- Trim the content -->
<?php echo wp_trim_words( get_the_content(), 150, ' [...]' ); ?>

<!-- Query by pagename:- -->
<?php $the_query = new WP_Query(array('pagename' => 'information-center')); ?>
  <?php while( $the_query -> have_posts() ) : $the_query -> the_post(); ?> 
    <!-- do code -->
<?php endwhile ?>

<!-- // get bgImage, if no bgImage do placeholder image -->

<!-- Initial Query goes here.. -->
<?php if (has_post_thumbnail( $post->ID ) ) {
  // get featured image from post/page
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    echo 'style="background-image: url('.$image[0].')"';        
  } else {
    // get image from theme option
    $placeholder = get_field('page_banner', 'options');
    echo 'style="background-image: url('.$placeholder.')"';
  }?>
<!-- Initial Query Ends here.. -->

<!-- Get bgImage and echo attribute style="" from ACF -->
<?php echo (($image = get_field('image')) ? 'style="background-image: url('.$image.')"' : '') ?>

<!-- get the ACF repeater fields from Custom Post Type + category name -->
<?php  
    $args = array('post_type' => 'gallery', 'category_name' => 'featured_gallery');
    $loop = new WP_Query($args);

    while ($loop->have_posts()) : $loop->the_post();
  ?> 
  <?php while( have_rows('gallery') ) : the_row() ?>
    <div class="slide">
      <a class="has-bg img-slide" href="<?php echo (($image = get_sub_field('image')) ? $image : '') ?>" data-fancybox="gallery" <?php echo (($image = get_sub_field('image')) ? 'style="background-image: url('.$image.')"' : '') ?>>
      <span class="icon-zoom-in zoom"></span>
    </a>
    </div> 
  <?php endwhile ?> 
<?php endwhile ?>   

<!-- Get all the post from CPT with ACF repeater -->
<div class="row">
  <?php  
    $args = array('post_type' => 'gallery');
    $loop = new WP_Query($args);

    while ($loop->have_posts()) : $loop->the_post();
    ?>
    <!-- Repeat all the post -->
    <div class="col-md-6 col-lg-4 mb-6">
        <div class="info-box bg-fade-blue">
          <h2 class="h5 block-heading bg-primary text-white px-6 py-4 mb-0"><span
              class="icon-images mr-1"></span> <?php the_title() ?>
          </h2>
          <div class="gallery-widget">
          <?php while( have_rows('gallery') ) : the_row() ?>
          <!-- Repeat all the ACF  inside that post -->
            <div class="slide">
              <a class="has-bg img-slide" href="<?php echo (($image = get_sub_field('image')) ? $image : '') ?>" data-fancybox="gallery" <?php echo (($image = get_sub_field('image')) ? 'style="background-image: url('.$image.')"' : '') ?>>
                <span class="icon-zoom-in zoom"></span>
              </a>
            </div>
          <?php endwhile ?>                  
          </div>
        </div>
      </div>
      <?php endwhile; ?>
  </div>

<!-- Get posts from category + post limit -->
<?php $category = new WP_Query( 'category_name=news&posts_per_page=5' ); ?>
  <ul>
  
    <?php while($category->have_posts()) : $category->the_post(); ?>
  
      <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
    <?php endwhile;
      wp_reset_postdata();
      ?>
  </ul>

<!-- Get the CPT + ACF no repeater field + counter index -->
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
            </div>
          </div>
      </div>
  <?php endwhile; ?>