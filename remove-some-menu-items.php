<?php
/*--------------------------------------------------------------
REMOVE ITENS DO MENU DASHBOARD ADMIN
--------------------------------------------------------------*/
add_filter( 'custom_menu_order', 'btwp_toggle_custom_menu_order' );
function btwp_toggle_custom_menu_order(){
    return true;
}
 
add_filter( 'menu_order', 'btwp_remove_some_menu_items' );
function btwp_remove_some_menu_items( $menu_order ){
    global $menu;
    global $current_user;
    get_currentuserinfo(); //Use para debugar: print_r($current_user);
 
    if($current_user->roles[0] == 'author') //poderia ser: editor, contributor ou tipo de usuário customizado.
    {
      $excludes = array(
      	'edit-comments.php', 			// oculta menu de comentários
      	'themes.php', 					// oculta menu aparência
      	'upload.php', 					// oculta menu mídia
        'edit.php', 					// oculta menu Posts
        'tools.php', 					// oculta menu Ferramentas
        'edit.php?post_type=portfolio' 	//oculta menu Portfolio (Custom Post Type)
      );
 
      foreach ( $menu as $mkey => $m ) {
 
          foreach( $excludes as $exclude ){
              $key = array_search( $exclude, $m );
              if( $key ) unset( $menu[$mkey] );
          }
 
      }
 
    }
    return $menu_order;
}