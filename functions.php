<?php

function THEME_enqueues()
{
    wp_enqueue_script(
        'child-scripts',
        get_stylesheet_directory_uri() . '/js/child-scripts.js',
        array(),
        '1.0.0',
        array('strategy' => 'defer')
    );
}

add_action(
    'wp_enqueue_scripts',
    'THEME_enqueues'
);


// load parent styles
function THEME_enqueue_styles()
{
    wp_enqueue_style(
        'THEME-parent-style',
        get_parent_theme_file_uri('style.css')
    );
}

add_action(
    'wp_enqueue_scripts',
    'THEME_enqueue_styles'
);

/**
 * Lower Yoast SEO Metabox location
 */
function yoast_to_bottom()
{
    return 'low';
}
add_filter('wpseo_metabox_prio', 'yoast_to_bottom');


// Add custom dashboard widgets

// function add_custom_dashboard_widget()
// {
//     wp_add_dashboard_widget(
//         'custom_help_widget', // Widget ID
//         'Here are some tutorials!',  // Widget title
//         'custom_dashboard_help' // Callback function
// );
// }

/**
 * Remove unwanted dashboard widgets
**/
// function remove_unwanted_dashboard_widgets()
// {
    // Remove "At a Glance" widget
    // remove_meta_box('dashboard_right_now', 'dashboard', 'normal');

    // Remove "Welcome" panel
    // remove_action('welcome_panel', 'wp_welcome_panel');

    // Remove "WordPress Events and News" widget
    // remove_meta_box('dashboard_primary', 'dashboard', 'side');

    // Remove "Activity" widget
    // remove_meta_box('dashboard_activity', 'dashboard', 'normal');

    // remove_meta_box("dashboard_quick_press", 'dashboard', 'side');
    
    // remove yoast widgets
    // remove_meta_box("wpseo-dashboard-overview", 'dashboard', 'normal');
    // remove_meta_box("wpseo-wincher-dashboard-overview", 'dashboard', 'normal');
    
// }

// add_action('wp_dashboard_setup', 'remove_unwanted_dashboard_widgets');

// function custom_dashboard_help()
// {
//     $create_post_tutorial_url = get_stylesheet_directory_uri() . '/media/creating-a-post.mp4';

//     echo '<p>Watch the video below to learn how to create and edit a post:</p>';
//     echo '<video width="560" height="315" controls>
//             <source src="' . esc_url($create_post_tutorial_url) . '" type="video/mp4">
//             Your browser does not support the video tag.
//         </video>';
// }
// add_action('wp_dashboard_setup', 'add_custom_dashboard_widget');