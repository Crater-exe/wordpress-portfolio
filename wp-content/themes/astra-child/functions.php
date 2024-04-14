<?php

function astra_child_enqueue_styles()
{
    wp_enqueue_style(
        'astra-style',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        ['astra-style']
    );
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_styles');