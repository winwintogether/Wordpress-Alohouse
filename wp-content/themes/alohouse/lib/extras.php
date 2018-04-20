<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return '&hellip; <a href="' . get_permalink() . '">' . __('Read More', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


/**
 * Functionality creates new widget
 */
function wpb_load_widget() {
  register_widget( __NAMESPACE__ . '\\Recent_Blog_Posts_Widget' );
  register_widget( __NAMESPACE__ . '\\Custom_Category_Widget' );
  register_widget( __NAMESPACE__ . '\\Join_Newsletter_Widget' );
  register_widget( __NAMESPACE__ . '\\Custom_Tags_Widget' );
  register_widget( __NAMESPACE__ . '\\Custom_Advertisement_Widget' );

}

add_action( 'widgets_init', __NAMESPACE__ . '\\wpb_load_widget' );


class Recent_Blog_Posts_Widget extends \WP_Widget {

  
  function __construct() {
    parent::__construct(
      'recent_blog_posts_widget',
      "Recent Blog Posts",
      [ 'description' => 'Custom Widget for Recent Blog Posts', ]
    );
  }

  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    $number_blogs = apply_filters( 'widget_title', $instance['number_blogs'] );

    echo $args['before_widget'];

    echo "<div class='recent-blog-posts'>";
    echo "<div class='sidebar-title'>";
        echo "<h3>".$title."</h3>";
    echo "</div>";

    query_posts('cat=-13,&posts_per_page='.$number_blogs);
    while (have_posts()) : the_post();
        echo "<div class='entry'>";
            echo "<div class='image-area'>".get_the_post_thumbnail(get_the_ID(), 'thumbnail', NULL)."</div>";
            echo "<div class='text-area'>";
                echo "<div class='title'><a href='".get_the_permalink()."'>".get_the_title()."</a></div>";
                echo "<time class='updated' datetime='".get_post_time('c', true)."'>".get_the_date()."</time>";
            echo "</div>";
        echo "</div>";
    endwhile;
    echo $args['after_widget'];
  }

  public function form( $instance ) {

    if ( isset( $instance['title'] ) ) {
      $title = $instance['title'];
    } else {
      $title = 'Recent Blog Posts';
    }
    if ( isset( $instance['number_blogs'] ) ) {
      $number_blogs = $instance['number_blogs'];
    } else {
      $number_blogs = '10';
    }
    ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
                   name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
                   value="<?php echo esc_attr( $title ); ?>"/>
        </p>
         <p>
            <label for="<?php echo $this->get_field_id( 'number_blogs' ); ?>"><?php _e( 'Number of Blogs:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'number_blogs' ); ?>"
                   name="<?php echo $this->get_field_name( 'number_blogs' ); ?>" type="text"
                   value="<?php echo esc_attr( $number_blogs ); ?>"/>
        </p>

    <?php

  }

  public function update( $new_instance, $old_instance ) {
    $instance          = [];
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['number_blogs'] = ( ! empty( $new_instance['number_blogs'] ) ) ? strip_tags( $new_instance['number_blogs'] ) : '';

    return $instance;
  }
}


class Custom_Category_Widget extends \WP_Widget {

  
  function __construct() {
    parent::__construct(
      'custom_category_widget',
      "Custom Category",
      [ 'description' => 'Custom Category Lists', ]
    );
  }

  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
   
    echo $args['before_widget'];

    echo "<div class='category-lists'>";
    echo "<div class='sidebar-title'>";
        echo "<h3>".$title."</h3>";
    echo "</div>";
    echo "<ul>";
        
    $categories = get_categories();
    foreach($categories as $category) {
        echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a><span class="cat-id">'.$category->term_id.'</span></li>';
    }
       
    echo "</div>";
    echo $args['after_widget'];
  }

  public function form( $instance ) {

    if ( isset( $instance['title'] ) ) {
      $title = $instance['title'];
    } else {
      $title = 'Category';
    }
   
    ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
                   name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
                   value="<?php echo esc_attr( $title ); ?>"/>
        </p>

    <?php

  }

  public function update( $new_instance, $old_instance ) {
    $instance          = [];
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

    return $instance;
  }
}


