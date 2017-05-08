<?php
//Injecting stylesheets and scripts
function theme_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'modernizr-custom', get_template_directory_uri() . '/assets/js/modernizr-custom.js', true );
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

//Adding new img sizes
add_image_size( 'Portfolio-medium-wide', 633 );
add_image_size( 'Portfolio-large-wide', 1266 );
add_image_size( 'Portfolio-medium', 306 );
add_image_size( 'Portfolio-large', 612 );
add_image_size( 'Blog-medium', 469 );
add_image_size( 'Blog-large', 938 );

add_filter( 'image_size_names_choose','my_image_sizes' );

function my_image_sizes( $sizes ) {
    return array_merge ( $sizes, array(
        'Portfolio-medium-wide' => __('Portfolio Medium wide'),
        'Portfolio-large-wide' => __('Portfolio Large wide'),
        'Portfolio-medium' => __('Portfolio Medium'),
        'Portfolio-large' => __('Portfolio Large'),
        'Blog-medium' => __('Blog Medium'),
        'Blog-large' => __('Blog large'),
    ));
}
