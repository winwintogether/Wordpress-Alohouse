<?php get_template_part('templates/breadcrumbs');?>
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<div class="row">
<div class="blog-header">
<?php use Roots\Sage\Titles; ?>
<h1><?= Titles\title(); ?></h1>
</div>
</div>

<div class="category-latest-posts">
<?php $i = 1; ?>
<?php echo '<div class="row archive-row">'; ?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content-post-image', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  <?php if($i % 3 == 0) {
      echo '</div><div class="row">';} ?>
	<?php $i++; ?>
<?php endwhile; ?>
</div>
</div>
<?php the_posts_navigation(); ?>