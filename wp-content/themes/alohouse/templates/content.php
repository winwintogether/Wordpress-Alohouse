<article <?php post_class(); ?>>
  <div class="index-blog">
  <div class="featured-image">
  <?php if ( has_post_thumbnail() ) {
    the_post_thumbnail('thumbnail');
    }?> 
  </div>
  <div class="article">
  <header>
    <h1 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
  </div>
  </div>
</article>
