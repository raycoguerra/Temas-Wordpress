<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>

    <header>
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="Logo">
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        
        <?php
            $arg = array(
                'theme_location' => 'main-menu',
                'container' => 'nav',
                //OJO en este caso predomina menu class
                'menu_class' => 'main-nav');
            wp_nav_menu($arg);
        ?>
        
    </header>
