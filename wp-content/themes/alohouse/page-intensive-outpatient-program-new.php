<?php
/**
 * Template Name: Intensive Outpatient Program New Page
 */
?>
<?php
get_template_part('templates/page', 'header');
$page_id = get_the_ID();
?>
<div id="outpatient-program-new">
    <div class="top-section">
        <div class="content">
            <div class="row">
                <h1 class="sub-title"><?php the_field( 'top-section-title' ) ?></h1>
				<?php the_field( 'top-section-description' ) ?>
            </div>
        </div>
    </div>
    <div class="location-section">
        <div class="content">
            <h1 class="sub-title"><?php the_field( 'location-section-title' ) ?></h1>
			<?php if ( have_rows( 'location-item' ) ) : ?>
				<?php while ( have_rows( 'location-item' ) ) : the_row() ?>
                    <div class="row">
                        <div class="location-title">
                            <img src="<?php the_sub_field( 'location-item-title-icon' ); ?>"/>
                            <span><?php the_sub_field( 'location-item-title' ); ?></span>
                        </div>
                        <div class="location-slider">

							<?php if ( have_rows( 'location-item-slider' ) ) : ?>
								<?php while ( have_rows( 'location-item-slider' ) ) : the_row() ?>
                                    <div>
                                        <div class="image-item">
                                            <img class="slider-image"
                                                 src="<?php the_sub_field( 'location-item-slider-image' ); ?>"/>
                                        </div>
                                    </div>
									<?php wp_reset_postdata() ?>
								<?php endwhile; ?>
							<?php endif; ?>

                        </div>
                        <div div class="location-content">
                            <div class="location-info">
                                <div class="subject">
                                    <h3><?php the_sub_field( 'location-item-main-title' ); ?></h3>
                                    <p><?php the_sub_field( 'location-item-sub-title' ); ?></p>
                                </div>
                                <div class="address">
                                    <h4>Address</h4>
                                    <p><?php the_sub_field( 'location-item-address' ); ?></p>
                                </div>
                                <div class="phone">
                                    <p>Phone:</p>
                                    <p><?php the_sub_field( 'location-item-phone' ); ?></p>
                                </div>
                            </div>
							<?php the_sub_field( 'location-item-description' ); ?>
                        </div>
                    </div>
					<?php wp_reset_postdata() ?>
				<?php endwhile; ?>
			<?php endif; ?>
        </div>
    </div>

    <div class="individual-section">
        <div class="content">
            <h1 class="sub-title"><?php the_field( 'individual-section-title' ) ?></h1>
			<?php if ( have_rows( 'individual-section-item' ) ) : ?>
				<?php $i = 0; ?>
				<?php while ( have_rows( 'individual-section-item' ) ) : the_row() ?>
                  <?php
                      $left_content = '<h3>'.get_sub_field('individual-section-item-title').'</h3>';
					  $left_content .= get_sub_field('individual-section-item-description');
                      $right_content ='<img src="'.get_sub_field('individual-section-item-image').'"/>';
                      $over_content = get_sub_field('individual-section-item-over-description');

					 if ( $i % 2 != 0 ) {
						 $temp          = $left_content;
						 $left_content  = $right_content;
						 $right_content = $temp;
					 }
					?>
                    <div class="row">
                        <div class="left-side"><div><?=$left_content?></div></div>
                        <div class="right-side"><div><?=$right_content?></div></div>
                        <?php if($over_content !='') { ?>
                        <div class="out-text-area"><?=$over_content?></div>
                        <?php } ?>
                    </div>
					<?php $i ++;
					wp_reset_postdata() ?>
				<?php endwhile; ?>
			<?php endif; ?>

        </div>
    </div>

</div>