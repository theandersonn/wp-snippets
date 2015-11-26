<?php

/*--------------------------------------------------------------
	Registra Sidebars
--------------------------------------------------------------*/
//Barra Lateral
register_sidebar(
    array(
    'name' => 'Barra lateral',
    'id' => 'barra-lateral',
    'before_widget' => '<div class="nome-estilo">',
    'after_widget' => '</div>',
    'description' => 'Widgets nesta área serão exibidos na barra lateral'
    )
);
