<?php get_header() ?>
<?php get_template_part('blocks/intro-banner'); ?>
<?php if (have_posts()): while (have_posts()) : the_post() ?>
  <?php the_content() ?>
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?>
