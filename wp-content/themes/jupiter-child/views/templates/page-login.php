<?php //wp_login_form( $args ); ?> 

<?php
if ( ! is_user_logged_in() ) { // Display WordPress login form:
    $args = array(
        //'redirect' => admin_url(), 
        'form_id' => 'loginform-custom',
        'label_username' => __( 'Username' ),
        'label_password' => __( 'Password' ),
        'label_remember' => __( 'Ricordami' ),
        'label_log_in' => __( 'Accedi' ),
        'remember' => true
    );
    wp_login_form( $args );
} else { // If logged in:
    wp_loginout( home_url() ); // Display "Log Out" link.
    
}
?>