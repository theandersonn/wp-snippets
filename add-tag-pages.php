<?php
// ADICIONAR TAGS NAS PÁGINAS
function tags_support_all() {
    register_taxonomy_for_object_type('post_tag', 'page');
}

// tag hooks
add_action('init', 'tags_support_all');
