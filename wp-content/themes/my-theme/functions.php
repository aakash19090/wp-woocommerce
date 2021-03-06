<?php 
  
    function myTheme_load_styles_scripts(){
        // Default style.css
        wp_enqueue_style('style', get_stylesheet_uri());

        // Custom css from assets
        wp_enqueue_style('theme', get_template_directory_uri().'/assets/css/theme.css', array(), '1.0', 'all' );
    
        // custom script from assets
        wp_enqueue_script( 'script', get_template_directory_uri().'/assets/js/script.js', array(), '1.0', true );
    }

    add_action('wp_enqueue_scripts', 'myTheme_load_styles_scripts');
    

?>