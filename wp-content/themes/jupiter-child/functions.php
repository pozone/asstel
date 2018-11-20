<?php

// funzione per importare il file custom di javascript
function load_custom_js() { 
    wp_register_script ('custom_js', get_stylesheet_directory_uri() . '/js/custom_script.js', array( 'jquery' ),'1',true);
  	wp_enqueue_script('custom_js');
}
add_action( 'wp_enqueue_scripts', 'load_custom_js' );

// FUNZIONE PER CARICARE UN CSS SOLO PER MOBILE E UNO SOLO PER DESKTOP
function css_mobile_desktop(){
  	if( wp_is_mobile() ){
		wp_enqueue_style( 'css_mobile', get_stylesheet_directory_uri().'/css/css_mobile.css'); 
	}else{
		wp_enqueue_style( 'css_desktop', get_stylesheet_directory_uri().'/css/css_desktop.css'); 
	}
}
add_action( 'wp_enqueue_scripts', 'css_mobile_desktop');


/* PER AGGIUNGERE/SOSTITUIRE UNA CLASSE A QUELLA DEL MIMETYPE LINK ICON PLUGIN */
function my_classnameFunction( $classnames_string ) {
	if(is_front_page()){
		//return $classnames_string . ' mk-image-lightbox';
		//return ' mk-image-lightbox';
	}
}
//add_filter( 'mtli_classnames', 'my_classnameFunction' );


/* PLACEHOLDER DEL SEARCH */
function asstel_search_form( $html ) {
        $html = str_replace( 'placeholder="', 'placeholder="Scrivi e cerca', $html );
        return $html;
}
//add_filter( 'get_search_form', 'asstel_search_form' );


?>