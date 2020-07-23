<?php /*
Block title: block timeline
Description: block timeline block.
Keywords: block timeline
Other Avaliable options: Icon, Category.
*/ ?>

<div class="timeline">
  <ul>
    <?php while( have_rows('intro_timeline') ) : the_row() ?>    
      <li>
        <div class="content has-anim fadeInUp">
          <?php if( $title = get_sub_field('title') ) : ?>
            <h3><?php echo $title ?></h3>
          <?php endif ?>
        </div>
        <div class="time has-anim fadeInUp">
           <?php if( $date = get_sub_field('date') ) : ?>
            <h4><?php echo $date ?></h4>
          <?php endif ?>
        </div>
      </li>
    <?php endwhile ?>
  </ul>
</div>