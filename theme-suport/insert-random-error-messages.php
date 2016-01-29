<?php
/*--------------------------------------------------------------
	RANDOM ERROR MESSAGES
--------------------------------------------------------------*/
add_filter( 'login_errors', 'btwp_random_error_messages' );

function btwp_random_error_messages() {

    $custom_error_messages = array(
        '<strong>Você</strong> não passará!',
        'Contate o administrador!',
        '<strong>Xi...</strong> errou!',
        'Tentando trapacear?',
        'Precisa de ajuda?',
        'Precisa de ajuda?',
    );

    return $custom_error_messages[array_rand($custom_error_messages)];;
}
