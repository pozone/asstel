<?php

// funzione per importare il file custom di javascript
function load_custom_js() { 
    wp_register_script ('custom_js', get_stylesheet_directory_uri() . '/js/custom_script.js', array( 'jquery' ),'1',true);
  	wp_enqueue_script('custom_js');
}
add_action( 'wp_enqueue_scripts', 'load_custom_js' );


function menu_mobile_only(){
  	if( !wp_is_mobile() ){
		wp_enqueue_style( 'menu_mobile', get_stylesheet_directory_uri().'/css/menu_mobile.css'); 
	}
}
add_action( 'wp_enqueue_scripts', 'menu_mobile_only');

?>