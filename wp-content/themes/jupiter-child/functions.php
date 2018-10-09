<?php

// funzione per importare il file custom di javascript
function load_custom_js() { 
    wp_register_script ('custom_js', get_stylesheet_directory_uri() . '/js/custom_script.js', array( 'jquery' ),'1',true);
  	wp_enqueue_script('custom_js');
}
add_action( 'wp_enqueue_scripts', 'load_custom_js' );

?>