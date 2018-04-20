<div class="testimonial testimonials-loop">
	<div class="reviewBody">
        <span class="quot">&ldquo;</span><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?><span class="quot">&rdquo;</span>
	</div>
	<div class="author">
		<?php the_title(); ?>
	</div>
	<a class="text-button" href="<?php the_permalink(); ?>">Read More 	&#8594</a>
</div>