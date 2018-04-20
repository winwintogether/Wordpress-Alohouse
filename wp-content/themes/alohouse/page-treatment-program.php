<?php /* Template Name: Treatment Page  */ ?>

<?php get_template_part( 'templates/page', 'header' ); ?>
<div id="treatment-program">
    <div class="page-header">
        <h1><?php the_field( 'top-section-title' ) ?></h1>
    </div>
    <div class="top-section">
        <div class="content">
            <div class="row">
                <div class="image-area">
                    <img src="<?php the_field( 'top-section-image-area' ) ?>"
                         style="shape-outside:url(<?php the_field( 'top-section-image-area' ) ?>)"
                         alt="Image Location"/>
                </div>
                <div class="text-area">
                    <p class="header-text"><?php the_field( 'top-section-sub-title' ) ?></p>
					<?php the_field( 'top-section-text-area' ) ?>
                </div>
                <div class="mobile-image-area">
                    <img src="<?php the_field( 'top-section-image-area' ) ?>"
                         alt="Image Location"/>
                </div>
            </div>
        </div>
    </div>

    <div class="treatment-steps-section">
        <div class="content">
            <div class="row">
                <p class="title"><?php the_field( 'step-section-title' ) ?></p>
            </div>
			<?php
			$i                 = 0;
			$tabs_title        = '';
			$tabs_content      = '';
			$accordion_content = '';

			?>
			<?php if ( have_rows( 'step-section-item' ) ) : ?>
				<?php while ( have_rows( 'step-section-item' ) ) : the_row() ?>
					<?php
					if ( $i == 0 ) {
						$active        = ' is-active';
						$area_selected = 'true';
					} else {
						$active        = '';
						$area_selected = 'false';
					}

					$tabs_title        .= '<li class="tabs-title' . $active . '">
                                                <a data-tabs-target="step-panel' . $i . '" href="#step-panel' . $i . '"aria-selected="' . $area_selected . '">' . get_sub_field( "step-section-item-title" ) . '</a>
                                           </li>';
					$tabs_content      .= '<div class="tabs-panel' . $active . '" id="step-panel' . $i . '">
                                                <div class="image-area">
                                                    <img src="' . get_sub_field( "step-section-item-image" ) . '"/>
                                                </div>
                                                <div class="text-area">
                                                    <h3>' . get_sub_field( "step-section-item-title" ) . '</h3>' .
                                                    get_sub_field( "step-section-item-text-area" ) . '
                                                </div>
                                           </div>';
					$accordion_content .= '<li class="accordion-item' . $active . '" data-accordion-item>
                                                <a href="#" class="accordion-title">' . get_sub_field( "step-section-item-title" ) . '</a>
                                                <div class="accordion-content" data-tab-content>
                                                    <div class="image-area">
                                                        <img src="' . get_sub_field( "step-section-item-image" ) . '"/>
                                                    </div>
                                                    <div class="text-area">
                                                        <h3>' . get_sub_field( "step-section-item-title" ) . '</h3>' .
                                                        get_sub_field( "step-section-item-text-area" ) . '
                                                    </div>
                                                </div>
                                            </li>';
					?>

					<?php $i ++;
					wp_reset_postdata(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
            <div class="row">
                <div class="tab-view">
                    <ul class="tabs" data-tabs id="treatment-step-tabs">
						<?= $tabs_title ?>
                    </ul>
                    <div class="tabs-content" data-tabs-content="treatment-step-tabs">
						<?= $tabs_content ?>
                    </div>
                </div>
                <div class="accordion-view">
                    <ul class="accordion" data-accordion>
						<?= $accordion_content ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="individual-goal-section">
        <div class="content">
            <div class="row">
                <p class="title"><?php the_field( 'individual-section-title' ) ?></p>
				<?php the_field( 'individual-section-text-area' ) ?>
                <h3><?php the_field( 'goal-section-title' ) ?></h3>
				<?php the_field( 'goal-section-text-area' ) ?>
            </div>
        </div>
    </div>

    <div class="full-box-section">
        <div class="box-row">
            <div class="text-area">
                <div>
                    <h2><?php the_field( 'box-row_1-title' ) ?></h2>
					<?php the_field( 'box-row_1-text-content' ) ?>
                </div>
            </div>
            <div class="image-area"
                 style="background: url(<?php the_field( 'box-row_1-image' ) ?>) no-repeat top center;"></div>
        </div>
        <div class="box-row">
            <div class="image-area"
                 style="background: url(<?php the_field( 'box-row_2-image' ) ?>) no-repeat top center;"></div>
            <div class="text-area">
                <div>
                    <h2><?php the_field( 'box-row_2-title' ) ?></h2>
					<?php the_field( 'box-row_2-text-content' ) ?>
                </div>
            </div>
            <div class="mobile-image-area"
                 style="background: url(<?php the_field( 'box-row_2-image' ) ?>) no-repeat top center;"></div>
        </div>

    </div>

    <div class="comprehensive-drug-section">
        <div class="content">
            <div class="row">
                <div class="image-area">
                    <img src="<?php the_field( "comprehensive-drug-section-image" ) ?>"
                         alt="Image Location"/>
                </div>
                <div class="text-area">
                    <p class="header-text"><?php the_field( "comprehensive-drug-section-title" ) ?></p>
					<?php the_field( "comprehensive-drug-section-text-content" ) ?>

                </div>
                <div class="mobile-image-area">
                    <img src="<?php the_field( "comprehensive-drug-section-image" ) ?>"
                         alt="Image Location"/>
                </div>
            </div>
        </div>
    </div>

    <div class="individual-care-section">
        <div class="content">
            <div class="row">
                <p class="title"><?php the_field( 'individual-care-section-title' ) ?></p>
            </div>
			<?php
			$i                 = 0;
			$tabs_title        = '';
			$tabs_content      = '';
			$accordion_content = '';

			?>
			<?php if ( have_rows( 'individual-care-section-item' ) ) : ?>
				<?php while ( have_rows( 'individual-care-section-item' ) ) : the_row() ?>
					<?php
					if ( $i == 0 ) {
						$active        = ' is-active';
						$area_selected = 'true';
					} else {
						$active        = '';
						$area_selected = 'false';
					}

					$tabs_title        .= '<li class="tabs-title' . $active . '">
			                                    <a data-tabs-target="step-panel' . $i . '" href="#individual-care-step-panel' . $i . '"aria-selected="' . $area_selected . '">'.'
			                                      <div class="icon"><img src="' . get_sub_field( "individual-care-section-item-icon" ) . '"/></div><br/>'.
                                                  get_sub_field( "individual-care-section-item-title" ).'
			                                    </a>
			                               </li>';
					$tabs_content      .= '<div class="tabs-panel' . $active . '" id="individual-care-step-panel' . $i . '">
                                             <div class="image-area"><img src="' . get_sub_field( "individual-care-section-item-image" ) . '"/></div>
                                             <div class="text-area"><h3>' . get_sub_field( "individual-care-section-item-title" ) . '</h3>' . get_sub_field( "individual-care-section-item-text-content" ) . '</div>
                                           </div>';
					$accordion_content .= '<li class="accordion-item' . $active . '" data-accordion-item>
                                              <a href="#" class="accordion-title"> <div class="icon"><img src="' . get_sub_field( "individual-care-section-item-icon" ) . '"/></div>' . get_sub_field( "individual-care-section-item-title" ) . '</a>
                                              <div class="accordion-content" data-tab-content>
                                                  <div class="image-area"><img src="' . get_sub_field( "individual-care-section-item-image" ) . '"/></div>
                                                  <div class="text-area"><h3>' . get_sub_field( "individual-care-section-item-title" ) . '</h3>' . get_sub_field( "individual-care-section-item-text-content" ) . '</div>
                                              </div>
                                           </li>';
					?>

					<?php $i ++;
					wp_reset_postdata(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
            <div class="row">
                <div class="tab-view">
                    <ul class="tabs" data-tabs id="individual-care-tabs">
						<?= $tabs_title ?>
                    </ul>
                    <div class="tabs-content" data-tabs-content="individual-care-tabs">
						<?= $tabs_content ?>
                    </div>
                </div>
                <div class="accordion-view">
                    <ul class="accordion" data-accordion>
						<?= $accordion_content ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="alumni-program-section">
        <div class="content">
            <div class="row">
                <p class="title"><?php the_field( "alumni-program-section-title" ) ?></p>
				<?php the_field( "alumni-program-section-text-content" ) ?>
            </div>
        </div>
    </div>
</div>

