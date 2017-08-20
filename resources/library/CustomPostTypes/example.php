<?php
// documentation is found here https://codex.wordpress.org/Function_Reference/register_post_type

function ozpilot_custom_post_type (){


    $labels = array(
        'name' => _x(ucfirst('Examples'), 'post type general name', 'ozpilot'),
        'singular_name' => _x(ucfirst('Example'), 'post type singular name', 'ozpilot'),
        'menu_name' => _x(ucfirst('Examples'), 'admin menu', 'ozpilot'),
        'name_admin_bar' => _x(ucfirst('Examples'), 'add new on admin bar', 'ozpilot'),
        'add_new' => _x('Add New', 'example', 'ozpilot'),
        'add_new_item' => __('Add ' . ucfirst('Example'), 'ozpilot'),
        'new_item' => __('New ' . ucfirst('Example'), 'ozpilot'),
        'edit_item' => __('Edit ' . ucfirst('Example'), 'ozpilot'),
        'view_item' => __('View ' . ucfirst('Example'), 'ozpilot'),
        'all_items' => __('All ' . ucfirst('Examples'), 'ozpilot'),
        'search_items' => __('Search ' . ucfirst('Examples'), 'ozpilot'),
        'not_found' => __('No ' . ucfirst('Examples') . ' found.', 'ozpilot'),
        'not_found_in_trash' => __('No ' . ucfirst('Examples') . ' found in Trash.', 'ozpilot'),
        'parent_item_colon' => '',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        //'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 5,
        'exclude_from_search' => false
    );

    register_post_type('example',$args);
}
add_action('init','ozpilot_custom_post_type');



include 'example-meta.php';