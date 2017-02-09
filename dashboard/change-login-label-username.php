<?php 

/*--------------------------------------------------------------
	CHANGE LOGIN LABEL USERNAME
--------------------------------------------------------------*/ 
add_action( 'login_head', 'login_function' );

function login_function() {
    add_filter( 'gettext', 'username_change', 20, 3 );
    
    function username_change( $translated_text, $text, $domain ) {
        if ( $text === 'Username or Email Address' ) {
            $translated_text = 'OTHER NAME HERE';
        }
        return $translated_text;
    }
}