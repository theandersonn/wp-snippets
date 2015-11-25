<?php
/*--------------------------------------------------------------
INSERE WIDGET PERSONALIZADO NO DASHBOARD ADMIN
--------------------------------------------------------------*/
add_action('wp_dashboard_setup', 'btwp_insert_custom_dashboard_widgets');
 
function btwp_insert_custom_dashboard_widgets() {
	global $wp_meta_boxes;

	wp_add_dashboard_widget('custom_help_widget', 'Contate o desenvolvedor', 'btwp_insert_custom_dashboard_help');
}

function btwp_insert_custom_dashboard_help() {
	echo '<p>Bem vindo ao sistema do site nome da empresa! Precisa de Ajuda? Contate o desenvolvedor <a href="mailto:email@email.com.br">aqui</a>. Para aceesar o nosso site, visite: <a href="http://www.nome-site.com.br" target="_blank">Nome do Site</a></p>';
}