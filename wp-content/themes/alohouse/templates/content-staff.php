<?php if (is_single()) { ?>
<div class="staff-item single">
    <?php } else { ?>
    <div class="staff-item">
        <? } ?>

        <div class="staff-image">
            <?php if (has_post_thumbnail($post->ID)): ?>
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'staff-photo'); ?>
                <img class="img-circle" src="<?php echo $image[0]; ?>">
            <?php endif; ?>

        </div>
        <div class="staff-bio">
            <div class="entry-header">
                <?php the_title('<h2 class="staff-name">', '</h1>'); ?>
                <?php
                global $post;
                $text = get_post_meta($post->ID, '_acadia_staff_title', true);
                ?>
                <h2 class="staff-title"><?php echo $text ?></h2>
            </div>
            <? if (is_single()) {
                the_content();
            } else {
                the_excerpt();
            } ?>
        </div>
    </div>
<? if (is_single()) {
} else {
    echo '<hr>';
} ?>