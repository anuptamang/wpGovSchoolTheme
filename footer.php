        </main>
        <footer id="footer" class="bg-primary has-bg-watermark" <?php echo (($image = get_field('bg_watermark_maintainence', 'options')) ? 'style="background-image: url('.$image.')"' : '') ?>>
      <div class="container py-8 py-lg-12 text-center text-md-left">
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0 has-anim fadeInLeft">
            <div class="img-logo">
              <a href="<?php echo home_url() ?>" class="img">
                <?php if( $logo = get_field('logo', 'options') ) : ?>
                  <?php echo wp_get_attachment_image($logo, 'full') ?>
                <?php endif ?>
              </a>
            </div>
            <h4 class="text-white mb-4"><?php _e('सम्पर्क ठेगाना' , 'government-school') ?></h4>
            <address class="text-white">
              <?php if( $footer_address = get_field('footer_address', 'options') ) : ?>
                  <?php echo $footer_address ?>
                <?php endif ?>
            </address>
            
          </div>
          <div class="col-md-4 mb-4 mb-md-0 has-anim fadeInUp">
            <h4 class="text-white mb-4"><?php _e('उपयोगी लिंकहरु', 'government-school') ?></h4>
            <?php if($footer_links = get_field('footer_links', 'options')): ?>
                <ul class="list-unstyled nav-footer row">
                <?php foreach ($footer_links as $footer_link): ?>
                  <li class="col-sm-6">
                      <a class="text-white" href="<?php echo $footer_link['url'] ? $footer_link['url'] : '#'; ?>" target="_blank">
                      <?php echo $footer_link['title'] ?>
                    </a>
                  </li>
              <?php endforeach; ?>
                </ul>
                
            <?php endif ?>
            <div class="fb-share-plugin overflow-hidden">
              <?php if( $facebook_widget = get_field('facebook_widget', 'options') ) : ?>
               <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F<?php echo $facebook_widget ?>%2F&tabs=timeline&width=340&height=320&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              <?php endif ?>
            </div>
          </div>
          <div class="col-md-4 has-anim fadeInRight">
            <div class="pl-xl-10">
              <h4 class="text-white mb-4"><?php _e('सम्पर्क गर्नुहोस', 'government-school') ?></h4>
              <?php if( $contact_form = get_field('contact_form', 'options') ) : ?>
                <?php echo do_shortcode($contact_form) ?>
              <?php endif ?>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bar bg-blue-2">
        <div class="container py-3 text-center text-lg-left text-white">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <p class="mb-2 mb-lg-0 copyright">&copy; <?php echo date( 'Y' )  ?> <?php _e('सर्बाधिकार', 'government-school') ?> <a href="<?php echo home_url() ?>" class="text-white"><?php echo get_bloginfo('title') ?></a><?php _e('मा
                निहित।', 'government-school') ?></p>
            </div>
            <div class="col-lg-6">
              <div class="site-developer font-weight-bold text-white d-md-flex justify-content-center justify-content-lg-end align-items-center">
                  <div class="text-title mb-1 mb-md-0"><?php _e('Designed, Developed & Maintained By:', 'base') ?> </div><a class="text-white" href="https://anuptamang.com.np" target="_blank">
                  <span class="img">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 58.6 55" xml:space="preserve">
                        <style>
                          .st0{fill:url(#skyfallGradBracket)}
                        </style>
                        <switch>
                          <g>
                            <path class="st0" d="M3.1 10.7c.6 4.5 1.1 5.5 1.1 10 0 2.8-4.2 5.2-4.2 5.2v3.4s4.2 2.4 4.2 5.2c0 4.5-.6 5.5-1.1 10-.9 7.1 2.2 10.5 5 10.5H14v-6.9s-5 .7-5-3.4c0-3.1.6-3.1 1.1-10 .3-3.1-1.4-5.5-3.1-7.2 1.7-1.7 3.4-3.8 3.1-6.9-.9-6.8-1.1-6.8-1.1-9.9 0-4.1 5-3.8 5-3.8V0H8.1C5 0 2.2 3.4 3.1 10.7z"/>
                            <path d="M126.1 96.4c-.2-.4-.6-.6-1-.6h-15.2l2.5-19.4c.1-.6-.4-1.2-1-1.3-.4 0-.9.2-1.1.5l-18.4 32.3c-.3.5-.2 1.3.4 1.6.2.1.4.2.6.2h14.9l-2 19.5c0 .6.4 1.2 1.1 1.3.4 0 .8-.2 1.1-.5l18.1-32.3c.2-.5.2-1 0-1.3z"/>
                            <path class="st0" d="M55.5 44.7c-.5-4.5-1-5.5-1-10 0-2.7 4.2-5.1 4.2-5.1v-3.4s-4.1-2.5-4-5.2c.1-4.5.6-5.5 1.2-9.9C56.8 3.9 53.8.4 51.1.4S45.4.3 45.4.3l-.1 6.9s4.9-.6 4.9 3.5c0 3.1-.6 3.1-1.2 9.9-.3 3.1 1.3 5.5 2.9 7.2-1.7 1.7-3.3 3.7-3.1 6.8.7 6.9 1 6.9 1 10 0 4.1-5 3.7-5 3.7l-.1 6.9s2.7 0 5.7.1 5.9-3.4 5.1-10.6z"/>
                            <linearGradient id="skyfallGradBracket" gradientUnits="userSpaceOnUse" x1="-272.207" y1="388.084" x2="-261.119" y2="399.172" gradientTransform="matrix(2.6667 0 0 -2.6667 740.625 1077.448)">
                              <stop offset="0" stop-color="#0098db"/>
                              <stop offset="1" stop-color="#f3c808"/>
                            </linearGradient>
                            <linearGradient id="skyfallGradLogo" gradientUnits="userSpaceOnUse" x1="-272.207" y1="388.084" x2="-261.119" y2="399.172" gradientTransform="matrix(2.6667 0 0 -2.6667 740.625 1077.448)">
                              <stop offset="0" stop-color="#0098db"/>
                              <stop offset="1" stop-color="#f3c808"/>
                            </linearGradient>
                            <path d="M46.1 21.6c-.2-.4-.6-.6-1-.6H30.3l2.5-18.9c.1-.6-.4-1.2-1-1.2-.4 0-.8.2-1.1.5l-18 31.5c-.3.5-.2 1.2.4 1.6.2.1.4.2.6.2h14.6l-2 19c0 .6.4 1.2 1 1.2.4 0 .8-.2 1-.5L46 22.9c.3-.5.3-1 .1-1.3z" fill="url(#skyfallGradLogo)"/>
                          </g>
                        </switch>
                      </svg>
                  </span>
                    <?php _e('Anup K. Tamang', 'government-school') ?></a>
                </div>
            </div>
          </div>
        </div>
        <a href="#wrapper" class="btn btn-primary bg-danger btn-bg-animate btn-sm no-after-icon btn-top"><span class="icon-arrow-up"></span></a>
      </div>
    </footer>
      <?php wp_footer() ?>
    </div>
  </body>
</html>
