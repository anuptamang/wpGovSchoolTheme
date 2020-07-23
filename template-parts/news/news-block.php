<ul class="list-inline d-flex tabset mb-0">
  <li>
    <a class="btn btn-primary bg-danger btn-sm no-after-icon active"  href="#news-notices"><span class="icon-bell mr-1"></span> <?php _e('सूचना', 'government-school') ?></a>
  </li>
  <li>
    <a class="btn btn-primary bg-danger btn-sm no-after-icon" href="#programs"><span class="icon-event_available mr-1"></span> <?php _e('कार्यक्रम', 'government-school') ?></a>
  </li>
  <li>
    <a class="btn btn-primary bg-danger btn-sm no-after-icon" href="#directives"><span class="icon-news mr-1"></span> <?php _e('निर्देशिका', 'government-school') ?></a>
  </li>
</ul>
<div class="info-box bg-blue-2 mb-6 no-top-left-radius">
  <div class="tab-content">
    <div id="news-notices" class="tab">
        <div class="jcf-scrollable">
          <?php get_template_part('template-parts/news/news-list'); ?>
        </div>
        <div class="text-center btn-more-holder"><a href="<?php echo home_url( '/information-center/news-notices/' ) ?>" class="btn btn-primary btn-sm btn-white no-after-icon"><span
              class="icon-remove_red_eye mr-1"></span><?php _e('सबै हेर्नुहोस','government-school') ?></a></div>
    </div>
    <div id="programs" class="tab">
        <div class="jcf-scrollable">
           <?php get_template_part('template-parts/news/news-list'); ?>
        </div>
        <div class="text-center btn-more-holder"><a href="<?php echo home_url( '/information-center/programs/' ) ?>" class="btn btn-primary btn-sm btn-white no-after-icon"><span
            class="icon-remove_red_eye mr-1"></span><?php _e('सबै हेर्नुहोस','government-school') ?></a></div>
    </div>
    <div id="directives" class="tab">
        <div class="jcf-scrollable">
          <?php get_template_part('template-parts/news/news-list'); ?>
        </div>
        <div class="text-center btn-more-holder"><a href="<?php echo home_url( '/faculties/directives/' ) ?>" class="btn btn-primary btn-sm btn-white no-after-icon"><span
            class="icon-remove_red_eye mr-1"></span><?php _e('सबै हेर्नुहोस','government-school') ?></a></div>
    </div>
  </div>
</div>


  <!-- <div class="info-box bg-blue-2 mb-6">
    <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span class="icon-news mr-1"></span>
      <?php _e('सूचना तथा समाचार','government-school') ?> <a href="<?php echo home_url( '/information-center/news-notices/' ) ?>" class="link text-decoration-none font-sm"><span
          class="icon-remove_red_eye mr-1"></span><?php _e('सबै हेर्नुहोस','government-school') ?></a>
    </h2>
    <div class="jcf-scrollable">
      <?php get_template_part('template-parts/news/news-list'); ?>
    </div>
  </div> -->