<!-- Generic Blogs page -->

<?php get_header() ?> 
  <section class="intro-banner has-bg has-overlay"  <?php echo (($image = get_field('image', 'options')) ? 'style="background-image: url('.$image.')"' : '') ?>>
    <div class="container block-vc d-flex align-items-center justify-content-center">
      <div class="caption text-center">
        <h1 class="text-white"><?php echo (($heading = get_field('heading', 'options')) ?  $heading: '') ?></h1>
      </div>
    </div>
  </section>
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
<?php get_footer() ?>
