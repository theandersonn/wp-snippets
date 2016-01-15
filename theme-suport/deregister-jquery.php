<?php 

/*--------------------------------------------------------------
	DEREGISTER JQUERY
--------------------------------------------------------------*/ 
function btwp_deregister_jquery() {
    wp_deregister_script( 'jquery' );
    wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js','','',true);
}
 
add_action('wp_enqueue_scripts', 'btwp_deregister_jquery');