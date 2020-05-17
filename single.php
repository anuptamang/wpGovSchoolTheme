<?php get_header() ?>

<?php get_template_part('blocks/intro-banner'); ?>

<div class="container py-10">
  <?php while ( have_posts() ) : the_post() ?>
  <div class="post-date mb-4">प्रकाशित मिति: <?php echo get_the_date() ?></div>
  <?php the_content() ?>
  <?php edit_post_link( __( 'Edit', 'base' ) ); ?>
<?php endwhile ?>
</div>
<?php get_footer() ?>