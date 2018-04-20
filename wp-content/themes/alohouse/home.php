<div class="row">
    <div class="blog-header">
        <h1>Blog</h1>
    </div>
</div>

<div class="featured-post">
    <?php query_posts('cat=15&posts_per_page=2'); ?>
    <?php $featuredCount = 0 ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php $featuredCount++ ?>
        <div class="featured-item">
            <?php get_template_part('templates/content-featured', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</div>
<div class="browser-category">
    <div class="title-wrap">
        <h1 class="section-title">Browse By Category</h1>
    </div>
    <div class="category-list">
        <?php
        if (has_nav_menu('category_menu')) :
            $menuLocations = get_nav_menu_locations();
            $menuID = $menuLocations['category_menu'];
            $category_menu = wp_get_nav_menu_items($menuID);
            foreach($category_menu as $item){
                $taxonomy = $item->object;
                $term_id = $item->object_id;
                $image_url= get_field('image', $taxonomy._.$term_id);
                echo '<div class="item"><div class="feat-image" style="background:URL('.$image_url.' ")><a href="'.$item->url.'"><span class="opacity-button">'.$item->title.'</span></a></div></div>';
            }
            endif;
        ?>
    </div>

</div>
<?php query_posts('cat=-13'); ?>
<?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
    <?php get_search_form(); ?>
<?php endif; ?>

<div class="latest-posts">
    <div class="title-wrap">
        <h1 class="section-title">Latest Posts</h1>
    </div>
    <?php query_posts('cat=-13,&posts_per_page=3'); ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content-latest', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</div>
<div class="bob-posts">
    <div class="title-wrap">
        <h1 class="section-title">Bob Forrest Collection</h1>
    </div>
    <?php query_posts('cat=-13,10&posts_per_page=3'); ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content-bob', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</div>


<div class="alohouse-posts">
    <div class="title-wrap">
        <h1 class="section-title">Alo House Philosophy</h1>
    </div>
    <?php query_posts('cat=-13,12&posts_per_page=4'); ?>
    <div class="alohouse-item list desktop">
        <?php $alohouseCount = 0; $lengthContent='short'?>
        <?php while (have_posts()) : the_post(); ?>
            <?php $alohouseCount++;
            if ($alohouseCount == 4) break; ?>
            <?php get_template_part('templates/content-alohouse', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
        <?php endwhile; ?>
    </div>
    <?php $lengthContent='long'?>
    <div class="alohouse-item one">
        <?php get_template_part('templates/content-alohouse', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    </div>
    <?php wp_reset_query(); ?>
    <?php $lengthContent='short'?>
    <div class="alohouse-item list mobile">
        <?php query_posts('cat=-13,12&posts_per_page=3'); ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/content-alohouse', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
        <?php endwhile; ?>
    </div>
</div>
</div>
</div>