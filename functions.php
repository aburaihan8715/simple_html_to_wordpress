<?php

function wtd_setup(){
  // languages
  load_theme_textdomain('wtd');

  // title
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  // register menus
  register_nav_menus( array(
      'main_menu' => __( 'Main Menu', 'wtd' ),
  ) );
}
add_action('after_setup_theme','wtd_setup');




/**
 * Add a sidebar.
 */
function wtd_widgets() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'wtd' ),
		'id'            => 'sidebar_1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wtd' ),
		'before_widget' => '<div class="single_sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wtd_widgets' );

// script and styles
function wtd_scripts(){

  // owl css
  wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', "all" );
  // owl theme css
  wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1.0.0', "all" );
  // font awesome css
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), '1.0.0', "all" );
  // main css
  wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', "all" );
  // responsive css
  wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', "all" );
  // theme style
  wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

  
  // owl js
  wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
  // main js
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}



add_action('wp_enqueue_scripts','wtd_scripts');