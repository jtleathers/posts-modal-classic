<?php
// Add this to your functions.php file's enqueue section.
// Conditionally load the Modal Window files.
if ( is_page( 137 ) ) {

    // Enqueue the CSS file.
    wp_enqueue_style(
        'fwd-rest-api-css',
        get_template_directory_uri() . '/css/rest-api.css',
        array(),
        _S_VERSION
    );

    // Enqueue the JS file.
    wp_enqueue_script(
        'fwd-rest-api',
        get_template_directory_uri() . '/js/rest-api.js',
        array(),
        '20200528',
        false
    );

    // Create a JS object to store the URL for the JS file.
    wp_localize_script(
        'fwd-rest-api',
        'rest_object',
        array( 'api_url' => site_url( '/wp-json/wp/v2/' ) )
    );

}
?>