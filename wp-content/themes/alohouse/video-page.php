<?php /* Template Name: Video page  */ ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="video-page">
		<div class="video-section">
			<div class="flex-video widescreen">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/cgc3mRqj_IM?rel=0&amp;controls=0&amp;showinfo=0&amp;modestbranding=1" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="content">
			<p class="lead text-center">
				At Alo House we recognize that everyone's journey is their own. We move through life searching for answers, a deeper sense of purpose found within ourselves. With treatment programs designed to heal our entire self, our certified staff is trained to connect with each client on an individual level, not to control them.<br><br> Discover our compassionate approach to care and recovery.
			</p>
			</div>
		</div>
	</div>
<?php endwhile; ?>
