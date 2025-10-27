<?php

function university_post_types()
{
    // Campus Post Type
    register_post_type('campus', [
        'has_archive' => true,
        'show_in_rest' => true,
        'capability_type' => 'campus',
        'map_meta_cap' => true,
        'supports' => [
            'title',
            'editor',
            'excerpt',
        ],
        'rewrite' => [
            'slug' => 'campuses'
        ],
        'public' => true,
        'menu_icon' => 'dashicons-location-alt',
        'labels' => [
            'name' => 'Campuses',
            'add_new' => 'Add New Campus',
            'add_new_item' => 'Add New Campus',
            'edit_item' => 'Edit Campus',
            'all_items' => 'All Campuses',
            'singular_name' => 'Campus',
        ]
    ]);

    // Event Post Type
    register_post_type('event', [
        'has_archive' => true,
        'show_in_rest' => true,
        'capability_type' => 'event',
        'map_meta_cap' => true,
        'supports' => [
            'title',
            'editor',
            'excerpt',
        ],
        'rewrite' => [
            'slug' => 'events'
        ],
        'public' => true,
        'menu_icon' => 'dashicons-calendar',
        'labels' => [
            'name' => 'Events',
            'add_new' => 'Add New Event',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event',
        ]
    ]);

    // ProgramPost Type
    register_post_type('program', [
        'has_archive' => true,
        'show_in_rest' => true,
        'capability_type' => 'program',
        'map_meta_cap' => true,
        'supports' => [
            'title',
            'editor'
        ],
        'rewrite' => [
            'slug' => 'programs'
        ],
        'public' => true,
        'menu_icon' => 'dashicons-awards',
        'labels' => [
            'name' => 'Programs',
            'add_new' => 'Add New Program',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program',
        ]
    ]);

    // Professor Post Type
    register_post_type('professor', [
        'show_in_rest' => true,
        'capability_type' => 'professor',
        'map_meta_cap' => true,
        'supports' => [
            'title',
            'editor',
            'thumbnail'
        ],
        'public' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'labels' => [
            'name' => 'Professors',
            'add_new' => 'Add New Professor',
            'add_new_item' => 'Add New Professor',
            'edit_item' => 'Edit Professor',
            'all_items' => 'All Professors',
            'singular_name' => 'Professor',
        ]
    ]);

    // Note Post Type
    register_post_type('note', [
        'capability_type' => 'note',
        'show_in_rest' => true,
        'map_meta_cap' => true,
        'supports' => [
            'title',
            'editor',
        ],
        'public' => false,
        'show_ui' => true,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'labels' => [
            'name' => 'Notes',
            'add_new' => 'Add New Note',
            'add_new_item' => 'Add New Note',
            'edit_item' => 'Edit Note',
            'all_items' => 'All Notes',
            'singular_name' => 'Note',
        ]
    ]);

    // Like Post Type
    register_post_type('like', [
        'map_meta_cap' => true,
        'supports' => [
            'title',
        ],
        'public' => false,
        'show_ui' => true,
        'menu_icon' => 'dashicons-heart',
        'labels' => [
            'name' => 'Likes',
            'add_new' => 'Add New Like',
            'add_new_item' => 'Add New Like',
            'edit_item' => 'Edit Like',
            'all_items' => 'All Likes',
            'singular_name' => 'Like',
        ]
    ]);
}

add_action('init', 'university_post_types');
