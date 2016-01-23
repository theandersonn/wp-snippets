<?php 
/*--------------------------------------------------------------
	ADD CONTENT AFTER ALL POSTS
--------------------------------------------------------------*/

add_filter('the_content', 'btwp_after_all_post_content');

function btwp_after_post_content($content) {

	if(	!is_feed() && !is_home() && is_singular() && is_main_query() ) {
    	$content .= '<p>Conteúdo personalizado no final de todos os posts</p>';
	}
    
    return $content;
}