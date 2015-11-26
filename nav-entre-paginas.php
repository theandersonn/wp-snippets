<?php
//COLOCAR ESTE CÓDIGO QUE ESTA COMENTADO NA TEMPLATE DE PÁGINA
// $args = array(
// 	'tag' => get_option('periodo'),
// 	'post_type' => 'page',
// 	'meta_key' => 'especial' 
// 	);

// $id_atual = $post->ID;
// $the_query = new WP_Query( $args );



function nav_entre_paginas($id_atual,$the_query){

    $count = count( $the_query->posts );

    $page = $the_query->posts;

    for ($p = 0; $p < $count; $p++) {
        $ids[$p] = $page[$p]->ID;
    }

    if($count == 2) :
        for($p = 0; $p < $count; $p++) {
            if($id_atual == $ids[$p]) :
                if($p > 0) :
                    $a = $p - 1;
                    echo "<a class='pos-a anterior' href='?page_id=$ids[$a]'></a>";
                else :
                    $pr = $p + 1;
                    echo "<a class='pos-a proximo' href='?page_id=$ids[$pr]'></a>";
                endif;
            endif;
        }
    elseif($count >= 3) :
        for($p = 0; $p < $count; $p++) {
            if($id_atual == $ids[$p]) :
                if($p == 0) :
                    $pr = $p + 1;
                    echo "<a class='pos-a proximo' href='?page_id=$ids[$pr]'></a>";
                elseif($count - $p == 1) :
                    $a = $p - 1;
                    echo "<a class='pos-a anterior' href='?page_id=$ids[$a]'></a>";
                else :
                    $a = $p - 1;
                    echo "<a class='pos-a anterior' href='?page_id=$ids[$a]'></a>";
                    $pr = $p + 1;
                    echo "<a class='pos-a proximo' href='?page_id=$ids[$pr]'></a>";
                endif;
            endif;
        }
    endif;

    wp_reset_postdata();
}

?>