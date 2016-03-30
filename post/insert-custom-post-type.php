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
		'all_items' 			=> 'Todos os Jobs',
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
		'menu_icon' 		=> 'dashicons-images-alt2', // https://developer.wordpress.org/resource/dashicons/		
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

/*--------------------------------------------------------------
	REGISTRA TAXONOMIES -> PORTFÓLO - CATEGORY
--------------------------------------------------------------*/
add_action('init', 'btwp_taxonomies_portfolio_category');

function btwp_taxonomies_portfolio_category(){

	$labels = array(
		'name' 					=> 'Categorias',
		'singular_name' 		=> 'Categoria',
		'add_new' 				=> 'Adicionar nova',
		'add_new_item' 			=> 'Adicionar nova Categoria',
		'edit_item' 			=> 'Editar Categoria',
		'new_item' 				=> 'Nova Categoria',
		'all_items' 			=> 'Todas as Categorias',
		'view_item' 			=> 'Visualizar Categoria',
		'search_items' 			=> 'Procurar Categoria',
		'not_found' 			=> 'Nenhuma Categoria encontrada',
		'not_found_in_trash' 	=> 'Nenhuma Categoria encontrada na lixeira',
		'parent_item_colom'		=> '',
		'menu_name'				=> 'Categorias'
	);

	$args = array(
		'labels'				=> $labels,
		'hierarchical'			=> true,
		'show_admin_column'		=> true
	);

	register_taxonomy('portfolio_category', 'portfolio', $args);
}

/*--------------------------------------------------------------
	EXIBE FILTRO POR CATEGORIA
--------------------------------------------------------------*/
add_action( 'restrict_manage_posts', 'btwp_show_filter_portfolio_category' );

function btwp_show_filter_portfolio_category() {
	
	global $typenow;
	$taxonomy = 'portfolio_category';

	if( $typenow == 'portfolio' ){
		$filters = array($taxonomy);
		
		foreach ($filters as $tax_slug) {
			$tax_obj = get_taxonomy($tax_slug);
			$tax_name = $tax_obj->labels->name;
			$terms = get_terms($tax_slug);
		
			echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
			echo "<option value=''>Todas as Categorias</option>";
		
				foreach ($terms as $term) { 
					echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>'; 
				}
		
			echo "</select>";
		}
	}
}

/*--------------------------------------------------------------
	REGISTRA TAXONOMIES -> PORTFÓLO - TAG
--------------------------------------------------------------*/
add_action('init', 'btwp_taxonomies_portfolio_tag');

function btwp_taxonomies_portfolio_tag(){

	$labels = array(
		'name' 					=> 'Tags',
		'singular_name' 		=> 'Tag',
		'add_new' 				=> 'Adicionar nova',
		'add_new_item' 			=> 'Adicionar nova Tag',
		'edit_item' 			=> 'Editar Tag',
		'new_item' 				=> 'Nova Tag',
		'all_items' 			=> 'Todas as Tags',
		'view_item' 			=> 'Visualizar Tag',
		'search_items' 			=> 'Procurar Tag',
		'not_found' 			=> 'Nenhuma Tag encontrada',
		'not_found_in_trash' 	=> 'Nenhuma Tag encontrada na lixeira',
		'parent_item_colom'		=> '',
		'menu_name'				=> 'Tags'
	);

	$args = array(
		'labels'			=> $labels,
		'hierarchical'		=> false,
		'show_admin_column'		=> true,
	);

	register_taxonomy('portfolio_tag', 'portfolio', $args);
}

/*--------------------------------------------------------------
	EXIBE FILTRO POR TAG
--------------------------------------------------------------*/
add_action( 'restrict_manage_posts', 'btwp_show_filter_portfolio_tag' );

function btwp_show_filter_portfolio_tag() {
	
	global $typenow;
	$taxonomy = 'portfolio_tag';

	if( $typenow == 'portfolio' ){
		$filters = array($taxonomy);
		
		foreach ($filters as $tax_slug) {
			$tax_obj = get_taxonomy($tax_slug);
			$tax_name = $tax_obj->labels->name;
			$terms = get_terms($tax_slug);
		
			echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
			echo "<option value=''>Todas as Tags</option>";
		
				foreach ($terms as $term) { 
					echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>'; 
				}
		
			echo "</select>";
		}
	}
}

/*--------------------------------------------------------------
	INSERE METABOX
--------------------------------------------------------------*/
add_action('add_meta_boxes', 'btwp_portfolio_link_box');


function btwp_portfolio_link_box(){
	
	add_meta_box(
		'portfolio_link_box',
		'Link do Job',
		'btwp_portfolio_link_content',
		'portfolio',
		'side',
		'low'
	);	
}

// INSERE METABOX CAMPOS DE FORMULÁRIO
function btwp_portfolio_link_content(){

	// INSERE NONCES
	wp_nonce_field('portfolio_metabox_form_save', 'portfolio_link_box_content_nonce');	

	$link = get_post_meta( get_the_ID(), '_portfolio_link', true )

	?>
	<label for="portfolio_link"></label>
	<input type="text" id="portfolio_link" name="portfolio_link" placeholder="Insira o link" value="<?php echo esc_attr($link); ?>" style="width: 100%; height: 2.5em; margin: 5px 0;"/>
	<?php
}

// TRATAMENTO DE DADOS AO SALVAR 
add_action('save_post', 'btwp_portfolio_link_save');

function btwp_portfolio_link_save( $post_id ){

	// VERIFICA  CONSTANTES
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
		return;

	// VERIFICA SE O POST TYPE ESTÁ CORRETO
	if ( 'portfolio' != get_post_type() || !current_user_can('edit_post', $post_id) )
		return;

	// VERIFICA SE ESTÁ RECEBENDO O NONCE E SE OS DADOS ESTÃO VINDO DO WORDPRESS
	check_admin_referer('portfolio_metabox_form_save', 'portfolio_link_box_content_nonce');

	$portfolio_link = sanitize_text_field($_POST['portfolio_link']);

	update_post_meta( $post_id, '_portfolio_link', $portfolio_link );
}

/*--------------------------------------------------------------
	LOOP PERSONALIZADO PARA FILTRAR TAXONOMIAS
--------------------------------------------------------------*/
$args = new WP_query(
    array(
        'post_type'         => 'portfolio', // cpt
        'term'              => 'portfolio_category', // taxonomia category registrada 
        'posts_per_page'    => -1,
        'paged'             => $paged,
        'tax_query'         => array(
							        array(
							            'taxonomy'  => 'portfolio_tag', // taxonomia tag registrada
							            'field'     => 'slug',
							            'terms'     => 'sites' // tag inserida no admin
            )
        )
    )
);
?>    

<?php if( $args->have_posts() ) : while( $args->have_posts() ) : $args->the_post(); ?> 

<?php the_title(); ?>

<?php the_content(); ?>

<?php echo get_post_meta($post->ID, '_portfolio_link', true);?>

<?php endwhile; endif; wp_reset_postdata(); ?> 