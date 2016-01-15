<?php 

/*--------------------------------------------------------------
	CHANGE FOOTER ADMIN
--------------------------------------------------------------*/ 
function btwp_change_footer_admin () {
	echo 'Theme developed by <a href="https://github.com/theandersonn" target="_blank">theandersonn</a>. Powered by <a href="http://www.wordpress.org" target="_blank">WordPress</a>';
}

add_filter('admin_footer_text', 'btwp_change_footer_admin');