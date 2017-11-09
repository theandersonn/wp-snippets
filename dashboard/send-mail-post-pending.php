<?php
    /* 
    Enviar e-mail para o administrador se houver posts para revisão
    
    Dicas do @GugaAlves (@tudoparawp): 
        - Adicionar link para enviar e-mail diretamente para o administrador;
        - Incluir link para a edição do post no admin, facilitando a vida do admin que receber este email.
    Dicas do Gustavo Bordoni (@webord): 
        - incluir na função o $post (objeto para WP_Query) para não ficar passando o $post_id a cada save;
        - Passar os parâmetros direto para a função admin_url() ao invés de concatenar.
    Dica do Manoel Netto: Incluir a verificação "! wp_is_post_revision( $post )" para não enviar e-mail a cada auto save.

    Referência: https://gist.github.com/fdaciuk/4574393
    */

    add_action( 'save_post', 'send_mail_post_pending', 10, 2 );

    function send_mail_post_pending( $post_id, $post ) {
        $post_status = get_post_status( $post );
    
        if( $post_status === 'pending' && ! wp_is_post_revision( $post ) ) {
            
            $email   = get_option( 'admin_email' );
            $subject = 'Revisar post no blog XXXXXX - ' . get_the_title( $post );
            $message .= 'O blog do XXXXXX tem 1 novo post para revisar.' . "\n\n";
            $message .= 'Título: ' . get_the_title( $post ) . "\n\n";       
            $message .= 'Link: ' . admin_url( "post.php?post={$post_id}&action=edit" );
            
            wp_mail( $email, $subject, $message );
        }

    }