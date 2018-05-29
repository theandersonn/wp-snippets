<?php
    function count_posts( $postTypeName ) {
        $countPosts = wp_count_posts( $postTypeName );
        return $countPosts->publish;
    }