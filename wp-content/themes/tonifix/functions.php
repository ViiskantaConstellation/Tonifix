<?php
  
function wpb_adding_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	/*
	if (is_front_page()) {
		wp_register_style('frontpage', get_template_directory_uri()."/frontpage.css");
		wp_enqueue_style( 'frontpage');
	}
	wp_register_style('reset', get_template_directory_uri()."/reset.css");
	wp_enqueue_style( 'reset'); 

	wp_register_style('palvelut', get_template_directory_uri()."/palvelut.css");
	wp_enqueue_style( 'palvelut');

	wp_register_style('pkhead', get_template_directory_uri()."/pkhead.css");
	wp_enqueue_style( 'pkhead');

	wp_register_style('vihead', get_template_directory_uri()."/vihead.css");
	wp_enqueue_style( 'vihead');*/
	
}
	
  
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  

function register_menus() {
	register_nav_menus(
	  array(
		'top-nav-menu' => __( 'Top Nav Menu' ),
		'header-menu' => __( 'Header Menu' ),
		'footer-menu' => __( 'Footer Menu' )
	  )
	);
  }
  add_action( 'init', 'register_menus' );
?>