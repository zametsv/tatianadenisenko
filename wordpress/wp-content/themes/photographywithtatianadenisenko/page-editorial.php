<?php get_header(); ?>
<div class="container container_wide">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="portfolio-content">
    <?php the_content(); ?>
  </div>      
  <?php endwhile; ?>
  <?php endif; ?>
</div>  
<?php get_footer(); ?>