
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="center-10-col">
  <div class="content">
      <?php get_template_part('templates/content', 'page'); ?>
  </div>
  </div>
<?php endwhile; ?>
