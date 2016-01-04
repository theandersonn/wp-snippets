<?php
/*--------------------------------------------------------------
    SHOW ADMIN MESSAGE
--------------------------------------------------------------*/
function btwp_show_message( $message, $errormsg = false ) {

    if ( $errormsg ) {
        echo '<div id="message" class="error">';
    } else {
        echo '<div id="message" class="updated fade">';
    }

    echo "<p><strong>$message</strong></p></div>";

}

add_action( 'admin_notices', 'btwp_show_admin_message' );

function btwp_show_admin_message() {
    btwp_show_message( "Mensagem de erro Blank Theme WP", true );
}
