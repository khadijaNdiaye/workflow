<?php
add_theme_support( 'menus');
function ab2w_register_theme_menus(){
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu'),
			)
		);
}
add_action( 'init', 'ab2w_register_theme_menus');

//Injecter les css sur le header
function ab2w_theme_styles(){
	wp_enqueue_style('boostrap_css', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('font_awesome_css', get_template_directory_uri().'/css/font-awesome.min.css');
	wp_enqueue_style('prettyPhoto_css', get_template_directory_uri().'/css/prettyPhoto.css');
	wp_enqueue_style('price-range', get_template_directory_uri().'/css/price-range.css');
	wp_enqueue_style('animate_css', get_template_directory_uri().'/css/animate.css');
	wp_enqueue_style('main_css', get_template_directory_uri().'/css/main.css');
	wp_enqueue_style('responsive_css', get_template_directory_uri().'/css/responsive.css');

	wp_enqueue_style('style_css', get_template_directory_uri().'/style.css');
	//wp_enqueue_style('font_awesome_css' get_template_directory_uri().'/Boostrap/font-awesome.min.css');
}
add_action( 'wp_enqueue_scripts', 'ab2w_theme_styles');

// Injecte les js sur 
function ab2w_theme_js(){
	wp_enqueue_script('jquery_js', get_template_directory_uri().'/js/jquery.js');
	wp_enqueue_script('boostrap_js', get_template_directory_uri().'/js/bootstrap.min.js');
	wp_enqueue_script('jquery_scrollup_js', get_template_directory_uri().'/js/jquery.scrollUp.min.js');
	wp_enqueue_script('pice_range_js', get_template_directory_uri().'/js/price-range.js');
	wp_enqueue_script('jquery_prettyphoto_js', get_template_directory_uri().'/js/jquery.prettyPhoto.js');
	wp_enqueue_script('main_js', get_template_directory_uri().'/js/main.js');
	}
	add_action( 'wp_enqueue_script', 'ab2w_theme_js');






?>