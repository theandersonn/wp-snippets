<?php
/*--------------------------------------------------------------
	REMOVE FUNCIONALIDADE(s) DO TEMA
--------------------------------------------------------------*/

// aviso de atualização de versão do WordPress - remove
add_filter( 'pre_site_transient_update_core' , create_function( '$a', "return null;" ) );
