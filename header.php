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
  <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;600;700&display=swap" rel="stylesheet">
  <?php wp_head() ?>
</head>
<body <?php body_class() ?> <?php echo (($image = get_field('bg_watermark', 'options')) ? 'style="background-image: url('.$image.')"' : '') ?>>
  <div id="wrapper">
    <div data-progress></div>
    <div class="loading">
      <div class="loader">
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__ball"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" enable-background="new 0 0 64 64"><circle cx="32" cy="32" r="30" fill="#ffdd67"/><g fill="#664e27"><circle cx="20.5" cy="24.6" r="5"/><circle cx="43.5" cy="24.6" r="5"/><path d="m48.1 37c-4.3 6.1-9.5 7.6-16.1 7.6s-11.8-1.5-16.1-7.6c-.6-.8-2.2-.3-1.8.9 2.3 8 10 12.7 18 12.7s15.7-4.7 18-12.7c.2-1.2-1.4-1.7-2-.9"/></g></svg></div>
      </div>
    </div>
    <header id="header">
      <div class="top-bar bg-blue-2">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-md-7 text-white">
            <div class="date-info text-center text-md-left mb-1 mb-md-0">
              <a href="https://www.hamropatro.com/" target="_blank" class="text-white">
                <span class="icon-calendar"></span>
                <?php echo date('l jS \of F Y'); ?> | 
                <?php echo get_nepali_today_date(); ?>
                <span class="np-flag"><?php if( $nepal_flag = get_field('nepal_flag', 'options') ) : ?>
                        <?php echo wp_get_attachment_image($nepal_flag, 'full') ?>
                      <?php endif ?></span>
              </a>
            </div>
          </div>
          <div class="col-md-5 d-flex justify-content-center justify-content-md-end align-items-center">
            <ul class="list-inline social-networks d-flex justify-content-center justify-content-md-end mb-0 mx-n1 mx-md-n2">
              <li class="list-inline-item m-0 px-1 px-md-2">
                <?php if( $facebook = get_field('facebook', 'options') ) : ?>
                  <a href="<?php echo $facebook ?>" class="text-white"><span class="icon-facebook2"></span></a>
                <?php endif ?>
              </li>
              <li class="list-inline-item m-0 px-1 px-md-2">
                <?php if( $youtube = get_field('youtube', 'options') ) : ?>
                  <a href="<?php echo $youtube ?>" class="text-white"><span class="icon-youtube2"></span></a>
                <?php endif ?>
              </li>
            </ul>
            <div class="e-btn-holder d-inline-block ml-2">
                <?php $the_query = new WP_Query(array('pagename' => 'epati')); ?>
                <?php while( $the_query -> have_posts() ) : $the_query -> the_post(); ?> 
                <a href="<?php echo the_permalink() ?>" target="_blank" class="btn btn-primary bg-danger btn-bg-animate btn-sm no-after-icon">
                    <span class="icon-IE mr-1"></span>- <?php the_title() ?>
                  </a>
              <?php endwhile ?>
              </div>
            <div class="e-btn-holder d-inline-block ml-2">
              <?php $the_query = new WP_Query(array('pagename' => 'elearning')); ?>
                <?php while( $the_query -> have_posts() ) : $the_query -> the_post(); ?> 
                <a href="<?php echo the_permalink() ?>" target="_blank" class="btn btn-primary bg-danger btn-bg-animate btn-sm no-after-icon">
                    <span class="icon-IE mr-1"></span>- <?php the_title() ?>
                  </a>
              <?php endwhile ?>
              </div>
            </div>
            </div>
          </div>
        </div>
      <div class="sticky-header-wrapper">
        <div class="header-holder bg-primary">
          <div class="container py-1 py-lg-0">
            <div class="row align-items-center">
              <div class="col-md-8 col-lg-5 d-flex">
                <a href="<?php echo home_url() ?>" class="logo-holder">
                  <div class="img-logo">
                    <div class="img">
                      <?php if( $logo = get_field('logo', 'options') ) : ?>
                        <?php echo wp_get_attachment_image($logo, 'full') ?>
                      <?php endif ?>
                    </div>
                  </div>
                  <div class="site-title">
                    <div class="title">
                      <?php echo get_bloginfo('title') ?>
                    </div>
                    <address class="m-0">
                      <?php echo get_bloginfo('description') ?>
                    </address>
                  </div>
                   <span class="np-flag"><?php if( $nepal_flag = get_field('nepal_flag', 'options') ) : ?>
                        <?php echo wp_get_attachment_image($nepal_flag, 'full') ?>
                      <?php endif ?></span>
                </a>
              </div>
              <div class="col-md-4 col-lg-7">
                <nav id="nav" class="main-nav">
                  <a href="#" class="nav-opener"><span></span></a>
                  <div class="nav-drop">
                    <div class="nav-wrap">
                        <?php if( has_nav_menu( 'primary' ) )
                        wp_nav_menu( array(
                          'container' => false,
                          'theme_location' => 'primary',
                          'menu_id'        => 'navigation',
                          'menu_class'     => 'navigation',
                          'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                          'walker'         => new Custom_Walker_Nav_Menu
                            )); ?>
                        <div class="list-panes d-flex m-0 d-md-none">
                          <div class="search-holder d-flex">
                            <a href="#" class="search-opener"><span class="icon-magnifier"></span></a>
                            <div class="search-drop">
                              <?php get_search_form() ?>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="news-bar-wrapper">
        <div class="news-bar text-white">
          <div class="container d-md-flex">
            <div class="title d-none d-md-block">
              <a class="text-white" href="#"><span class="icon-bullhorn mr-3"><span></span></span> <?php _e('ताजा समाचार', 'government-school') ?> :</a>
            </div>
            <?php $category = new WP_Query( 'category_name=news&posts_per_page=10' ); ?>
              <div class="news-bar-slider">
              
                <?php while($category->have_posts()) : $category->the_post(); ?>
              
                <div class="slide"><a class="news-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
                <?php endwhile;
                  wp_reset_postdata();
                  ?>
              </div>
          </div>
        </div>
        <div class="container search-hold-wrapper d-flex justify-content-end">
          <div class="search-holder d-none d-md-flex">
            <a href="#" class="search-opener"><span class="icon-magnifier"></span></a>
            <div class="search-drop">
              <?php get_search_form() ?>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main role="main">
