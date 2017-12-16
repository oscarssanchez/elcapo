<?php
// Theme Support //
add_theme_support( 'menus' );
//-- Add Styles: bootstrap, googlefonts, fontawesome --//
function elcapo_styles() {
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=PT+Sans:400,700');
	wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css', array(), time() );
}
add_action( 'wp_enqueue_scripts', 'elcapo_styles');

// Register Theme Menus //
function register_elcapo_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
		)
	);
}
add_action( 'init', 'register_elcapo_menus' );

//Register Sidebar-Widget Areas //

function sidebar1() {
	register_sidebar(
		array(
			'name'          => __( 'Primary Sidebar' ),
			'id'            => 'sidebar1',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="uppercase separation">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'sidebar1' );
