<?php use Roots\Sage\Titles; ?>

<?php $image_large = wp_get_attachment_image_url( get_post_meta( get_the_ID(), 'large_header_image_id', 1 ), 'full'); ?>
<?php $image_medium = wp_get_attachment_image_url( get_post_meta( get_the_ID(), 'medium_header_image_id', 1 ), 'full'); ?>
<?php $image_small = wp_get_attachment_image_url( get_post_meta( get_the_ID(), 'small_header_image_id', 1 ), 'full'); ?>

<?php if (!empty($image_large)) { ?>

<div id="page-image">
<div class="pages-header" data-interchange="[<?php echo $image_small ?>, small], [<?php echo $image_medium ?>, medium], [<?php echo $image_large ?>, large]">
</div>
</div>

<?php } else { ?>

<?php } ?>


<?php get_template_part('templates/breadcrumbs');?>
