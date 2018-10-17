<?php

// funzione per importare il file custom di javascript
function load_custom_js() { 
    wp_register_script ('custom_js', get_stylesheet_directory_uri() . '/js/custom_script.js', array( 'jquery' ),'1',true);
  	wp_enqueue_script('custom_js');
}
add_action( 'wp_enqueue_scripts', 'load_custom_js' );

// funzione per nascondere il menu del template nella versione desktop.
// nella versione mobile si vedrà solo il menu SUPERFLY MENU
function menu_mobile_only(){
  	if( !wp_is_mobile() ){
		wp_enqueue_style( 'menu_mobile', get_stylesheet_directory_uri().'/css/menu_mobile.css'); 
	}
}
add_action( 'wp_enqueue_scripts', 'menu_mobile_only');


/* PER AGGIUNGERE/SOSTITUIRE UNA CLASSE A QUELLA DEL MIMETYPE LINK ICON PLUGIN */
function my_classnameFunction( $classnames_string ) {
	if(is_front_page()){
		//return $classnames_string . ' mk-image-lightbox';
		//return ' mk-image-lightbox';
	}
}
//add_filter( 'mtli_classnames', 'my_classnameFunction' );

?>