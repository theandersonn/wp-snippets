<?php  
/*--------------------------------------------------------------
	HIDE USERNAMES FROM COMMENT CLASS
--------------------------------------------------------------*/ 
add_filter('comment_class', 'btwp_true_completely_remove_css_class');

function btwp_true_completely_remove_css_class( $classes ) {
	
	foreach( $classes as $key => $class ) {
		if(strstr( $class, "comment-author-" ) ) {
			unset( $classes[$key] );
		}
	}
	
	return $classes;

}