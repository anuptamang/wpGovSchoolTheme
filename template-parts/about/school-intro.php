<?php
/**
 * Template part for displaying school intro
 * **/
?>

<?php $the_query = new WP_Query(array( 'pagename' => 'about-us/intro' )); ?>
    <?php while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>  

<div class="info-box bg-fade-blue-1 pb-lg-20">
    <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span class="icon-comments mr-1"></span> <?php echo get_bloginfo('title') ?><?php _e('को संक्षिप्त परिचय', 'government-school') ?></h2>
    <div class="p-6 text-justify">
      <?php echo wp_trim_words( get_the_content(), 150, ' [...]' ); ?>
      <div class="text-right btn-holder"><a href="<?php echo the_permalink() ?>" class="btn btn-primary"><?php _e('थप पढ्नुहोस', 'government-school') ?></a></div>
    </div>
  </div>
<?php endwhile; ?>