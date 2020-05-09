<?php
/*
Template Name: Blogs
*/
get_header(); ?>
	<?php while ( have_posts( ) ) : the_post(); ?>
			<?php the_content(); ?>
  <?php endwhile; ?>
  <div class="container py-10">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post() ?>
            <?php get_template_part( 'blocks/content', get_post_type() ) ?>
          <?php endwhile ?>
          <?php get_template_part( 'blocks/pager' ) ?>
          <?php else : ?>
          <?php get_template_part( 'blocks/not_found' ) ?>
        <?php endif ?>
      </div>
    </div>
 </div>
<?php get_footer(); ?>