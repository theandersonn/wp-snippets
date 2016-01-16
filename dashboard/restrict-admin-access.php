<?php 
/*--------------------------------------------------------------
	RESTRICT ADMIN PANEL TO ADMINISTRATORS
--------------------------------------------------------------*/ 
function btwp_restrict_admin_access() {
	
	global $current_user;
	get_currentuserinfo();
	
	if( !array_key_exists( 'administrator', $current_user->caps ) ) {
		wp_redirect( get_bloginfo( 'url' ) );
		exit;
	}

}

add_action('admin_init', 'btwp_restrict_admin_access', 1);