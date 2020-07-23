<?php
/*
Template Name: Template Maintenance
*/
?>

<!DOCTYPE html>
<html lang="ne">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-47680600-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-47680600-1');
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>">
  <?php wp_head() ?>
</head>
<body>
  <div class="site-construction has-bg-watermark" <?php echo (($image = get_field('bg_watermark_maintainence', 'options')) ? 'style="background-image: url('.$image.')"' : '') ?>>
    <div class="construction-wrapper">
      <a href="#" class="construction-logo-holder">
          <div class="img-logo">
             <?php if( $logo = get_field('logo', 'options') ) : ?>
                <?php echo wp_get_attachment_image($logo, 'full') ?>
              <?php endif ?>
          </div>
          <div class="site-title">
            <div class="title"><?php if( $site_title = get_field('site_title', 'options') ) : ?>
                        <?php echo $site_title ?>
                      <?php endif ?></div>
            <address class="m-0 d-none d-md-block"><?php if( $site_sub_title = get_field('site_sub_title', 'options') ) : ?>
                        <?php echo $site_sub_title ?>
                      <?php endif ?></address>
          </div>
        </a>
        <div class="loader">
          <div class="loader__bar"></div>
          <div class="loader__bar"></div>
          <div class="loader__bar"></div>
          <div class="loader__bar"></div>
          <div class="loader__bar"></div>
          <div class="loader__ball"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" enable-background="new 0 0 64 64"><circle cx="32" cy="32" r="30" fill="#ffdd67"/><g fill="#664e27"><circle cx="20.5" cy="24.6" r="5"/><circle cx="43.5" cy="24.6" r="5"/><path d="m48.1 37c-4.3 6.1-9.5 7.6-16.1 7.6s-11.8-1.5-16.1-7.6c-.6-.8-2.2-.3-1.8.9 2.3 8 10 12.7 18 12.7s15.7-4.7 18-12.7c.2-1.2-1.4-1.7-2-.9"/></g></svg></div>
        </div>
        <p class="m-0 mb-2 copyright text-white">&copy; <?php echo date( 'Y' )  ?> <?php _e('सर्बाधिकार', 'government-school') ?> <a href="<?php echo home_url() ?>" class="text-white"><?php echo get_bloginfo('title') ?></a><?php _e('मा
                निहित।', 'government-school') ?></p>
     <div class="site-developer font-weight-bold text-white d-md-flex justify-content-center align-items-center">
        <div class="text-title mb-1"><?php _e('Designed, Developed & Maintained By:', 'base') ?> </div>
        <a class="text-white" href="https://anuptamang.com.np" target="_blank">
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
          <?php _e('Anup K. Tamang', 'base') ?></a>
      </div>
    </div>
  </div>
</body>
</html>