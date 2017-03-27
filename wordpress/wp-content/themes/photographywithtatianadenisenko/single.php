<?php get_header(); ?>
<div class="container container_narrowest">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="post">
          <small class="post__date"><?php the_time('F jS, Y'); ?></small>
          <h2 class="post__heading post__heading_margin-top-small"><?php the_title_attribute(); ?></h2>
          <?php the_content(); ?>
      </article>
  <?php endwhile; ?>
  <?php endif; ?>
</div>
<?php get_footer(); ?>