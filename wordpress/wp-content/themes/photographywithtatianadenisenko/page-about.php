<?php get_header(); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container container_narrow">
      <div class="wrap">
        <div class="content">
          <img srcset="<?php echo get_template_directory_uri(); ?>/../../uploads/tatiana-denisenko-photographer.jpg 232w,<?php echo get_template_directory_uri(); ?>/../../uploads/tatiana-denisenko-photographer@2x.jpg 464w" class="tatiana-denisenko-photographer-image" alt="Photographer Tatiana Denisenko">
          <h2 class="content__heading content__heading-top-margin">Hey, I’m Tatiana Denisenko and I’m pleased to welcome you here.</h2>
          <?php the_content(); ?>
        </div>
      </div>
    </div> 
  <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>
