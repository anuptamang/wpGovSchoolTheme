<?php get_header() ?>
<?php get_template_part('blocks/intro-banner'); ?>
<div class="container py-10">
  <?php if (have_posts()): while (have_posts()) : the_post() ?>
    <?php the_content() ?>
  <?php endwhile ?>
</div>
<?php endif ?>
<?php get_footer() ?>
