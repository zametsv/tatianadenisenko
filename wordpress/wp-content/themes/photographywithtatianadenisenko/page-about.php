<?php get_header(); ?>
<div class="container container_narrow">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article class="post post_clearfix">    
    <img srcset="<?php echo get_template_directory_uri(); ?>/../../uploads/tatiana-denisenko-photographer.jpg 232w,<?php echo get_template_directory_uri(); ?>/../../uploads/tatiana-denisenko-photographer@2x.jpg 464w" class="tatiana-denisenko-photographer-image" alt="Photographer Tatiana Denisenko">
    <h2 class="post__heading post__heading_margin-top">Hey, I’m Tatiana Denisenko and I’m pleased to welcome you here.</h2>
    <?php the_content(); ?>
  </article>  
  <?php endwhile; ?>
  <?php endif; ?>
</div>  
<?php get_footer(); ?>
