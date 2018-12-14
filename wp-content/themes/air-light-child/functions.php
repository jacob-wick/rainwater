<?php
/**
 * The Air Light Child functions etcc.
 *
 * @package air-light
 */


/**
 * Enqueue scripts and styles.
 */

function air_light_child_enqueue_styles() {

	$air_light_template = 'global.min';

    $parent_style = 'styles';

    wp_enqueue_style( $parent_style, get_theme_file_uri( "css/{$air_light_template}.css" ), array(), filemtime( get_theme_file_path( "css/{$air_light_template}.css" ) ) );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style( 'air-light-child-google-fonts', '//fonts.googleapis.com/css?family=Averia+Serif+Libre:400,700|Codystar' );

}
add_action( 'wp_enqueue_scripts', 'air_light_child_enqueue_styles' );


// Create Case Studies Post Type

function create_custom_post_types() {
  register_post_type( 'case_studies',
    array(
      'labels' => array(
        'name' => __( 'Case Studies' ),
        'singular_name' => __( 'Case Study' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'case-studies' ),
    )
  );
}
add_action( 'init', 'create_custom_post_types' );

// Footer Menu

function register_my_menus() {
  register_nav_menus(
    array(
      'social-media-menu' => __( 'Social Media Nav' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


?>