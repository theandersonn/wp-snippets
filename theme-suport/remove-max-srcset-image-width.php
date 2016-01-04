<?php
/*--------------------------------------------------------------------
	REMOVE THE 1600PX LIMIT FOR IMAGES INCLUDED IN SRCSET ATRIBUTES
--------------------------------------------------------------------*/
add_filter( 'max_srcset_image_width', 'btwp_remove_max_srcset_image_width' );

function btwp_remove_max_srcset_image_width( $max_width ) {
    return false;
}
