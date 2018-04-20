<div  class="entry">
	<a href="<?php the_permalink(); ?>">
	<?php if ( has_post_thumbnail() ) {
    the_post_thumbnail('large-thumb');
    }?> 
    </a>
    <div class="entry-content">
        <div class="entry-body">
            <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
            <?php echo wp_trim_words(get_the_excerpt(), 15);?>
        </div>
        <div class="entry-footer">
            <a class="text-button" href="<?php the_permalink(); ?>">Read More &#8594</a>
        </div>
    </div>

</div>