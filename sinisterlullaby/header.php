<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport" content="width=device-width, initial-scale=1.0">

    <?php
        wp_head();
    ?>
</head>
<body>
    <h1><?php the_title(); ?></h1>
    
    <!-- Navigation
        Appearance > Menus
        Show advanced menu options > CSS Classes
        Add the class needed for each <li>
    -->
    <?php
        wp_nav_menu(
            array(
                'menu' => 'navigation',
                'container' => '',
                'theme_location' => 'navigation',
                'items_wrap' => '<ul id="" class="">%3$s</ul>'
            )
        );
    ?>