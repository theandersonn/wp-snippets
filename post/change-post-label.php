<?php
/*--------------------------------------------------------------
	CHANGE POST OBJECT LABEL
--------------------------------------------------------------*/
add_action( 'init', 'btwp_change_post_object_label' );

function btwp_change_post_menu_label() {

  global $menu;
  global $submenu;
  $menu[5][0]                 = 'Notícias';
  $submenu['edit.php'][5][0]  = 'Notícias';
  $submenu['edit.php'][10][0] = 'Nova notícia';
  // $submenu['edit.php'][15][0] = 'Status'; # alterar label de Categoria
  // $submenu['edit.php'][16][0] = 'Labels'; # alterar label de Tags
  echo '';

}

/*--------------------------------------------------------------
	CHANGE POST MENU LABEL
--------------------------------------------------------------*/
add_action( 'admin_menu', 'btwp_change_post_menu_label' );

function btwp_change_post_object_label() {

  global $wp_post_types;
  $labels = &$wp_post_types['post']->labels;
  $labels->name               = 'Notícias';
  $labels->singular_name      = 'Notícias';
  $labels->add_new            = 'Nova notícia';
  $labels->add_new_item       = 'Nova notícia';
  $labels->edit_item          = 'Editar';
  $labels->new_item           = 'Nova notícia';
  $labels->view_item          = 'Visualizar';
  $labels->search_items       = 'Buscar notícias';
  $labels->not_found          = 'Nada encontrado';
  $labels->not_found_in_trash = 'Nada na lixeira';

}
