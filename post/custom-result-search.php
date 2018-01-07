<?php

    if( !is_admin() ) {
        function search_filter($query) {
            if ( $query->is_search ) {
                $query->set('post_type', 'post');
            }
            return $query;
        }
        
        add_filter('pre_get_posts','search_filter');
    }