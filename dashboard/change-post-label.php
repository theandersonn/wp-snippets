<?php 

/*--------------------------------------------------------------
    CHANGE POST LABEL
--------------------------------------------------------------*/ 

add_action( 'admin_menu', 'change_post_label' );
add_action( 'init', 'change_post_object' );

function change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Mídias';
    $submenu['edit.php'][5][0] = 'Mídias';
    $submenu['edit.php'][10][0] = 'Adicionar Mídia';
    $submenu['edit.php'][16][0] = 'Tags';
    echo '';
}

function change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Mídias';
    $labels->singular_name = 'Mídia';
    $labels->add_new = 'Adicionar Mídia';
    $labels->add_new_item = 'Adicionar Mídia';
    $labels->edit_item = 'Editar Mídia';
    $labels->new_item = 'Mídia';
    $labels->view_item = 'Ver Mídia';
    $labels->search_items = 'Buscar Mídias';
    $labels->not_found = 'Nenhum Mídia encontrado';
    $labels->not_found_in_trash = 'Nenhum Mídia encontrado no Lixo';
    $labels->all_items = 'Todos Mídias';
    $labels->menu_name = 'Mídias';
    $labels->name_admin_bar = 'Mídias';
} 