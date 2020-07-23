<section class="page-intro has-bg has-overlay blue" <?php echo (($image = get_field('banner_blue', 'options')) ? 'style="background-image: url('.$image.')"' : '') ?>>
  <div class="container block-vc d-flex align-items-center justify-content-center">
    <div class="caption text-center">
      <h1 class="text-white"><?php single_cat_title(); ?></h1>
    </div>
  </div>
</section>