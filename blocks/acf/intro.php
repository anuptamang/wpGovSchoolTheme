<?php /*
Block title: Intro
Description: Intro block.
Keywords: Intro
Other Avaliable options: Icon, Category.
*/ ?>

<div class="base-section<?php echo ((isset($block['className']) && $c = $block['className']) ? ' '.$c : '') ?>">
  <?php if( $heading = get_field('heading') ) : ?>
  <h1><?php echo $heading ?></h1>
  <?php endif ?>
<div>
