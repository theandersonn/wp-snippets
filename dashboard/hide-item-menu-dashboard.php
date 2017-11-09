<?php
/*--------------------------------------------------------------
  HIDE ITEM MENU DASHBOARD
--------------------------------------------------------------*/
add_action( 'admin_menu', 'btwp_hide_item_menu_dashboard' );

function btwp_hide_item_menu_dashboard(){
  
  if( !(current_user_can('administrator')) ) {
    remove_menu_page( 'index.php' );                  //Dashboard
    remove_menu_page( 'edit.php' );                   //Posts
    remove_menu_page( 'upload.php' );                 //Media
    remove_menu_page( 'edit.php?post_type=page' );    //Pages
    remove_menu_page( 'edit-comments.php' );          //Comments
    remove_menu_page( 'themes.php' );                 //Appearance
    remove_menu_page( 'plugins.php' );                //Plugins
    remove_menu_page( 'users.php' );                  //Users
    remove_menu_page( 'tools.php' );                  //Tools
    remove_menu_page( 'options-general.php' );        //Settings
  }
  
}