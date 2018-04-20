<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
<?php endif; ?>
<div id="staff-archive" class="modalities-archive">
<div class="content">

<header class="page-header">
	<h1 class="page-title">Treatment Modalities</h1>
</header>
    <div class="entry-list">
    <?php $i = 1; ?>
    <?php echo '<div class="row">'; ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php global $post; ?>
        <?php get_template_part('templates/content-modalities', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
        <?php if($i % 3 == 0) {echo '</div><div class="row">';} ?>
        <?php $i++; ?>
    <?php endwhile; ?>
    </div>
</div>

</div>
</div>
<?php the_posts_navigation(); ?>