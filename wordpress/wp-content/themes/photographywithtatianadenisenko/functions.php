<?php
//Injecting stylesheets and scripts
function theme_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '1.0.0', true );
    //wp_enqueue_script( 'retina', get_template_directory_uri() . '/assets/js/retina.js', '1.3.0', true );
}
    
add_action('wp_enqueue_scripts', 'theme_resources');

function theme_fonts() {
//Injecting Gogle fonts
    wp_register_style('OpenSans_and_Exo', 'https://fonts.googleapis.com/css?family=Exo+2:200|Open+Sans');
    wp_enqueue_style( 'OpenSans_and_Exo');	
}

add_action('wp_print_styles', 'theme_fonts');

//Changing the excerpt length and dots and brackets at the end
function custom_excerpt_length() {
    return 30;
}

add_filter('excerpt_length', 'custom_excerpt_length');

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
