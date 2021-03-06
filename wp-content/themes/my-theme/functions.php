<?php 
    
    // Custom Scripts/Styles to add 
    function myTheme_load_styles_scripts(){
        // Default style.css
        wp_enqueue_style('style', get_stylesheet_uri());

        // Custom css from assets
        wp_enqueue_style('theme', get_template_directory_uri().'/assets/css/theme.css', array(), '1.0', 'all' );
    
        // custom script from assets
        wp_enqueue_script( 'script', get_template_directory_uri().'/assets/js/script.js', array(), '1.0', true );
    }
    add_action('wp_enqueue_scripts', 'myTheme_load_styles_scripts');

    
    
    // Register Nav menus
    function myTheme_register_nav_menus(){
        register_nav_menus( array(
            // Display Locations
            "header_menu" => "Header Menu",
            "footer_menu" => "Footer Menu",
            "sidebar_menu" => "Sidebar Menu",
        ) );
    }
    add_action('after_setup_theme', 'myTheme_register_nav_menus');
    

?>