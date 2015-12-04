<?php
/*--------------------------------------------------------------
	Exibe Posts Populares
--------------------------------------------------------------*/
function wpb_set_post_views( $postID ) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta( $postID, $count_key, true );

    if( $count=='' ){
        $count = 0;
        delete_post_meta( $postID, $count_key );
        add_post_meta( $postID, $count_key, '0' );
    }else{
        $count++;
        update_post_meta( $postID, $count_key, $count );
    }
}
// Limpando a pré-busca para manter a contagem exata
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
?>

<!-- INSERT SINGLE -->
<?php get_header();
    wpb_set_post_views( get_the_ID() );
?>

<!-- INSERT LOOP WORDPRESS -->
<?php
    $popularPost = new WP_Query(
        array(
            'category_name' => 'nome-categoria',
            'posts_per_page' => 3,
            'meta_key' => 'wpb_post_views_count',
            'orderby' => 'meta_value'
        )
    );
?>

<?php while ( $popularPost->have_posts() ) : $popularPost->the_post(); ?>
    <!-- content -->
<?php endwhile; wp_reset_postdata(); ?>