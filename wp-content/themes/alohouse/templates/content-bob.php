<div class="entry">
	<div class="thumb">
		<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail() ) {
    		the_post_thumbnail('large-thumb');
    		}?> 
	</div>
	<div class="entry-content">
        <div class="entry-body">
            <div class="title">
                <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
                <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
            </div>
            <?php echo wp_trim_words(get_the_excerpt(), 15);?>
        </div>
        <div class="entry-footer">
<!--            --><?php //$categories = get_the_category();
//            if ( ! empty( $categories ) ) {
//                echo '<a class="text-button" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">Read More &#8594</a>';
//            } ?>
            <a class="text-button" href="<?php the_permalink(); ?>">Read More &#8594</a>
        </div>
    </div>
</div>