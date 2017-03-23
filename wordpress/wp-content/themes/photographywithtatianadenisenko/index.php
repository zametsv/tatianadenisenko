<?php get_header(); ?>
  <div class="container container_small-margin">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/../../uploads/main-hero-image-responsive.jpg 414w, <?php echo get_template_directory_uri(); ?>/../../uploads/main-hero-image-responsive@2x.jpg 828w" media="(max-width: 414px)">
      <img srcset="<?php echo get_template_directory_uri(); ?>/../../uploads/main-hero-image.jpg 960w, <?php echo get_template_directory_uri(); ?>/../../uploads/main-hero-image@2x.jpg 1920w" class="main-hero-image" alt="Outstanding photo by Tatiana Denisenko">
    </picture>
  </div>
<?php get_footer(); ?>