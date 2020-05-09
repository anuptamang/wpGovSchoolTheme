<?php
/*
Block title: Services
Description: Services block.
Keywords: Services
Other Avaliable options: Icon, Category.
*/
?>

  <div class="container py-10">
    <div class="row">
    <?php while (have_rows('services')):
      the_row(); ?>
    <div class="col-md-4">
      <?php if ($title = get_sub_field('title')): ?>
       <h4><?php echo $title; ?></h4>
      <?php endif; ?>
      <?php if ($description = get_sub_field('description')): ?>
       <p><?php echo $description; ?></p>
      <?php endif; ?>
      <?php if ($image = get_sub_field('image')): ?>
      <?php echo wp_get_attachment_image($image, 'full'); ?>
      <?php endif; ?>
    </div>
    <?php
    endwhile; ?>
  </div>
</div>
<?php edit_post_link(__('Edit', 'base')); ?>
