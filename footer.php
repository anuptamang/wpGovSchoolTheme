        </main>
      <footer id="footer" class="bg-blue text-white">
        <div class="container py-8 py-lg-16">
          <div class="row">
            <div class="col-md-3">
              <div class="logo mb-3">
                <?php if($logo = get_field('logo-white', 'options')): ?>
                  <a href="<?php echo home_url() ?>">
                    <?php echo wp_get_attachment_image($logo, 'full') ?>
                  </a>
              <?php endif ?>
              </div>
              <?php if($locations = get_field('hope_office', 'options')): ?>
                <?php foreach ($locations as $location): ?>
                  <address class="mb-4">
                    <strong class="font-weight-medium d-block"><?php echo $location['title'] ?></strong>
                    <?php echo $location['address'] ?>
                    <a class="text-reset" href="mailto:<?php echo $location['email'] ?>"><?php echo $location['email'] ?></a>
                  </address>
              <?php endforeach; ?>
            <?php endif ?>
              <?php if($socials = get_field('social', 'options')): ?>
                <ul class="list-inline social-networks">
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
            <div class="col-md-3">
              <?php if($locations = get_field('south_end_location', 'options')): ?>
                <?php foreach ($locations as $location): ?>
                  <address class="mb-4">
                    <strong class="font-weight-medium d-block"><?php echo $location['title'] ?></strong>
                    <?php echo $location['address'] ?>
                    <a class="text-reset" href="mailto:<?php echo $location['email'] ?>"><?php echo $location['email'] ?></a>
                  </address>
              <?php endforeach; ?>
            <?php endif ?>
              
              <?php if($locations = get_field('cotswold_location', 'options')): ?>
                <?php foreach ($locations as $location): ?>
                  <address class="mb-64">
                    <strong class="font-weight-medium d-block"><?php echo $location['title'] ?></strong>
                    <?php echo $location['address'] ?>
                    <a class="text-reset" href="mailto:<?php echo antispambot($location['email']) ?>"><?php echo antispambot($location['email']) ?></a>
                  </address>
              <?php endforeach; ?>
            <?php endif ?>
            </div>
            <div class="col-md-3">
              <?php if($locations = get_field('hope_office', 'options')): ?>
                <?php foreach ($locations as $location): ?>
                  <address class="mb-64">
                    <strong class="font-weight-medium d-block"><?php echo $location['title'] ?></strong>
                    <?php echo $location['address'] ?>
                    <a class="text-reset" href="mailto:<?php echo $location['email'] ?>"><?php echo $location['email'] ?></a>
                  </address>
              <?php endforeach; ?>
            <?php endif ?>
            </div>
            <div class="col-md-3">
              <div class="bg-blue-2 px-4 px-lg-7 pt-4 pt-lg-7 pb-1 contact-form">
                  <?php echo do_shortcode('[contact-form-7 id="176" title="Contact form 1"]') ?>
              </div>
            </div>
          </div>
          <div class="copyright">
            <span class="regd">®</span> <?php echo date( 'Y' )  ?> <a href="<?php echo home_url() ?>" class="text-reset"> <?php echo get_bloginfo('name') ?></a>
          </div>
        </div>
      </footer>
      <?php wp_footer() ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url');?>/js/jquery-3.3.1.min.js"><\/script>')</script>
<script src="<?php bloginfo('template_url');?>/js/jquery.main.js"></script>
  </body>
</html>
