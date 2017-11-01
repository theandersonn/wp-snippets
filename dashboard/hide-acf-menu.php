<?php  
/*--------------------------------------------------------------
	HIDE ACF MENU ITEM FROM THE ADMIN MENU
--------------------------------------------------------------*/
add_action( 'admin_menu', 'btwp_hide_acf_menu', 999 );

function btwp_hide_acf_menu(){

    if( !(current_user_can('administrator')) )
    {
        remove_menu_page('edit.php?post_type=acf');
    }

}