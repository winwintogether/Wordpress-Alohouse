<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time> 
<?php $categories = get_the_category();
if ( ! empty( $categories ) ) {
    echo '<a class="button tiny hollow" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
} ?>
