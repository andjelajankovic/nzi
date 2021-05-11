<?php
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );

function nzi_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'nzi_theme_support');

function nzi_theme_styles() {
    wp_enqueue_style('style_css', get_template_directory_uri()  . '/style.css'); 
    wp_enqueue_style('owl_css', get_template_directory_uri()  . '/css/owl.carousel.min.css'); 
    wp_enqueue_style('owl_theme_css', get_template_directory_uri()  . '/css/owl.theme.default.min.css'); 
}
add_action('wp_enqueue_scripts', 'nzi_theme_styles');

function nzi_theme_js() {
    wp_enqueue_script('owl_carousel_js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'nzi_theme_js');

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'nzi' ),
) );
function widgeti() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer 1',
        'id' => 'footer-1',
        'before_widget' => '<div class="col-md-4">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'name' => 'Footer 2',
        'id' => 'footer-2',
        'before_widget' => '<div class="col-md-4">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
    register_sidebar(array(
        'name' => 'Footer 3',
        'id' => 'footer-3',
        'before_widget' => '<div class="col-md-4">',
        'after_widget' => '</div>',
    ));
}
add_action('widgets_init', 'widgeti');
