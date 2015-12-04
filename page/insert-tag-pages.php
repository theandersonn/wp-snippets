<?php
/*--------------------------------------------------------------
INSERE TAGS EM PÁGINAS
--------------------------------------------------------------*/
function tags_support_all() {
    register_taxonomy_for_object_type('post_tag', 'page');
}
add_action('init', 'tags_support_all');
