<div  class="article-thumb">
    <a href="<?php the_permalink(); ?>">
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('large-thumb');
        }?>
    </a>
    <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
</div>