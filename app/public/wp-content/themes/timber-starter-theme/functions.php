<?php
/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 */


function my_theme_enqueue_styles() {
    wp_enqueue_style('tailwindcss_output', get_template_directory_uri() . '/src/output.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/src/StarterSite.php';

Timber\Timber::init();

// Sets the directories (inside your theme) to find .twig files.
Timber::$dirname = [ 'templates', 'views' ];

new StarterSite();
