<?php  
/*--------------------------------------------------------------
	REGISTRA CUSTOM POST -> PORTFÓLIO
--------------------------------------------------------------*/
add_action('init', 'btwp_custom_post_portfolio');

function btwp_custom_post_portfolio(){
	$labels = array(
		'name' 					=> 'Portfólio',
		'singular_name' 		=> 'Portfólio',
		'add_new' 				=> 'Adicionar novo',
		'add_new_item' 			=> 'Adicionar novo Job',
		'edit_item' 			=> 'Editar Job',
		'new_item' 				=> 'Novo Job',
		'all_items' 			=> 'Todos Jobs',
		'view_item' 			=> 'Visualizar Job',
		'search_items' 			=> 'Procurar Job',
		'not_found' 			=> 'Nenhum Job encontrado',
		'not_found_in_trash' 	=> 'Nenhum Job encontrado na lixeira',
		'parent_item_colom'		=> '',
		'menu_name'				=> 'Portfólio'
	);

	$args = array(
		'labels'			=> $labels,
		'public'			=> true,
		'has_archive' 		=> true,
		'menu_position'		=> 5,
		'supports' 			=> array ('title', 'editor', 'thumbnail', 'excerpt', 'comments')
	);

	register_post_type('portfolio', $args);
}

// MODIFICA MENSAGENS DE ATUALIZAÇÃO
add_filter('post_updated_messages', 'btwp_updated_messages');

function btwp_updated_messages ($messages){
	global $post_ID;

	$messages['portfolio'] = array(
		0 => '',
		1 => 'Job Atualizado. <a href="'. esc_url( get_permalink( $post_ID ) ) .'">Visualizar Job</a>',
		4 => 'Job Atualizado.',
		6 => 'Job Publicado. <a href="'. esc_url( get_permalink( $post_ID ) ) .'">Visualizar Job</a>',
		7 => 'Job Salvo.'
	);

	return $messages;
}