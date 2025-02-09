<?php
function twentytwentyfour_child_enqueue_styles() {
    $parent_style = 'twentytwentyfour-style'; // This is 'twentytwentyfour-style' for the Twenty Twenty-Four theme.

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('twentytwentyfour-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'twentytwentyfour_child_enqueue_styles');