<?php get_header(); ?>
<div class="container container_narrowest">
  <?php query_posts('post_type=post&post_status=publish&posts_per_page=9999&paged='. get_query_var('paged')); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="post post_padding-top">
          <small class="post__date"><?php the_time('F jS, Y'); ?></small>
          <h2 class="post__heading post__heading_margin-top-small"><?php the_title_attribute(); ?></h2>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="post__permalink">Read more</a>
      </article>
  <?php endwhile; ?>
  <?php endif; ?>
</div>  
<?php get_footer(); ?>