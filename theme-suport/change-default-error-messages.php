<?php 
/*--------------------------------------------------------------
	CHANGE DEFAULT ERROR MESSAGES
--------------------------------------------------------------*/ 
add_filter( 'login_errors', 'btwp_remove_default_login_errors' );

function btwp_remove_default_login_errors() {
    return '<strong>Erro</strong>: Nome de usuário ou Senha está incorreto.';
}