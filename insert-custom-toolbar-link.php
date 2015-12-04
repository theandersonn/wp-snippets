<?php
/*--------------------------------------------------------------
	INSERT LINK TO THE WP TOOLBAR
--------------------------------------------------------------*/  
function btwp_insert_custom_toolbar_link($wp_admin_bar) {
	$args = array(
		'id' => 'andersonn',
		'title' => 'Fale com Andersonn', 
		'href' => 'https://github.com/theandersonn', 
		'meta' => array(
			'class' => 'andersonn', 
			'title' => 'Fale com Andersonn'
			)
	);
	$wp_admin_bar->add_node($args);
}
add_action('admin_bar_menu', 'btwp_insert_custom_toolbar_link', 999);