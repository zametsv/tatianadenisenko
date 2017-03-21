<?php
//Injecting stylesheets and scripts
function theme_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script( 'retina', get_template_directory_uri() . '/assets/js/retina.js', '1.3.0', true );
}
    
add_action('wp_enqueue_scripts', 'theme_resources');

function theme_fonts() {
//Injecting Gogle fonts
            wp_register_style('OpenSans_and_Exo', 'https://fonts.googleapis.com/css?family=Exo+2:200|Open+Sans');
            wp_enqueue_style( 'OpenSans_and_Exo');	
}

add_action('wp_print_styles', 'theme_fonts');

//Navigation menus
register_nav_menus(array(
    'primary' => __('Primary Menu'),
));

//Add Customizer functionality
require get_template_directory(). '/inc/customizer.php';