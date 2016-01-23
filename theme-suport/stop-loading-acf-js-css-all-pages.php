<?php
/*--------------------------------------------------------------
	STOP LOADING THE JAVASCRIPT AND CSS STYLESHEET ON ALL PAGES
--------------------------------------------------------------*/
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

/*--------------------------------------------------------------
	LOAD THE FILES ON PAGES WHICH CONTAIN CONTACT FORMS
--------------------------------------------------------------*/
if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
    wpcf7_enqueue_scripts();
}

if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
    wpcf7_enqueue_styles();
}