<?php 
/*--------------------------------------------------------------
	CUSTOM POST TITLE LENGTH
--------------------------------------------------------------*/ 
function btwp_custom_post_title_length( $char ) {
          
    $title = get_the_title( $post->ID );
    $title = substr( $title, 0, $char );
     
    echo $title;

}

/* <?php btwp_custom_post_title(50); ?> */