class Join_Newsletter_Widget extends \WP_Widget {

  
  function __construct() {
    parent::__construct(
      "join_newsletter_widget",
      "Join Newsletter",
      [ 'description' => 'Join Our NewsLetter', ]
    );
  }

  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    $description = apply_filters( 'widget_title', $instance['description'] );
    $subscription = apply_filters( 'widget_title', $instance['subscription'] );
   
    echo $args['before_widget'];

    echo "<div class='join-form'>";
        echo "<div class='sidebar-title'>";
            echo "<h3>".$title."</h3>";
        echo "</div>";
        echo "<div>";
            echo "<p>".$description."</p>";
            echo "<form>";
                echo "<input type='text' placeholder='Type Your Email Here'/>";
                echo "<input type='button' class='button' value='".$subscription."'>";
            echo "</form>";
        echo "</div>";
    echo "</div>";
   
    echo $args['after_widget'];
  }

  public function form( $instance ) {

    if ( isset( $instance['title'] ) ) {
      $title = $instance['title'];
    } else {
      $title = 'Join Our Newsletter';
    }
    if ( isset( $instance['description'] ) ) {
      $description = $instance['description'];
    } else {
      $description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry';
    }
    if ( isset( $instance['subscription'] ) ) {
      $subscription = $instance['subscription'];
    } else {
      $subscription = 'Subscription Now';
    }
   
    ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
                   name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
                   value="<?php echo esc_attr( $title ); ?>"/>
        </p>
         <p>
            <label for="<?php echo $this->get_field_id( 'description' ); ?>"><?php _e( 'Description:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>"
                   name="<?php echo $this->get_field_name( 'description' ); ?>" type="text"
                   value="<?php echo esc_attr( $description ); ?>"/>
        </p>
         <p>
            <label for="<?php echo $this->get_field_id( 'subscription' ); ?>"><?php _e( 'Subscription Button:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'subscription' ); ?>"
                   name="<?php echo $this->get_field_name( 'subscription' ); ?>" type="text"
                   value="<?php echo esc_attr( $subscription ); ?>"/>
        </p>

    <?php

  }

  public function update( $new_instance, $old_instance ) {
    $instance          = [];
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['description'] = ( ! empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';
    $instance['subscription'] = ( ! empty( $new_instance['subscription'] ) ) ? strip_tags( $new_instance['subscription'] ) : '';

    return $instance;
  }
}


class Custom_Tags_Widget extends \WP_Widget {

  
  function __construct() {
    parent::__construct(
      "custom_tags_widget",
      "Custom Tags",
      [ 'description' => 'Custom Tags']
    );
  }

  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
   
    echo $args['before_widget'];

    echo "<div class='tag-lists'>";
    echo "<div class='sidebar-title'>";
        echo "<h3>".$title."</h3>";
    echo "</div>";
    echo "<div>";
    $tags = get_tags();
    foreach($tags as $tag) {
        $tag_link = get_tag_link( $tag->term_id );
        echo "<a class='border-button' href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>".$tag->name."</a>";
    }
    
    echo "</div>";
    echo "</div>";
   
    echo $args['after_widget'];
  }

  public function form( $instance ) {

    if ( isset( $instance['title'] ) ) {
      $title = $instance['title'];
    } else {
      $title = 'Tags';
    }
   
    ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
                   name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
                   value="<?php echo esc_attr( $title ); ?>"/>
        </p>
        
    <?php

  }

  public function update( $new_instance, $old_instance ) {
    $instance          = [];
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

    return $instance;
  }
}

class Custom_Advertisement_Widget extends \WP_Widget{
  function __construct() {
    parent::__construct(
      "custom_advertisement_widget",
      "Custom Advertisement",
      [ 'description' => 'Custom Advertisement']
    );
  }

  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    echo "<div class='ad-area'></div>";
    echo $args['after_widget'];
  }

  public function form( $instance ) {


  }

  public function update( $new_instance, $old_instance ) {
    $instance          = [];

    return $instance;
  }
}


