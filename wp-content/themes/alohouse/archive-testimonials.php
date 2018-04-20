<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
<?php endif; ?>
<div id="staff-archive" class="testimonials-archive">
<div class="content">
<header class="page-header">
	<h1 class="page-title">Our Testimonials</h1>
</header>

<?php get_template_part('templates/content-testimonials-nav', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>

<?php $i = 1; ?>
<?php echo '<div class="row archive-row">'; ?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content-testimonials', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  <?php if($i % 2 == 0) {echo '</div><div class="row">';} ?>
	<?php $i++; ?>
<?php endwhile; ?>
</div>
</div>
</div>
<?php the_posts_navigation(); ?>