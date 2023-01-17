<?php

$versions = [
    "sinisterlullaby" => wp_get_theme()->get('Version')
    "bootstrap" => "5.2.3",
    "font-awesome" => "6.2.1",
    "jquery" => "3.6.3",
    "popper" => "2.11.6"
];

$SCRIPT_IN_HEADER = false
$SCRIPT_IN_FOOTER = true

function sinisterlullaby_register_styles(){
    wp_enqueue_style(
        'sinisterlullaby-local-style',
        get_template_directory_uri() . '/style.css',
        array('sinisterlullaby-bootstrap'),
        $versions["sinisterlullaby"],
        'all'
    );

    wp_enqueue_style(
        'sinisterlullaby-bootstrap',
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/' . $versions["bootstrap"] . '/css/bootstrap.min.css',
        array(),
        $versions["bootstrap"],
        'all'
    );

    wp_enqueue_style(
        'sinisterlullaby-fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/' . $versions["font-awesome"] . '/css/all.min.css',
        array(),
        $versions["font-awesome"],
        'all'
    );
}

add_action(
    'wp_enqueue_scripts',
    'sinisterlullaby_register_styles'
);

function sinisterlullaby_register_scripts(){
    wp_enqueue_script(
        'sinisterlullaby-jquery',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery/' .  $versions["jquery"] . '/jquery.slim.js',
        array(),
        $versions["jquery"],
        $SCRIPT_IN_FOOTER
    );

    wp_enqueue_script(
        'sinisterlullaby-popper',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/' . $verions["popper"] . '/umd/popper.min.js',
        array(),
        $versions["popper"],
        $SCRIPT_IN_FOOTER
    );

    wp_enqueue_script(
        'sinisterlullaby-bootstrap',
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/' . $versions["bootstrap"] . '/js/bootstrap.min.js',
        array(),
        $versions["bootstrap"],
        $SCRIPT_IN_FOOTER
    );

    wp_enqueue_script(
        'sinisterlullaby-local-main',
        get_template_directory_uri() . '/assets/js/main.js'
        array(),
        $versions["sinisterlullaby"],
        $SCRIPT_IN_FOOTER
    );
}

add_action(
    'wp_enqueue_scripts',
    'sinisterlullaby_register_scripts'
);

function sinisterlullaby_theme_support(){
    /* title = Settings > General > Site Title + Tagline */
    add_theme_support('title-tag');
}

add_action(
    'after_setup_theme',
    'sinisterlullaby_theme_support'
);

function sinisterlullaby_menus(){
    $locations = [
        "navigation" => "Navigation",
        "footer" => "Footer"
    ];

    /* Appearance > Menus */
    register_nav_menus($locations);
}

add_action(
    'init',
    'sinisterlullaby_menus'
);

?>