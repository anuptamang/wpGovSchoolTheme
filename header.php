<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">
  <script type="text/javascript">
    var pathInfo = {
      base: '<?php echo get_template_directory_uri() ?>/',
      css: 'css/',
      js: 'js/',
      swf: 'swf/',
    }
  </script>
  <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
  <div id="wrapper">
  <header id="header">
			<div class="top-bar bg-blue text-white py-3">
				<div class="container d-flex">
          <?php 
          echo date('l jS \of F Y');
          ?> | 
          <?php echo get_nepali_today_date(); ?>
          <?php if( has_nav_menu( 'top' ) )
              wp_nav_menu( array(
                'container' => false,
                'theme_location' => 'top',
                'menu_class'     => 'list-inline justify-content-center justify-content-md-start',
                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'link_class'   => 'text-reset'
              )); ?>
              <?php if($socials = get_field('social', 'options')): ?>
                <ul class="list-inline social-networks ml-auto">
                <?php foreach ($socials as $social): ?>
                  <li>
                      <a class="text-reset" href="<?php echo $social['link'] ? $social['link'] : '#'; ?>" target="_blank">
                      <span class="<?php echo $social['icon'] ? $social['icon'] : 'default'; ?>"></span>
                    </a>
                  </li>
              <?php endforeach; ?>
                </ul>
            <?php endif ?>
				</div>
			</div>
			<div class="container header-holder py-3 py-lg-6">
				<div class="logo">
          <?php if( is_front_page() ) : ?>
              <?php if($logo = get_field('logo-white', 'options')): ?>
                  <a href="<?php echo home_url() ?>">
                    <?php echo wp_get_attachment_image($logo, 'full') ?>
                  </a>
              <?php endif ?>
            <?php else: ?>
              <?php if($logo = get_field('logo', 'options')): ?>
                <a href="<?php echo home_url() ?>">
                  <?php echo wp_get_attachment_image($logo, 'full') ?>
                </a>
            <?php endif ?>
          <?php endif ?>
        </div>
				<div class="header-block">
					<nav id="nav" class="main-nav">
						<a href="#" class="nav-opener"><span></span></a>
						<div class="nav-drop">
              <?php if( has_nav_menu( 'primary' ) )
              wp_nav_menu( array(
                'container' => false,
                'theme_location' => 'primary',
                'menu_id'        => 'navigation',
                'menu_class'     => 'navigation',
                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'walker'         => new Custom_Walker_Nav_Menu
              )); ?>
							<div class="ul list-inline list-panes align-items-center">
								<li><a href="<?php echo get_site_url() ?>/2020/05/03/donate-to-the-heavens-hope/" class="btn btn-primary btn-white font-halyard-book">give</a></li>
								<li><a href="<?php echo get_site_url() ?>/log-in" class="btn btn-primary btn-white font-halyard-book">login</a></li>
								<li class="d-none d-md-block">
									<div class="search-holder">
                    <?php if( is_front_page() ) : ?>
                        <a href="#" class="search-opener text-white"><span class="icon-search"></span></a>
                      <?php else: ?>
                        <a href="#" class="search-opener"><span class="icon-search"></span></a>
                    <?php endif ?>
										<div class="search-drop">
											 <?php get_search_form() ?>
										</div>
									</div>
								</li>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</header>
    <main role="main" aria-label="Content">
