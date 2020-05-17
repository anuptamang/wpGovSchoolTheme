<?php /*
Block title: Home Team
Description: Home Team block.
Keywords: Home Team
Other Avaliable options: Icon, Category.
*/ ?>

<!-- <section class="container py-8 py-lg-15">
  <div class="row">
    <?php while( have_rows('home_intro') ) : the_row() ?>
    <div class="col-lg-8 d-flex mb-6 mb-lg-0 about-summary">
      <div class="info-box bg-fade-blue-1 pb-lg-20">
        <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span class="icon-comments mr-1"></span>
         <?php if( $intro_heading = get_sub_field('intro_heading') ) : ?>
          <?php echo $intro_heading ?>
         <?php endif ?>
      </h2>
        <div class="p-6 text-justify">
            <?php if( $intro_description = get_sub_field('intro_description') ) : ?>
              <?php echo $intro_description ?>
            <?php endif ?>
            <div class="text-right btn-holder"><a href="http://localhost:4040/mahendraMabi/हाम्रो-बारे/परिचय/" class="btn btn-primary">थप पढ्नुहोस</a></div>
          </div>
        </div>
      </div>
    <?php endwhile ?>
    <div class="col-lg-4 d-flex mb-6 mb-lg-0">
      <div class="info-box bg-fade-blue-1 team-summary">
        <h2 class="h4 block-heading bg-primary text-white px-6 py-4 mb-0"><span
            class="icon-multiple-users-silhouette mr-1"></span> पदाधिकारी / कर्मचारी <a href="http://localhost:4040/mahendraMabi/हाम्रो-बारे/पदाधिकारी-कर्मचारी-बिवर/"
            class="link text-white font-sm">सबै हेर्नुहोस</a>
        </h2>
        <div class="p-6 members-row">
          <div class="row">
            <?php $teamId = 0; while( have_rows('home_team') ) : the_row() ; $teamId++ ?>
            <div class="col-md-4 col-lg-12">
              <div class="member-block">
                <a href="#popup-<?php echo $teamId ?>" data-fancybox class="img-holder has-bg img-avatar" <?php echo (($image = get_sub_field('image')) ? 'style="background-image: url('.$image.')"' : '') ?>></a>
                <div class="description">
                  <h5>
                      <?php if( $name = get_sub_field('name') ) : ?>
                        <?php echo $name ?>
                      <?php endif ?>
                  </h5>
                  <p>
                    <?php if( $role = get_sub_field('role') ) : ?>
                        <?php echo $role ?>
                      <?php endif ?>
                  </p>
                  <a href="#popup-<?php echo $teamId ?>" class="btn btn-primary btn-sm lightbox">थप पढ्नुहोस</a>
                </div>
              </div>
            </div>
            <?php endwhile ?>
          </div>
        </div>
        <div class="popup-holder">
          <?php $teamId = 0; while( have_rows('home_team') ) : the_row() ; $teamId++ ?>
          <div id="popup-<?php echo $teamId ?>" class="lightbox team-lightbox">
            <div class="container container-sm py-4">
              <div class="main-member-detail text-center text-md-left">
                <div class="img-holder has-bg img-avatar" <?php echo (($image = get_sub_field('image')) ? 'style="background-image: url('.$image.')"' : '') ?>></div>
                <div class="description">
                  <h2>
                    <?php if( $name = get_sub_field('name') ) : ?>
                        <?php echo $name ?>
                      <?php endif ?>
                    </h2>
                  
                    <?php if( $description = get_sub_field('description') ) : ?>
                      <?php echo $description ?>
                    <?php endif ?>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile ?>
        </div>
      </div>
    </div>
  </div>
</section> -->