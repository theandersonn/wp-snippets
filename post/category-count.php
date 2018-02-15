<?php
    function categoryCount($id){
        $category = get_category($id);
        return $category->count;
    }

    // echo categoryCount('1');
    // echo categoryCount('9');
    // echo categoryCount('8');
    // echo categoryCount('10');