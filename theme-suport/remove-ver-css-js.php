<?php
/*--------------------------------------------------------------
	REMOVE VERSION CSS AND JS
--------------------------------------------------------------*/
add_filter( 'style_loader_src', 'btwp_remove_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'btwp_remove_ver_css_js', 9999 );

function btwp_remove_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}