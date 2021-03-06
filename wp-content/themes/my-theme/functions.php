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
    
    
    
    
    // Adding Custom Classes to Nav Menu <Li>
    function myTheme_add_class_nav_li( $classes, $item, $args ){
        $classes[] = "custom_li_class";
        return $classes;
    }  
    add_filter('nav_menu_css_class', 'myTheme_add_class_nav_li', 1, 3);

    // Adding Custom Classes to Nav Menu <Li>
    function myTheme_add_class_nav_anchor( $classes, $item, $args ){
        $classes['class'] = "custom_link_class";
        // $classes['data-test'] = "custom_attr"; // To add any other attribute, this is the way
        return $classes;
    }  
    add_filter('nav_menu_link_attributes', 'myTheme_add_class_nav_anchor', 1, 3);

    
?>