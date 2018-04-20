
<header class="banner show-for-large">
  <div class="row">
    <div class="large-4 columns logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>
"><img alt="Alo House Recovery Centers Logo" src="<?= get_template_directory_uri(); ?>/dist/images/mobile_logo.svg"></a>
    </div>
    <nav class="nav-primary large-4 columns">
    <div class="menu-centered">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu']);
      endif;
      ?>
      </div>
    </nav>
    <div class="large-4 columns phone">
      <h4><span>Reach Out, We're Here</span>(888) 595-0235</h4>
    </div>
  </div>
</header>

<div data-sticky-container>
<div class="top-bar show-for-large">
<div class="row">
<?php echo'
    <div class="top-bar-left">';
        wp_nav_menu(array(
            'container' => false,
            'menu' => __( 'Top Bar Menu', 'sage' ),
            'menu_class' => 'dropdown menu',
            'theme_location' => 'topbar_menu',
            'items_wrap'      => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
            //Recommend setting this to false, but if you need a fallback...
            'fallback_cb' => 'f6_topbar_menu_fallback',
            'walker' => new F6_TOPBAR_MENU_WALKER(),
        ));
    echo'
    </div>
';
?>
</div>
</div>
</div>

<div class="title-bar hide-for-large"> 
  <div class="title-bar-left">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>
"><img alt="Alo House Recovery Centers Logo" src="<?= get_template_directory_uri(); ?>/dist/images/mobile_logo.svg"></a>
  <p><a href="tel:18885950235">CALL US: (888) 595-0235</a></p>
  </div>
  <!--<div class="title-bar-title">   
  <a class="call-us" href="tel:18885950235"><img src="<?= get_template_directory_uri(); ?>/dist/images/call_us.png"></a>    
  </div>-->
  <div class="title-bar-right">
    <a class="open-canvas" data-open="offCanvas" href="#"><img alt="Open Menu" src="<?= get_template_directory_uri(); ?>/dist/images/open_menu.png"></a>    
    <a class="close-canvas" href="#" data-close="offCanvas"><img alt="Close Menu" src="<?= get_template_directory_uri(); ?>/dist/images/close_menu.png"></a>
  </div>
</div>

<div class="off-canvas-wrapper">
<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
      <div class="off-canvas position-right" id="offCanvas" data-position="right" data-off-canvas>
        <div class="button-group">
        <a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="fi-home"></span>&nbsp;Home</a>
        <a class="button open-live-chat" href="#"><span class="fi-comments"></span>&nbsp;Live Chat</a>
        </div>
        
    <?php wp_nav_menu(array(
    'container' => false,
    'menu' => __( 'Drill Menu', 'textdomain' ),
    'menu_class' => 'vertical menu main-mobile-menu',
    'theme_location' => 'drill_menu',
    'items_wrap'      => '<ul id="%1$s" class="%2$s" data-drilldown="">%3$s</ul>',
    'fallback_cb' => 'f6_drill_menu_fallback',
    'walker' => new F6_DRILL_MENU_WALKER(),
    ));?>
    </div>

<?php if ( is_front_page() ) {  ?>
  <div class="slider-container"> 
   <div class="home-absolute-center">
    <div class="title-overlay">
    <div class="show-for-large">
       <h1>We are leaders in the compassionate care model</h1>
       <p class="lead">Award Winning Malibu Treatment Center</p>
       <a class="button large" href="https://alorecovery.com/testimonials/">View Our Testimonials</a>
    </div>
      <div class="hide-for-large">
        <img alt="Large Slider Logo" src="<?= get_template_directory_uri(); ?>/dist/images/slider_logo.png">  
      </div>
    </div>
  </div>
  <div class="home-slider">
    <?php   
      $args = array(
        'post_type' => array(
          'home-slider',
        ),
        'post_status' => array(
          'publish',
        ),
        'posts_per_page'         => 10,
      );
    $query = new WP_Query( $args );
     ?>

    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <div class="slide">
        <img data-lazy="<?= get_the_post_thumbnail_url(get_the_ID(),'full'); ?>"/>
      </div>
    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
</div>
</div>
<?php }  ?>



