<?php
require get_template_directory() . '/includes/headless-mode.php';

/**
 * Endpoint: https://example.com/wp-json/wp/v2/example/
 * Accepts 'email'
 * Custom REST API - Example function
 */
add_action('rest_api_init', function () {
    register_rest_route( 'wp/v2', 'example', array(
        'methods'  => 'GET',
        'callback' => 'get_example',
        'args' => array(
            'email' => array(
                'validate_callback' => function( $param, $request, $key ) {
                    return !empty( $param );
                }
            ),
        ),
        'permission_callback' => function() {
            return current_user_can('edit_posts');
        }
    ));
});

function get_example($request) {
    $email = $request['email'];

    $user_data = get_user_by( 'email', $email );

    $response = new WP_REST_Response($user_data);
    $response->set_status(200);

    return $response;
}