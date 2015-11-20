<?php
/*--------------------------------------------------------------
	REMOVE FUNCIONALIDADE(s) DO TEMA
--------------------------------------------------------------*/

// aviso de atualização de plugins - remove
remove_action('load-update-core.php','wp_update_plugins');
add_filter('pre_site_transient_update_plugins','__return_null');

// aviso de atualização de versão do WordPress - remove
add_filter( 'pre_site_transient_update_core' , create_function( '$a', "return null;" ) );
