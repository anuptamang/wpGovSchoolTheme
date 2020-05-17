<?php
/*
Template Name: news
*/
get_header(); ?>

<?php get_template_part('blocks/intro-banner'); ?>
<h2>सुचना तथा समाचार</h2>
<?php $catquery = new WP_Query( 'cat=3&posts_per_page=5' ); ?>
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