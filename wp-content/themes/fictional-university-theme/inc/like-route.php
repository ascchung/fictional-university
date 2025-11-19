<?php

add_action('rest_api_init', 'universityLikeRoutes');

function universityLikeRoutes()
{
    register_rest_route('university/v1', 'manageLike', [
        'methods' => 'POST',
        'callback' => 'createLike',
        'permission_callback' => '__return_true'
    ]);

    register_rest_route('university/v1', 'manageLike', [
        'methods' => 'DELETE',
        'callback' => 'deleteLike',
        'permission_callback' => '__return_true'
    ]);
}

function createLike()
{
    wp_insert_post([
        'post_type' => 'like',
        'post_status' => 'publish',
        'post_title' => '2nd PHP Test',
        'meta_input' => [
            'liked_professor_id' => 12345
        ]
    ]);
}

function deleteLike()
{
    return 'Thanks for trying to delete a like.';
}
