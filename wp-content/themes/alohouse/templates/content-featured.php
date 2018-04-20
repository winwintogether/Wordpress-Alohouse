<?php global $featuredCount;?>
<?php if ($featuredCount == 1) { ?>
    <div class="feat-img">
        <?php if (has_post_thumbnail()) {
            the_post_thumbnail('large-featured');
        } ?>
    </div>
    <div class="content">
        <div class="inner">
            <header>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </header>
            <div class="entry-summary">
                <?php echo wp_trim_words(get_the_excerpt(), 30);?>
            </div>
            <div class="entry-footer"><a class="text-button" href="<?php the_permalink(); ?>">Read More &#8594</a></div>
        </div>
    </div>

<?php } else { ?>
    <div class="feat-img mobile">
        <?php if (has_post_thumbnail()) {
            the_post_thumbnail('large-featured');
        } ?>
    </div>
    <div class="content">
        <div class="inner">
            <header>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </header>
            <div class="entry-summary">
                <?php echo wp_trim_words(get_the_excerpt(), 30);?>
            </div>
            <div class="entry-footer"><a class="text-button" href="<?php the_permalink(); ?>">Read More &#8594</a></div>
        </div>
    </div>
    <div class="feat-img desktop">
        <?php if (has_post_thumbnail()) {
            the_post_thumbnail('large-featured');
        } ?>
    </div>
<?php } ?>


