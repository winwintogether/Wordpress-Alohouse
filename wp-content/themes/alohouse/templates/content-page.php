<div class="section-padding">
<h1 class="page-title"><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
</div>