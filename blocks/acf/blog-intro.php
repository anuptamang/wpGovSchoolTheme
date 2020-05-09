<?php /*
Block title: Blog Intro
Description: Blog Intro block.
Keywords: Blog Intro
Other Avaliable options: Icon, Category.
*/ ?>

<section class="intro-banner has-bg has-overlay"  <?php echo (($image = get_field('image')) ? 'style="background-image: url('.$image.')"' : '') ?>>
    <div class="container block-vc d-flex align-items-center justify-content-center">
      <div class="caption text-center">
        <h1 class="text-white"><?php echo (($heading = get_field('heading')) ?  $heading: '') ?></h1>
      </div>
    </div>
  </section>