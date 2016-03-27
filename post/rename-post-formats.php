<?php
/*--------------------------------------------------------------
	RENAME POST FORMATS
--------------------------------------------------------------*/ 
add_filter( 'esc_html', 'rename_post_formats' );

function rename_post_formats( $safe_text ) {
   if ( $safe_text == __('Image') ) :
       return 'newTip';
   endif;

   return $safe_text;
}