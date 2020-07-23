<?php /*
Block title: epati meta
Description: epati meta block.
Keywords: epati meta
Other Avaliable options: Icon, Category.
*/ ?>

<ul class="list-inline article-meta">
  <li class="list-inline-item">पोष्टकर्ता : <span class="author text-primary">
    <?php if( $author = get_field('author') ) : ?>
    <?php echo $author ?>
    <?php endif ?>
  </span></li>
  <li class="list-inline-item">
    प्रकार: <span class="text-primary"><?php 
      $categories = get_the_category();
      echo esc_html( $categories[1]->name );  
    ?></span>
  </li>
  <?php if( $author_category = get_field('author_category') ) : ?>
    <li class="list-inline-item">समुह : 
      <span class="text-primary">
      <?php echo $author_category ?>
      </span>
    </li>
  <?php endif ?>
  <?php if( $author_class = get_field('author_class') ) : ?>
    <li class="list-inline-item">कक्षा : 
      <span class="text-primary">
      <?php echo $author_class ?>
      </span>
    </li>
  <?php endif ?>
</ul>


