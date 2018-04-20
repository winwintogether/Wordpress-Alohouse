<?php get_template_part('templates/page', 'header'); ?>

<div class="four-oh-four-page">
	<div class="content">
	<h3>Sorry, But We Could Not Find The Page You Were Looking For</h3>
	<p>Feel free to browse some of the links below for an alternative!</p>
	<?php wp_nav_menu(array(
            'container' => false,
            'menu' => __( 'Top Bar Menu', 'sage' ),
            'menu_class' => 'menu',
            'theme_location' => 'topbar_menu',
            'items_wrap'      => '<ul>%3$s</ul>',
        ));
      ?>
	</div>
</div>