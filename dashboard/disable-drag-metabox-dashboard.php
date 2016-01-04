<?php
/*--------------------------------------------------------------
	DISABLE DRAG METABOX DASHBOARD
--------------------------------------------------------------*/
add_action( 'admin_init', 'btwp_disable_drag_metabox_dashboard' );

function btwp_disable_drag_metabox_dashboard() {
    wp_deregister_script( 'postbox' );
}
