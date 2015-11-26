<?php

// MENU PRINCIPAL
function nav_topo(){
    //$walker = new Menu_With_Description;
    wp_nav_menu(
    array(
        'theme_location'  => 'menu-topo',
        'container'       => 'nav',
        'container_class' => '',
        'menu_class'      => 'cf dropdown nav-topo'
        //'walker'          => $walker
        )
    );
}

register_nav_menu( 'menu-topo', 'Menu Topo' );

// MENU PRINCIPAL
function nav_principal(){
    //$walker = new Menu_With_Description;
    wp_nav_menu(
    array(
        'theme_location'  => 'menu-principal',
        'container'       => 'nav',
        'container_class' => 'nav-principal',
        'menu_class'      => 'cf dropdown container'
        //'walker'          => $walker
        )
    );
}

register_nav_menu( 'menu-principal', 'Menu Principal' );



// MENU FOOTER
function nav_footer(){
    //$walker = new Menu_With_Description;
    wp_nav_menu(
    array(
        'theme_location'  => 'menu-footer',
        'container'       => 'nav',
        'container_class' => 'nav-footer',
        'menu_class'      => 'cf dropdown'
        //'walker'          => $walker
        )
    );
}

register_nav_menu( 'menu-footer', 'Menu Footer' );
