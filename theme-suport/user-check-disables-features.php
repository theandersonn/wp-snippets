<?php
/*--------------------------------------------------------------
	USER CHECK DISABLES FEATURES
--------------------------------------------------------------*/
add_action( 'init', 'btwp_user_check_disables_features' );

function btwp_user_check_disables_features(){

	$user_ID = get_current_user_id();

	if( is_user_logged_in() && $user_ID != 1 ){

		// aviso de atualização de plugins - remove
		remove_action('load-update-core.php','wp_update_plugins');
		add_filter('pre_site_transient_update_plugins','__return_null');

		// aviso de atualização de versão do WordPress - remove
		add_filter( 'pre_site_transient_update_core' , create_function( '$a', "return null;" ) );

	}
}
