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
        <nav class="nav">
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="#">About</a>
                </li>

                <li>
                    <a href="#">Company</a>
                </li>

                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>

    </header>
