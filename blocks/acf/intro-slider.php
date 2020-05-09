<?php /*
Block title: Intro-Slider
Description: Intro-Slider block.
Keywords: Intro-Slider
Other Avaliable options: Icon, Category.
*/ ?>

<div class="hero-slider">
  <?php while( have_rows('intro-slider') ) : the_row() ?>
    <div class="slide has-bg has-overlay" <?php echo (($image = get_sub_field('image')) ? 'style="background-image: url('.$image.')"' : '') ?>>
    <div class="container">
      <div class="caption">
        <h1 class="text-white">
        <?php if( $heading = get_sub_field('heading') ) : ?>
         <?php echo $heading ?>
        <?php endif ?>    
      </h1>
      <?php if( $link = get_sub_field('link') ) : ?>
        <a href="<?php echo $link ?>" class="btn btn-primary btn-white">
          Learn More
        </a>
        <?php endif ?>
      </div>
    </div>
  </div>
  <?php endwhile ?>
</div>
<?php edit_post_link( __( 'Edit', 'base' ) ); ?>