<div class="modality modality-loop">
    <div class="entry">
        <div class="entry-header">
            <?php $image_url = esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full'));
            if ($image_url != "") {
                ?>
                <img src="<?php echo $image_url; ?>" alt="Image Section"/>
            <?php }
            ?>
        </div>
        <div class="entry-content">
            <h2><?php the_title(); ?></h2>
            <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
        </div>
        <div class="entry-footer">
            <a class="text-button" href="<?php the_permalink(); ?>">Read More 	&#8594</a>
        </div>
    </div>
</div>
