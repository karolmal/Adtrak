<?php

function all_scripts()  { 

	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
	
	// add theme scripts
	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/js/main.js');
  
}
add_action( 'wp_enqueue_scripts', 'all_scripts' ); 
