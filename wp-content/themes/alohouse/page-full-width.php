<?php /* Template Name: Full Width  */ ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header-full'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
