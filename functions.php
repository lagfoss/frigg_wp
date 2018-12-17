<?php

// Add scripts and stylesheets
function frigg_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css//style.css' );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js' );
  wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/assets/js/fontawesome-all.js' );
}

add_action( 'wp_enqueue_scripts', 'frigg_scripts' );

// Theme support
// WordPress Titles
add_theme_support( 'title-tag' );
//Search
add_theme_support('html5',array('search-form'));
// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Add Google Fonts
function startwordpress_google_fonts() {
				wp_register_style('Josefin Sans', 'https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i,600i,700&amp;subset=latin-ext');
				wp_enqueue_style( 'Josefin Sans');
		}

add_action('wp_print_styles', 'startwordpress_google_fonts');
