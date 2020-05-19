<?php get_header() ?>

<?php get_template_part('blocks/intro-banner'); ?>

<div class="container py-10">
  <?php while ( have_posts() ) : the_post() ?>
  <div class="post-date mb-4"><?php _e('प्रकाशित मिति:','government-school') ?> <?php echo get_the_date() ?></div>
  <?php the_content() ?>
  <?php edit_post_link( __( 'Edit', 'government-school' ) ); ?>
<?php endwhile ?>

<!-- <?php 
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
 ?> -->
</div>
<?php get_footer() ?>