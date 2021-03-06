<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
    <meta charset="<?php echo bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?php echo bloginfo('title') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>

</head>

<body <?php echo body_class() ?>>

    <header>    

    <?php 
        $args = array(
            'menu' => 'header_menu',
            "container" => false, // Wraps the menu UL into a container div
            'items_wrap' => '<ul class="custom_class">%3$s</ul>' // Give Custom Structure to Menu LIs
        );  
        wp_nav_menu( $args );
    ?>

    </header>
