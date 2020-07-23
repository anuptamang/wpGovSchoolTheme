<?php
/*
Template Name: Intro
*/
get_header(); ?>
<?php get_template_part('blocks/intro-banner'); ?>
<div class="container py-10">
  <?php the_content() ?>
</div>

<?php get_footer(); ?>