<?php

/*--------------------------------------------------------------
	ALTERA A LOGO DO PAINEL DE LOGIN
--------------------------------------------------------------*/
add_action('login_head',  'altera_admin_logo');

function altera_admin_logo(){
    echo '<style  type="text/css">
			h1 a{
				background-image:url('.get_bloginfo('template_directory').'/assets/images/logo-blank-theme-wp.jpg)  !important;
				width: 300px !important;
				height: 100px !important;
				background-size: 300px !important;
			}
		  .button-primary{
			  background: #000 !important;
			  border-color: #000 !important;
		  }
		  </style>';
}

/*--------------------------------------------------------------
	ALTERA A URL DO PAINEL DE LOGIN
--------------------------------------------------------------*/
add_filter('login_headerurl', 'altera_admin_url');

function altera_admin_url(){
	return get_bloginfo('url');
}

/*--------------------------------------------------------------
	ALTERA O TÍTULO DO PAINEL DE LOGIN
--------------------------------------------------------------*/
add_filter('login_headertitle', 'altera_admin_titulo');

function altera_admin_titulo(){
	return get_option('blogname');
}
