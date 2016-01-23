<?php 
/*--------------------------------------------------------------
	REMOVE POST META BOXES
--------------------------------------------------------------*/
add_action( 'admin_menu', 'btwp_remove_post_meta_boxes' );

if ( is_admin() ) {

	function btwp_remove_post_meta_boxes() {
 	
 		if( !current_user_can('administrator') ) {
  	
  			remove_meta_box('tagsdiv-post_tag', 'post', 'normal');
  			remove_meta_box('categorydiv', 'post', 'normal');
  			remove_meta_box('postimagediv', 'post', 'normal');
  			remove_meta_box('authordiv', 'post', 'normal');
  			remove_meta_box('postexcerpt', 'post', 'normal');
			remove_meta_box('trackbacksdiv', 'post', 'normal');
			remove_meta_box('commentstatusdiv', 'post', 'normal');
			remove_meta_box('postcustom', 'post', 'normal');
			remove_meta_box('commentstatusdiv', 'post', 'normal');
			remove_meta_box('commentsdiv', 'post', 'normal');
			remove_meta_box('revisionsdiv', 'post', 'normal');
			remove_meta_box('authordiv', 'post', 'normal');
			remove_meta_box('slugdiv', 'post', 'normal');
 		}

	}

}