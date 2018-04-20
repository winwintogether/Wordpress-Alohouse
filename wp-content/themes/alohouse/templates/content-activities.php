	<div class="activity-item">
		<div class="activity-image">
		<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail('thumbnail');
		}?> 
		</div>
		<div class="activity-content">
		<div class="entry-header">
		<?php the_title( '<h2 class="activity-name">', '</h2>' ); ?>
		<?php the_content();?>
		</div>
		</div>
	</div>
	<hr>
