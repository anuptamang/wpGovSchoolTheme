<?php
/**
 * Template part for displaying team intro
 * **/
?>
   <div class="col-lg-4 d-flex mb-6 mb-lg-0">
      <div class="info-box bg-fade-blue-1 team-summary">
        <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span
            class="icon-multiple-users-silhouette mr-1"></span> पदाधिकारी / कर्मचारी <a href="#"
            class="link text-white font-sm">सबै हेर्नुहोस</a>
        </h2>
        <div class="p-6 members-row">
          <div class="row">
            <?php get_template_part('template-parts/about/team-single'); ?>
          </div>
        </div>
        <div class="popup-holder">
          <?php get_template_part('template-parts/about/team-popups'); ?>
        </div>
      </div>
</div>
    

		