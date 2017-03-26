<?php get_header(); ?>
  <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container container_narrowest">
      <div class="wrap">
        <div class="content">
          <small class="content__post-date"><?php the_time('F jS, Y'); ?></small>
          <h2 class="content__post-heading"><?php the_title_attribute(); ?></h2>
          <?php the_content(); ?>
          <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="content__permalink">Read more</a>
        </div>
      </div>
    </div>   
  <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>Í