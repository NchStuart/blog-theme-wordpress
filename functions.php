<?php
// Includes
require get_template_directory().'/include/setup.php';


// Hooks
add_action( 'wp_enqueue_scripts', 'nb_theme_styles' );
add_action( 'after_setup_theme', 'nb_after_setup' );
add_action('widgets_init', 'nb_widgets');