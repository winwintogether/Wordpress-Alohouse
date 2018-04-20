<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
<?php endif; ?>
<div id="staff-archive">
<div class="content">

<header class="page-header">
	<h1 class="page-title">Staff</h1>
</header>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content-staff', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>
</div>
</div>
<?php the_posts_navigation(); ?>
