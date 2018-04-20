<?php get_template_part('templates/page', 'header'); ?>

<div id="staff-single">
<div class="content">

<div class="center-10-col">
	<div class="content testimonial-single">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<?php the_content(); ?>
	<div class="next-link">
	<?php next_post_link('%link', 'Next Testimonial &rsaquo;'); ?>
	</div>
	</div>
</div>
</div>
</div>