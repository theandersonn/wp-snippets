<?php
/*--------------------------------------------------------------
ACTIVATE MAINTENACE MODE
--------------------------------------------------------------*/
function btwp_maintenace_mode() {

	if ( !current_user_can( 'edit_themes' ) || !is_user_logged_in() ) {
		die('Site em Manutenção.');
	}

}

add_action('get_header', 'btwp_maintenace_mode');
